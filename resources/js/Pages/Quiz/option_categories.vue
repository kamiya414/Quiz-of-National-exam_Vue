<script setup>
 import Authenticated from '@/Layouts/AuthenticatedLayout.vue';
 import { Link } from '@inertiajs/vue3'
 const {quiz_categories} = defineProps({
     quiz_categories: Array
 });

</script>
<template>
   <Authenticated>
       <template #header>
           <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               option_categories
           </h2>
       </template>

       <div class="w-3/4 mx-auto mt-8">
            <h1 class="font-bold text-3xl text-gray-800 flex justify-center ...">分野別</h1>
            <div class="flex justify-end">
                <Link :href="route('option_years')" type="button" class=" font-bold text-3xl text-orange-400 ">◀</Link>
                <Link :href="route('option_categories')" type="button" class=" font-bold text-3xl text-green-400 ">▶</Link>
            </div>
            <div class="grid grid-cols-3  justify-items-center  "> 
                <div v-for="quiz_category in quiz_categories">
                    <button type="button" class=" bg-gradient-to-r from-green-400 to-blue-500 shadow-lg rounded px-2 py-1 my-4 hover:from-pink-500 hover:to-yellow-500 hover:shadow-sm hover:translate-y-0.5 transform transition  ">
                        <h2 class="font-bold text-xl text-white  text-center ">{{quiz_category.name}}</h2>
                    </button>
                
                </div>
            </div>
        </div>
   </Authenticated>
   

</template>