<script setup>
import Authenticated from '@/Layouts/AuthenticatedLayout.vue';
import {createApp,onMounted,ref} from "vue";
import { Chart, ChartData, registerables } from "chart.js";
import { defineComponent } from "vue";
import { PieChart, LineChart } from "vue-chart-3";import { Link } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

const {quiz_category} = defineProps({
    quiz_category:Array
});

  const form = useForm({
      quiz_category_id:"",
      range: "",
      num_of_que: "5",
      sort: "",
      limit: "",
      time_limit: "60",
  })

Chart.register(...registerables);

  
    // PieChart 用のデータ
    const pieData = {
      labels: ["Red", "Blue", "Yellow"],
      datasets: [
        {
          label: "My First Dataset",
          data: [300, 50, 100],
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
    
    function submit(quiz){
    form.quiz_category_id=quiz_category.id
    form.post(route('setting.store2'))
}



</script>
<template>
    <Authenticated>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Setting
            </h2>
        </template>
        <div class="w-3/4 mx-auto mt-8">
            <h1 class="font-bold text-3xl text-gray-800 flex justify-center ...">{{quiz_category.name}}</h1>
            <!--<h1 class="font-bold text-3xl text-gray-800 flex justify-center ...">{{quiz_category.name}}</h1>-->
            <div class="wrapper mt-4 flex justify-center">
                <PieChart :chartData="pieData" />
                <LineChart :chartData="lineData" />
             </div>
             <form @submit.prevent="submit(quiz)" >
                <p class="mx-auto mt-4 flex justify-center">【絞り込み】
                    <div class="text-red-700" v-if="form.errors.range">選択してください。</div>
                </p>
                <div class="w-2/4 mx-auto flex justify-evenly">
                    <input type="radio" name="all" value="all" id="btn01" class="checkbox" v-model="form.range">
                        <label for="btn01" class="btn bg-white block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm rounded px-2 py-1 my-4 hover:bg-cyan-100 hover:shadow-base hover:translate-y-0.5 transform transition">
                            すべて
                        </label>
                    <input type="radio" name="perfect" value="perfect" id="btn02" class="checkbox" v-model="form.range" >
                        <label for="btn02" class="btn bg-white block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm rounded px-2 py-1 my-4 hover:bg-cyan-100 hover:shadow-base hover:translate-y-0.5 transform transition">
                            完璧
                        </label>
                    <input type="radio" name="weak" value="weak" id="btn03" class="checkbox" v-model="form.range">
                        <label for="btn03" class="btn bg-white block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm rounded px-2 py-1 my-4 hover:bg-cyan-100 hover:shadow-base hover:translate-y-0.5 transform transition">
                            苦手
                        </label>
                    <input type="radio" name="to_be_ans" value="to_be_ans" id="btn04" class="checkbox" v-model="form.range">
                        <label for="btn04" class="btn bg-white block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm rounded px-2 py-1 my-4 hover:bg-cyan-100 hover:shadow-base hover:translate-y-0.5 transform transition">
                            未学習
                        </label>
                </div>
               <p class="mx-auto mt-4 flex justify-center">【問題数】
                    <div class="text-red-700" v-if="form.errors.num_of_que">問題数を指定してください</div>
                </p>
                <div class="w-2/4 mx-auto mt-4 flex justify-center space-x-2">
                    <input type="number"  min="1" class="w-12 h-12 text-center  px-1 py-1" v-model="form.num_of_que">
                    <p class="mt-4">問／30問</p>
                </div>
                 <p class="mx-auto mt-4 flex justify-center">【並び替え】
                    <div class="text-red-700" v-if="form.errors.sort">選択してください</div>
                </p>
                <div class="w-2/4 mx-auto  flex justify-evenly">
                    <input type="radio" name="asc" value="asc" id="btn05" class="checkbox" v-model="form.sort">
                        <label for="btn05" class="btn bg-white  block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm rounded px-2 py-1 my-4 hover:bg-cyan-100 hover:shadow-base hover:translate-y-0.5 transform transition">
                        昇順
                        </label>
                    <input type="radio" name="desc" value="desc" id="btn06" class="checkbox" v-model="form.sort">
                        <label for="btn06" class="btn bg-white  block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm rounded px-2 py-1 my-4 hover:bg-cyan-100 hover:shadow-base hover:translate-y-0.5 transform transition">
                        降順
                        </label>
                    <input type="radio" name="random" value="random" id="btn07" class="checkbox" v-model="form.sort">
                        <label for="btn07" class="btn bg-white  block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm rounded px-2 py-1 my-4 hover:bg-cyan-100 hover:shadow-base hover:translate-y-0.5 transform transition">
                        ランダム
                        </label>
                </div>
               <p class="mx-auto mt-4 flex justify-center">【時間制限】
                    <div class="text-red-700" v-if="form.errors.limit">選択してください</div>
                </p>
                <div class="w-2/4 mx-auto flex justify-evenly">
                    <input type="radio" name="false" value="false"  id="btn08" class="checkbox" v-model="form.limit">
                        <label for="btn08" class="btn bg-white  block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm rounded px-2 py-1 my-4 hover:bg-cyan-100 hover:shadow-base hover:translate-y-0.5 transform transition">
                        なし
                        </label>
                    <input type="radio" name="true" value="true" id="btn09" class="checkbox" v-model="form.limit">
                        <label for="btn09" class="btn bg-white  block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm rounded px-2 py-1 my-4 hover:bg-cyan-100 hover:shadow-base hover:translate-y-0.5 transform transition">
                        あり
                        </label>
                    <div class="mt-4 flex space-x-2 ...">
                        <input type="number" min="1" class="w-12 h-12 text-center px-1 py-1" v-model="form.time_limit">
                        <p class="mt-4">秒</p>
                    </div>
                </div>
                <div class="w-3/4 mx-auto mt-8 flex justify-evenly">
                    <Link :href="route('option')" type="button"  class=" bg-green-400　shadow-m rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                        <p class="font-bold text-xl text-white  text-center ">戻る</p>
                    </Link>
                    <!--確定でform内容を送信。<button> が <form> の中にある場合、そのボタンは "submit" ボタンとして扱われる。-->
                    <button type="submit" :disabled="form.processing" class=" bg-orange-400　shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition " >
                        <p class="font-bold text-xl text-white  text-center">確定</p>
                    </button>
                </div>
            </form>
        </div>
   </Authenticated>
</template>
<style >

    .btn {
    	cursor: pointer;
    }
    
    .checkbox {
    	display: none;
    }

    .checkbox:checked+.btn {
    	background: #CCFFFF ;
    }
    .wrapper {
        display: flex;
    }
</style>