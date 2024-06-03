<script setup>
    import axios from 'axios';
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import ChatForm from '@/Components/Chats/ChatForm.vue';
    import ChatMessages from '@/Components/Chats/ChatMessages.vue';
    import { Head, usePage } from  '@inertiajs/vue3'; 
    // import { Head, usePage } from '@inertiajs/inertia-vue3'; ←これだとエラー
    import { ref, computed } from 'vue';

    const user = computed(() => usePage().props.value.auth.user);
    const messages = ref([]);

    axios
        .get(route('chat.fetch'))
        .then(res => {
            messages.value = res.data;
        });
    // 追記
    window.Echo
        .private('chat')  // 作成したイベントのチャンネル名と合わせる
        .listen('MessageSent', (e) => {  // 第一引数はイベントのクラス名
            messages.value = createNewMessage({
                message: e.message.message,
                user: e.user
            });
        });

    // 新規メッセージ（表示用）の作成
    const createNewMessage = (message) => {
        let newMessages = JSON.parse(JSON.stringify(messages.value));
        newMessages.push(message);
        return newMessages;
    }

    // メッセージをバックエンドに送信
    const addMessage = async (message) => {
        messages.value = createNewMessage(message);
        const res = await axios.post(route('chat.store'), message);
    }
</script>

<template>
    <Head title="チャット" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                チャット
            </h2>
        </template>

        <div class="py-12 h-[600px]">
            <div class="mx-[8%] bg-white h-full overflow-y-scroll p-3">
                <ChatMessages :messages="messages" />
            </div>
            <div class="mx-[8%] bg-white border-t-2">
                <ChatForm @messagesent="addMessage" :user="user" />
            </div>
        </div>
    </AuthenticatedLayout>
</template>