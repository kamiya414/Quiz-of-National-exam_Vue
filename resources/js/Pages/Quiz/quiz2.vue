<script setup>
import Authenticated from '@/Layouts/AuthenticatedLayout.vue';
import {createApp,onMounted,ref} from "vue"
// const props = defineProps(['quizzes']);
import axios from 'axios';
import { useForm } from '@inertiajs/vue3';
import Modal from "@/Components/Modal.1.vue";



const isShow = ref(false);

const onOpen = () => {
  isShow.value = true;
};

const onClose = () => {
  isShow.value = false;
};



const props = defineProps({
        quizzes: Array,
        num_of_que:Array,
        correct: Array,
        total: Array,
        correct_rate: Array,
  });
  
const form = useForm({
    content:'-1',
    quiz_id:'35-11',
  })
  


// 問題画面、解説画面切り替え
const count=ref(0)
function addCount(){
    count.value++,
    is_quiz.value=!is_quiz.value
}

function resultCorrect(){
    is_quiz.value=!is_quiz.value
}


// 後で削除、戻るボタン
function subCount(){
    count.value--
    }

const is_selected=ref(-1)

const is_quiz=ref(true)

function submit(quiz){
    form.quiz_id=quiz.id
    form.post(route('result.store'))
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
            <div class="w-full mx-auto  ">
                <div v-for="(quiz,quiz_index) in quizzes" :key="quiz.id" class="grid grid-cols-1 justify-items-center">
                    <form @submit.prevent="submit(quiz)">
                        <div v-show="count===quiz_index" class='mt-20' >
                            <h1 class="font-bold text-3xl text-white flex justify-center ...">問題</h1>
                            <h2 class="font-bold text-xl text-white text-center ">{{quiz.id}} ) {{quiz.content}}</h2>
                            <!--問題画面-->
                            <div v-show="is_quiz">
                                <div v-for="(choice,index) in quiz.choices">
                                    <!--<input type="radio" :id="String(quiz_index)+String(index+1)" name="choice" class="checkbox"/>-->
                                    <input type="radio" :id="String(quiz_index)+String(index+1)" :value='choice.answer' name="choice" class="hidden peer"  v-model="form.content"/>
                                    <!--<label :for="String(quiz_index)+String(index+1)" @click="is_selected=index" class ="btn bg-white block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm  hover:bg-cyan-100　 hover:shadow-base hover:translate-y-0.5 transform transition  ">-->
                                        <!--<input type="radio" :id="index+1" name="choice" v-model="choice.answer"  class="  "/>-->
                                    <label :for="String(quiz_index)+String(index+1)" @click="is_selected=index" class ="peer-checked:bg-[#CCFFFF] peer-checked:text-cyan-400 block mt-4 border border-white rounded-lg py-2 px-6 font-bold text-xl text-white shadow-sm hover:text-cyan-400  hover:bg-cyan-100 hover:shadow-base hover:translate-y-0.5 transform transition  ">
                                          
                                            ({{index+1}}) {{choice.content}}
                                    </label>
                                </div>
                            </div>
            
                            <!--解説画面-->
                            <div v-show="!is_quiz"> 
                                <div v-for="(choice,index) in quiz.choices">
                                    <!--choice.answerが１「正解」の時青色に-->
                                    <div :for="index+1" v-if="choice.answer==1" class="relative flex">
                                        <div class="flex-none mt-1 font-bold text-6xl text-blue-300 ">o</div>
                                        <div  class =" flex-auto block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg bg-blue-300 shadow-lg">
                                            ({{index+1}}) {{choice.content}}
                                        </div> 
                                    </div>
                                    
                                    <!--choice.answerが０「不正解」かつこのラベルが選択されている時赤色に-->
                                    <div :for="index+1" v-else-if="choice.answer==0 && is_selected===index" class="flex">
                                        <div class="flex-none mt-1 font-bold text-6xl text-red-300 ">×</div>
                                        <label  class ="flex-auto block mt-4 border border-gray-300  rounded-lg  py-2 px-6 text-lg bg-red-300 shadow-lg">
                                            ({{index+1}}) {{choice.content}}
                                        </label>
                                        
                                    </div>
                                    <!--choice.answerが０「不正解」かつ選択されていないときは透明-->
                                    <div :for="index+1" v-else class="flex">
                                        <div class="flex-none font-bold text-6xl text-red-300">&nbsp;&nbsp;&nbsp;</div>
                                        <label  class ="flex-auto block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg">
                                            ({{index+1}}) {{choice.content}}
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <button @click="onOpen" class="bg-orange-400 shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                                        <p class="font-bold text-xl text-white  text-center ">メモ</p>
                                    </button>
                                    <Modal :show="isShow" @close="onClose" >test</Modal>
                                </div>
                               
                            </div>
                            <div class="flex justify-evenly">
                                <button type="button" @click="subCount()" class="rounded px-2 py-1 my-4  border-b-2 border-white rounded-lg py-2 px-6 text-lg text-white hover:shadow-sm hover:translate-y-0.5 transform transition">
                                    <p class="font-bold text-xl text-white  text-center ">戻る</p>
                                </button>
                                <button v-show="is_quiz" type="submit" :disabled="form.processing" @click="resultCorrect()" class="rounded px-2 py-1 my-4  border-b-2 border-white rounded-lg py-2 px-6 text-lg text-white hover:shadow-sm hover:translate-y-0.5 transform transition">
                                    <p class="font-bold text-xl text-white  text-center ">解説へ</p>
                                </button>
                                <button v-show="!is_quiz" type="button" @click="addCount()"  class="rounded px-2 py-1 my-4  border-b-2 border-white rounded-lg py-2 px-6 text-lg text-white hover:shadow-sm hover:translate-y-0.5 transform transition">
                                    <p class="font-bold text-xl text-white  text-center ">次の問題へ</p>
                                </button>
                            </div>
                        </div>
                    </form>
                   
                </div>
                <div v-show="count===num_of_que" >
                    <h1 class="font-bold text-3xl text-gray-800 flex justify-center ...">結果</h1>
                    <p>正解{{correct}}</p>
                    <p>全問{{total}}</p>
                    <p>正答率{{correct_rate}}%</p>
                    <div class="flex justify-evenly">
                        <button type="button" class="bg-green-400 shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                            <p class="font-bold text-xl text-white text-center">戻る</p>
                        </button>
                        <a :href="route('option')" type="button" class="bg-orange-400 shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                            <p class="font-bold text-xl text-white text-center">問題選択へ</p>
                        </a>
                    </div>
                </div>
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
    
    .stars {
      position: relative;
      width: 100%; /* 星空の横幅 */
      height: 100vh; /* 星空の縦幅 */
      background-image: linear-gradient(0deg, #00dedc, #115d89, #080f1c); /* 星空の背景色 */
      overflow: hidden; /* 星が枠外にはみ出すのを防ぐ */
    }

/* 星のスタイル */
    .star {
      position: absolute;
      display: block;
      background-color: #fff; /* 星��色 */
      border-radius: 50%;
      box-shadow: 0 0 4px 2px rgba(#fff, 0.2); /* 星の影 */
      opacity: 0;
      animation: twinkle 5s infinite;
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