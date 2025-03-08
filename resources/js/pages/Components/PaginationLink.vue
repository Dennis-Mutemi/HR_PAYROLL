<template>  
    <ul class="pagination"  v-for="link in paginator.links" :key="link.url">
        <component 
            :is="link.active ? 'li' : 'a'" 
            :class="{'page-item':true,'disabled':!link.url,'active':link.active}" 
            :href="link.url"                 
            v-html="makelabel(link.label)">
        </component>
    </ul>
    <p class="text-center">Showing {{ paginator.from }} to {{ paginator.to }} of {{ paginator.total }} entries</p> 
</template>

<script setup>
 defineProps({
     paginator:{
         type: Object,
         required: true
     }
 });
 const makelabel=(label)=>{
     if(label.includes('Previous')){
         return '<<';
     }else if(label.includes('Next')){
         return '>>';
     }else {
         return label;
     }
 };
</script>