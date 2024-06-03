<script setup>
    defineProps({
        messages: Array
    });
</script>

<template>
    <ul class="chat">
        <li class="left clearfix" v-for="message in messages" :key="message.id">
            <div class="clearfix">
                <div class="header">
                    <strong>{{ message.user.name }}</strong>
                </div>
                <div class="mb-2 text-white">
                    <p class="bg-[#6CC655] inline p-1 mb-2 rounded">{{ message.message }}</p>
                </div>
            </div>
        </li>
    </ul>
</template>