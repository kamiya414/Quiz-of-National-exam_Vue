<script setup>
 import Authenticated from '@/Layouts/AuthenticatedLayout.vue';

const props = defineProps(['choices']);



// const {quizzes} = defineProps({
//       quizzes: Object
//   });
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
            
           
           <div class=" "> 
                
               <div v-for="choice in choices">
                  
                   <h2 class="font-bold text-xl text-black  text-center ">{{choice.content}}</h2>
                    <!--<h3 class="font-bold text-xl text-black  text-center">{{choices.quiz.content}}</h3>-->

               </div>
              
           </div>
       </div>
   </Authenticated>

</template>