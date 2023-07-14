<script setup>
import Authenticated from '@/Layouts/AuthenticatedLayout.vue';
import {createApp,onMounted,ref} from "vue"
// const props = defineProps(['quizzes']);

const props = defineProps({
      quizzes: Array
  });
onMounted(()=>{
    console.log(props.quizzes)
})

const count=ref(0)
function addCount(){
    count.value++
    is_quiz.value=!is_quiz.value
}

function subCount(){
    count.value--
}

const is_selected=ref(-1)

const is_quiz=ref(true)


</script>


<template>
    <Authenticated>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               Quiz
            </h2>
        </template>
        <div class="w-3/4 mx-auto mt-8">
            <h1 class="font-bold text-3xl text-gray-800 flex justify-center ...">問題</h1>
            <div v-for="(quiz,quiz_index) in quizzes" :key="quiz.id" class="grid grid-cols-1 justify-items-center">
                <div v-show="count===quiz_index" >
                    <h2 class="font-bold text-xl text-black text-center ">{{quiz.id}} ) {{quiz.content}}</h2>
                        <!--問題画面-->
                        <div v-show="is_quiz">
                            <div v-for="(choice,index) in quiz.choices">
                                <label :for="String(quiz_index)+String(index+1)" @click="is_selected=index" class ="block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg hover:bg-cyan-100 hover:shadow-sm hover:translate-y-0.5 transform transition peer-checked:bg-green-200">
                                    <!--<input type="radio" :id="index+1" name="choice" v-model="choice.answer"  class="  "/>-->
                                     <input type="radio" :id="String(quiz_index)+String(index+1)" name="choice" class="peer"/>
                                        ({{index+1}}) {{choice.content}}
                                </label>
                            </div>
                        </div>
                        <!--解説画面-->
                        <div v-show="!is_quiz">  
                            <div v-for="(choice,index) in quiz.choices">
                                <!--choice.answerが１「正解」の時青色に-->
                                <div :for="index+1" v-if="choice.answer==1 " class="relative flex">
                                    <div class="flex-none mt-1 font-bold text-6xl text-blue-300">o</div>
                                    <div  class =" flex-auto block mt-4 border border-gray-300 rounded-lg  py-2 px-6 text-lg bg-blue-300">
                                        ({{index+1}}) {{choice.content}}
                                    </div> 
                                </div>
                                <!--choice.answerが０「不正解」かつこのラベルが選択されている時赤色に-->
                                <div :for="index+1" v-else-if="choice.answer==0 && is_selected===index" class="flex">
                                    <div class="flex-none mt-1 font-bold text-6xl text-red-300">×</div>
                                    <label  class =" flex-auto block mt-4 border border-gray-300  rounded-lg  py-2 px-6 text-lg bg-red-300">
                                        ({{index+1}}) {{choice.content}}
                                    </label>
                                </div>
                                <!--choice.answerが０「不正解」かつ選択されていないときは透明-->
                                <div :for="index+1" v-else  class="flex">
                                    <div class="flex-none font-bold text-6xl text-red-300">&nbsp;&nbsp;&nbsp;</div>
                                    <label  class ="flex-auto block mt-4 border border-gray-300 rounded-lg py-2 px-6 text-lg">
                                        ({{index+1}}) {{choice.content}}
                                    </label>
                                </div>
                            </div>
                    
                        </div>
                </div>
            </div>
            <div class="flex justify-evenly">
                <button type="button" @click="subCount()"  class="  bg-green-400　shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                    <p class="font-bold text-xl text-white  text-center ">戻る</p>
                </button>
                <button v-show="is_quiz" type="button" @click="is_quiz=!is_quiz"  class="  bg-orange-400　shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                    <p class="font-bold text-xl text-white  text-center ">解説へ</p>
                </button>
                <button v-show="!is_quiz" type="button" @click="addCount()"  class="  bg-orange-400　shadow-lg rounded px-2 py-1 my-4 hover:bg-orange-700 hover:shadow-sm hover:translate-y-0.5 transform transition">
                    <p class="font-bold text-xl text-white  text-center ">次の問題へ</p>
                </button>
            </div>
        </div>

   </Authenticated>

</template>
<style >
    .radiobutton {
  color: #2db29c;
}
</style>