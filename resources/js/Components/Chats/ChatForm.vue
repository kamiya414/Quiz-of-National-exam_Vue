<script setup>
    import { ref } from 'vue';

    // 入力されたメッセージ
    const newMessage = ref('');

    const emit = defineEmits(["messagesent"]);
    const props = defineProps({
        user: Object,
    });

    // メッセージの送信
    const sendMessage = () => {
        if (newMessage.value.replace(/\r?\n/g, '').length > 0) {
            emit("messagesent", { user: JSON.parse(JSON.stringify(props.user)), message: newMessage.value });
            newMessage.value = "";
        }
    }
</script>

<template>
    <div class="text-center">
        <textarea
            class="border-0 border-white w-full"
            placeholder="メッセージを入力"
            v-model="newMessage"
           @@keyup.enter="sendMessage"
        />
    </div>
</template>