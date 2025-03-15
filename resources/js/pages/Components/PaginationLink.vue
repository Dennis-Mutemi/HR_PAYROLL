<template>  
    <ul class="pagination d-flex justify-content-center">
        <li 
            v-for="link in paginator.links" 
            :key="link.url" 
            :class="{'page-item': true, 'disabled': !link.url, 'active': link.active}">
            <a 
                class="page-link" 
                :href="link.url" 
                v-html="makelabel(link.label)">
            </a>
        </li>
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