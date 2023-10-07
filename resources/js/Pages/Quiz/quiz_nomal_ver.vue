<script setup>
import Authenticated from '@/Layouts/AuthenticatedLayout.vue';
import {createApp,onMounted,ref} from "vue"
// const props = defineProps(['quizzes']);
import axios from 'axios';
import { useForm } from '@inertiajs/vue3';
// import Modal from "@/Components/Modal.1.vue";



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


</script>


<template>
    <Authenticated>
        <div class=" bg-scroll ... w-full h-screen bg-clip-border" style="background-image:url('/img/background_img.jpg') ;background-repeat:no-repeat;background-size:cover">
            <div class="w-full mx-auto  ">
                <div v-for="(quiz,quiz_index) in quizzes" :key="quiz.id" class="grid grid-cols-1 justify-items-center">
                    <form @submit.prevent="submit(quiz)">
                        <div v-show="count===quiz_index" >
                            <h1 class="font-bold text-3xl text-gray-800 flex justify-center ...">問題</h1>
                            <h2 class="font-bold text-xl text-black text-center ">{{quiz.id}} ) {{quiz.content}}</h2>
                            <!--問題画面-->
                            <div v-show="is_quiz">
                                <div v-for="(choice,index) in quiz.choices">
                                    <!--<input type="radio" :id="String(quiz_index)+String(index+1)" name="choice" class="checkbox"/>-->
                                    <input type="radio" :id="String(quiz_index)+String(index+1)" :value='choice.answer' name="choice" class="hidden peer"  v-model="form.content"/>
                                    <!--<label :for="String(quiz_index)+String(index+1)" @click="is_selected=index" class ="btn bg-white block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm  hover:bg-cyan-100　 hover:shadow-base hover:translate-y-0.5 transform transition  ">-->
                                        <!--<input type="radio" :id="index+1" name="choice" v-model="choice.answer"  class="  "/>-->
                                    <label :for="String(quiz_index)+String(index+1)" @click="is_selected=index" class ="peer-checked:bg-[#CCFFFF] block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg shadow-sm  hover:bg-cyan-100 hover:shadow-base hover:translate-y-0.5 transform transition ">
                                          
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
                                <button type="button" @click="subCount()" class="bg-green-400　shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                                    <p class="font-bold text-xl text-white  text-center ">戻る</p>
                                </button>
                                <button v-show="is_quiz" type="submit" :disabled="form.processing" @click="resultCorrect()" class="bg-orange-400 shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                                    <p class="font-bold text-xl text-white  text-center ">解説へ</p>
                                </button>
                                <button v-show="!is_quiz" type="button" @click="addCount()"  class="bg-orange-400 shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
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
</style>