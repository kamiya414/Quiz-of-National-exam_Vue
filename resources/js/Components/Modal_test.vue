<script setup>
import { computed, onMounted, onUnmounted, watch } from 'vue';
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import { useForm } from '@inertiajs/vue3';
import Authenticated from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3'

 
const props = defineProps({
    show: {
        type: Boolean,
        default: false,
    },
    maxWidth: {
        type: String,
        default: '2xl',
    },
    closeable: {
        type: Boolean,
        default: true,
    },
    quiz_id:{
        type:String,
    }
});

const emit = defineEmits(['close']);

watch(
    () => props.show,
    () => {
        if (props.show) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = null;
        }
    }
);

const close = () => {
    if (props.closeable) {
        emit('close');
    }
};

const closeOnEscape = (e) => {
    if (e.key === 'Escape' && props.show) {
        close();
    }
};

onMounted(() => document.addEventListener('keydown', closeOnEscape));

onUnmounted(() => {
    document.removeEventListener('keydown', closeOnEscape);
    document.body.style.overflow = null;
});

const maxWidthClass = computed(() => {
    return {
        sm: 'sm:max-w-sm',
        md: 'sm:max-w-md',
        lg: 'sm:max-w-lg',
        xl: 'sm:max-w-xl',
        '2xl': 'sm:max-w-2xl',
    }[props.maxWidth];
});

const form = useForm({
    content:'',
    quiz_id:props.quiz_id,
  })
 
 const isMemo=ref('1') 

function change(num){
    isMemo.value=num 
}  
</script>

<template>
    <teleport to="body">
        <transition leave-active-class="duration-200 ">
            <div v-show="show" class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" scroll-region>
                
                <div v-show="show" class="fixed inset-0 transform transition-all" @click="close"><!-- 外側クリックで閉じる-->
                 
                </div>
                <!--modal内部-->
                <div v-show="show" class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:mx-auto" :class="maxWidthClass">
                <!--<div v-show="isMemo=='1'">-->
                <!--    <div class="flex justify-end">-->
                <!--        <button type="button" @click="change('1')" class=" font-extrabold text-transparent text-5xl bg-clip-text bg-gradient-to-r from-pink-500 to-yellow-500 ">◀</button>-->
                <!--        <button type="button" @click="change('2')" class=" font-extrabold text-transparent text-5xl bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">▶</button>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div v-show="!isMemo=='2'">-->
                    <div class="flex justify-end">
                        <button type="button" @click="change('1')" class=" font-extrabold text-transparent text-5xl bg-clip-text bg-gradient-to-r from-pink-500 to-yellow-500 ">◀</button>
                        <button type="button" @click="change('2')" class=" font-extrabold text-transparent text-5xl bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">▶</button>
                    </div>
                
                    
                        <button type="button" class="text-5xl flex justify-end" @click="close">&times</button>
                        <form @submit.prevent="form.post(route('note.store'))">
                            <div id="app" class="w-full h-[400px]"><!-- リッチテキストエディタ-->
                              <quill-editor theme="snow" toolbar="full" v-model:content="form.content" contentType="text"></quill-editor>
                            </div>
        
                            <button type="submit" class="rounded px-2 py-1 my-4  border-b-2 border-black rounded-lg py-2 px-6 text-lg text-black hover:shadow-sm hover:translate-y-0.5 transform transition">
                                保存{{quiz_id}}
                            </button>
                        </form>
                        <slot v-if="show" />
                    </div>
                <!--</div>-->
            </div>
        </transition>
    </teleport>
</template>

   
