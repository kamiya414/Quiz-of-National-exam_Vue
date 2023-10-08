<script setup>
import Authenticated from '@/Layouts/AuthenticatedLayout.vue';
import {createApp,onMounted,ref} from "vue"
// const props = defineProps(['quizzes']);
import axios from 'axios';
import { useForm } from '@inertiajs/vue3';
import Modal from "@/Components/Modal_note.vue";
import { ModalsContainer} from 'vue-final-modal'



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
  
onMounted(()=>{
    console.log(props.quizzes)
})

// 問題画面、解説画面切り替え
const count=ref(0)
function addCount(){
    count.value++,
    Type.value=0
}


function resultCorrect(){
    Type.value=1
}
function final(){
    Type.value=2
}

const is_final=ref(false)


const is_selected=ref(-1)

const Type=ref(0)

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
        <div class="stars bg-scroll ... w-full h-screen bg-clip-border" style="background-image:url('/img/background_img.jpg') ;background-repeat:no-repeat;background-size:cover">
            <div class="w-full mx-auto  ">
                <div v-for="(quiz,quiz_index) in quizzes" :key="quiz.id" class="grid grid-cols-1 justify-items-center">
                    
                    <form @submit.prevent="submit(quiz)">
                        <div v-show="count===quiz_index" class='mt-20' >
                            <div v-show="Type === 0 || Type===1">
                                <h1 class="font-bold text-3xl text-white flex justify-center ...">問題</h1>
                                <h2 class="font-bold text-xl text-white text-center ">{{quiz.id}} ) {{quiz.content}}</h2>
                            </div>
                            <!--問題画面-->
                            <div v-show="Type === 0">
                                <div v-for="(choice,index) in quiz.choices">
                                    <!--<input type="radio" :id="String(quiz_index)+String(index+1)" name="choice" class="checkbox"/>-->
                                    <input type="radio" :id="String(quiz_index)+String(index+1)" name="choice" class="hidden peer" @click="form.content=choice.answer"/>
                                    <!--<label :for="String(quiz_index)+String(index+1)" @click="is_selected=index" class ="btn bg-white block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm  hover:bg-cyan-100　 hover:shadow-base hover:translate-y-0.5 transform transition  ">-->
                                        <!--<input type="radio" :id="index+1" name="choice" v-model="choice.answer"  class="  "/>-->
                                    <label :for="String(quiz_index)+String(index+1)" @click="is_selected=index" class ="peer-checked:bg-[#CCFFFF] peer-checked:text-cyan-400 block mt-4 border border-white rounded-lg py-2 px-6 font-bold text-xl text-white shadow-sm hover:text-cyan-400  hover:bg-cyan-100 hover:shadow-base hover:translate-y-0.5 transform transition ">
                                            ({{index+1}}) {{choice.content}}
                                    </label>
                                </div>
                            </div>
                            <!--解説画面-->
                            <div v-show="Type === 1"> 
                            
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
                            </div>
                            <div class="flex justify-center">
                                <button v-show="Type === 0" type="submit" :disabled="form.processing" @click="resultCorrect()" class="bg-green-400　shadow-m rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                                    <p class="font-bold text-xl text-white  text-center ">解説へ</p>
                                </button>
                                <div v-show="count+1 < num_of_que">
                                    <button v-show="Type === 1" type="button" @click="addCount()"  class="bg-green-400　shadow-m rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                                        <p class="font-bold text-xl text-white  text-center ">次の問題へ</p>
                                    </button>
                                </div>
                                <div v-show="count+1 === num_of_que">
                                    <button v-show="Type === 1" type="button" @click="final()" class="bg-green-400　shadow-m rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                                        <p class="font-bold text-xl text-white  text-center ">終了</p>
                                    </button>
                                 </div>
                            </div>
                            <!--modal メモ表示-->
                            <button v-show="Type === 1" type="button" @click="onOpen" class="bg-orange-400 shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                                <p class="font-bold text-xl text-white  text-center ">メモ{{quiz.id}}</p>
                                <Modal :show="isShow" :quiz_id="quizzes[count].id" @close="onClose" ></Modal>
                            </button>
                        </div>
                    </form>
                </div>
                <div v-show="Type === 2" >
                    <h1 class="font-bold text-3xl text-white flex justify-center ">結果</h1>
                    <div class="w-1/3 mx-auto grid grid-cols-2 block mt-4 border-4　border border-gray-300 rounded-full py-2 px-6 text-center">
                        <div class="text-white block mt-4 font-bold text-2xl">正解{{correct}}問/全{{total}}問中 </div>
                        <div class="text-white block mt-4 font-bold text-2xl">正答率{{correct_rate}}%</div>
                    </div>
                    <div class="flex justify-center ">
                        <a :href="route('option')" type="button" class="bg-orange-400 shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                            <p class="font-bold text-xl text-white text-center">問題選択へ</p>
                        </a>
                    </div>
                    <div style="height:450px;overflow:auto;" class="grid grid-cols-2 justify-items-center">
                        <div v-for="(quiz,quiz_index) in quizzes" :key="quiz.id" class="grid grid-cols-1 justify-items-center">
                            <h1 class="font-bold text-2xl text-white flex justify-center ...">問題</h1>
                            <h2 class="font-bold text-lg text-white text-center ">{{quiz.id}} ) {{quiz.content}}</h2>
                            <div v-for="(choice,index) in quiz.choices">
                                <!--choice.answerが１「正解」の時青色に-->
                                <div :for="index+1" v-if="choice.answer==1" class="relative flex">
                                    <div class="flex-none mt-1 font-bold text-5xl text-blue-300 ">o</div>
                                    <div  class =" flex-auto block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-base bg-blue-300 shadow-lg">
                                        ({{index+1}}) {{choice.content}}
                                    </div> 
                                </div>
                                
                                <!--choice.answerが０「不正解」かつこのラベルが選択されている時赤色に-->
                                <div :for="index+1" v-else-if="choice.answer==0 && is_selected===index" class="flex">
                                    <div class="flex-none mt-1 font-bold text-5xl text-red-300 ">×</div>
                                    <label  class ="flex-auto block mt-4 border border-gray-300  rounded-lg  py-2 px-6 text-base bg-red-300 shadow-lg">
                                        ({{index+1}}) {{choice.content}}
                                    </label>
                                    
                                </div>
                                <!--choice.answerが０「不正解」かつ選択されていないときは透明-->
                                <div :for="index+1" v-else class="flex">
                                    <div class="flex-none font-bold text-5xl text-red-300">&nbsp;&nbsp;&nbsp;</div>
                                    <label  class ="flex-auto block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-base">
                                        ({{index+1}}) {{choice.content}}
                                    </label>
                                </div>
                            </div>
                        </div>   
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

    
    /* 星のスタイル */
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