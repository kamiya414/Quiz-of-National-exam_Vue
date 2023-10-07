<script setup>
import Authenticated from '@/Layouts/AuthenticatedLayout.vue';
import {createApp,onMounted,ref} from "vue";
import { Link } from '@inertiajs/vue3';
import Modal from "@/Components/Modal_note.vue";
import { Chart, ChartData, registerables } from "chart.js";
import { PieChart, LineChart } from "vue-chart-3";
  
 const props= defineProps({
        correct: Array,
        total: Array,
        correct_rate: Array,
        to_be_ans_cnt: Array,
        quiz_cnt:Array,
        perfect_cnt:Array,
        weak_cnt:Array,
});

const isShow = ref(false);

const onOpen = () => {
  isShow.value = true;
};

const onClose = () => {
  isShow.value = false;
};

const perfect_rate=Math.round(props.perfect_cnt/props.quiz_cnt*100,1);
const weak_rate=Math.round(props.weak_cnt/props.quiz_cnt*100,1);
const to_be_ans_rate=Math.round(props.to_be_ans_cnt/props.quiz_cnt*100,1);
const ans_rate=perfect_rate+weak_rate

Chart.register(...registerables);

  
    // PieChart 用のデータ
    const pieData = {
      labels: ["完璧", "苦手", "未学習"],
      datasets: [
        {
          label: "My First Dataset",
          data: [perfect_rate, weak_rate, to_be_ans_rate],
          backgroundColor: [
            "rgb(255, 99, 132)",
            "rgb(54, 162, 235)",
            "rgb(255, 205, 86)",
          ],
          hoverOffset: 4,
        },
      ],
    };

    // LineChart 用のデータ
    const lineData={
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
      datasets: [
        {
          label: "My First Dataset",
          data: [65, 59, 80, 81, 56, 55, 40],
          fill: false,
          borderColor: "rgb(75, 192, 192)",
          tension: 0.1,
        },
      ],

    };

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
                <div class="wrapper mt-4 flex justify-center">
                    <PieChart :chartData="pieData" />
                    <LineChart :chartData="lineData" />
                </div>
                <div class="grid grid-cols-4 justify-items-center">    
                    <div>
                        <p>正解{{correct}}/全{{total}}問中</p>
                        <p>正答率{{correct_rate}}%</p>
                    </div>
                
                    <div>
                        <p>完璧{{perfect_cnt}}問/全{{quiz_cnt}}問中</p>
                        <p>完璧率{{perfect_rate}}％</p>
                    </div>   
                    <div>
                        <p>苦手{{weak_cnt}}問/全{{quiz_cnt}}問中</p>
                        <p>苦手率{{weak_rate}}％</p>
                    </div>
                    <div>
                        <p>未学習{{to_be_ans_cnt}}問/全{{quiz_cnt}}問中</p>
                        <p>学習率{{ans_rate}}％</p>
                        <p>未学習率{{to_be_ans_rate}}％</p>
                    </div>
                    
                </div>
        </div>
        <div class="flex justify-evenly">
            <button type="button" class="bg-green-400 shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                <p class="font-bold text-xl text-white text-center">戻る</p>
            </button>
            <a :href="route('option')" type="button" class="bg-orange-400 shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                <p class="font-bold text-xl text-white text-center">問題選択へ</p>
            </a>
            <div>
                <button @click="onOpen" class="bg-orange-400 shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                    <p class="font-bold text-xl text-white  text-center ">メモ</p>
                </button>
                <Modal :show="isShow" @close="onClose" ></Modal>
            </div>
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