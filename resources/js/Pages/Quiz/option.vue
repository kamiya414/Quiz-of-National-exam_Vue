<script setup>
 import Authenticated from '@/Layouts/AuthenticatedLayout.vue';
 import { Link } from '@inertiajs/vue3'
 import {createApp,onMounted,ref} from "vue"
 

const {quiz_categories,quiz_years} = defineProps({
    quiz_categories: Array,
    quiz_years:Array
});
// const props = defineProps({
//       quiz_years: Array

//   });
// const props= defineProps({
//     quiz_categories: Array,
//     quiz_years:Array
// });



const isOption=ref('1')
// const change=(num)=>isOption.value=num
function change(num){
    isOption.value=num 
}

onMounted( () => {
  // 星を表示するための親要素を取得
  const stars = document.querySelector(".stars");

  // 星を生成する関数
      const createStar = () => {
        const starEl = document.createElement("span");
        starEl.className = "star";
        const minSize = 1; // 星の最小サイズを指定
        const maxSize = 2; // 星の最大サイズを指定
        const size = Math.random() * (maxSize - minSize) + minSize;
        starEl.style.width = `${size}px`;
        starEl.style.height = `${size}px`;
        starEl.style.left = `${Math.random() * 100}%`;
        starEl.style.top = `${Math.random() * 100}%`;
        starEl.style.animationDelay = `${Math.random() * 10}s`;
        stars.appendChild(starEl);
      };

      // for文で星を生成する関数を指定した回数呼び出す
      for (let i = 0; i <= 500; i++) {
        createStar();
      }
      

});



</script>
<template>
   <Authenticated>
       <div class="stars">
          
       <!--年度別選択画面　 ◀押すとquiz_year▶押すとquiz_category-->
            <div v-show="isOption=='1'" class="stars bg-scroll ... w-full h-screen bg-clip-border" style="background-image:url('/img/background_img.jpg') ;background-repeat:no-repeat;background-size:cover">
               <div class="w-3/4 mx-auto">
                    <h1 class="text-white text-5xl flex justify-center ... mt-10">年度別</h1>
                    <div class="flex justify-end">
                        <button type="button" @click="change('1')" class=" font-extrabold text-transparent text-5xl bg-clip-text bg-gradient-to-r from-pink-500 to-yellow-500 ">◀</button>
                        <button type="button" @click="change('2')" class=" font-extrabold text-transparent text-5xl bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">▶</button>
                    </div>
                    <div class="grid grid-cols-3 justify-items-center "> 
                        <div v-for="quiz_year in quiz_years">
                             <Link :href="route('year_to_setting',{quiz_year:quiz_year.id})" type="button" class="rounded-full w-60 h-30 bg-gradient-to-r from-pink-500 to-yellow-500 shadow-lg rounded px-2 py-1 my-4 hover:from-green-400 hover:to-blue-500 hover:shadow-sm hover:translate-y-0.5 transform transition ">
                                <h2 class="font-bold text-2xl text-white  text-center p-4">{{quiz_year.name}}</h2>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
             <!--分野別選択画面　 route('option_categories')ならquiz_category.name-->
            <div v-show="isOption=='2'">
               <div class="w-3/4 mx-auto ">
                    <h1 class="text-white text-5xl flex justify-center ... mt-10">分野別</h1>
                    <div class="flex justify-end">
                        <button type="button" @click="change('1')" class=" font-extrabold text-transparent text-5xl bg-clip-text bg-gradient-to-r from-pink-500 to-yellow-500 ">◀</button>
                        <button type="button" @click="change('2')" class=" font-extrabold text-transparent text-5xl bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">▶</button>
                    </div>
                    <div class="grid grid-cols-3 justify-items-center  "> 
                        <div v-for="quiz_category in quiz_categories">
                            <Link :href="route('category_to_setting',{quiz_category:quiz_category.id})"  type="button" class=" rounded-full w-60 h-30 bg-gradient-to-r from-green-400 to-blue-500 shadow-lg rounded px-2 py-1 my-4 hover:from-pink-500 hover:to-yellow-500 hover:shadow-sm hover:translate-y-0.5 transform transition">
                                <h2 class="font-bold  text-2xl text-white  text-center p-4 truncate ">{{quiz_category.name}}</h2>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </Authenticated>
   

</template>

<style >


.stars {
        position: relative;
        width: 100%; /* 星空の横幅 */
        height: 100vh; /* 星空の縦幅 */
        background-image: linear-gradient(0deg, #00dedc, #115d89, #080f1c); /* 星空の背景色 */
        overflow: hidden; /* 星が枠外にはみ出すのを防ぐ */
    }

.star {
        position: absolute;
        display: block;
        background-color: #fff; /* 星の色 */
        border-radius: 50%;
        box-shadow: 0 0 4px 2px rgba(#fff, 0.2); /* 星の影 */
        opacity: 0;
        animation: twinkle 3s infinite;
    }

/* 星がキラキラ光るアニメーション */
@keyframes twinkle {
        0% {
            opacity: 0;
        }
        50% {
            transform: scale(1.1);
            opacity: 1;
        }
        100% {
            opacity: 0;
            transform: scale(1);
        }
    }
</style>