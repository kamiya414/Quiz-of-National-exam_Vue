<script setup>
import Authenticated from '@/Layouts/AuthenticatedLayout.vue';
import {createApp,onMounted,ref} from "vue";
import { Link } from '@inertiajs/vue3';


  
 const {incorrect,result} = defineProps({
        correct: Array,
        total: Array,
        correct_rate: Array,
});

</script>


<template>
    <Authenticated>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               Quiz
            </h2>
        </template>
        <div class="w-3/4 mx-auto mt-8">
            
                <!--<form @submit.prevent="form.post(route('result.store'))">-->
            <h1 class="font-bold text-3xl text-gray-800 flex justify-center ...">結果</h1>
                <p>正解{{correct}}</p>
                <p>全問{{to}}</p>
                <p>正答率{{correct_rate}}%</p>
        </div>
        <div class="flex justify-evenly">
            <button type="button" class="bg-green-400 shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                <p class="font-bold text-xl text-white text-center">戻る</p>
            </button>
            <a :href="route('option')" type="button" class="bg-orange-400 shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                <p class="font-bold text-xl text-white text-center">問題選択へ</p>
            </a>
        </div>
   </Authenticated>

</template>
<style >
    .radiobutton {
  color: #2db29c;
}

    .btn {
    	cursor: pointer;
    }
    
    .checkbox {
    	display: none;
    }

    .checkbox:checked+.btn {
    	background: #CCFFFF ;
    }
</style>