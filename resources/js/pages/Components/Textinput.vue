<template>   
    <div class="form-group">
        <label class="form-control-label">{{ name }}</label>
        <input class="form-control" :type="type" v-model="model" :class="{'is-invalid':message}">
        <small class="text-danger" v-if="message">{{ message }}</small>
    </div>  
</template>

<script setup>

const model = defineModel({
    type:null,
    required:true,
});
defineProps({
    name:{
        type:String,
        required:true,
    },
    type:{
        type: String,
        default:'text',
    },
    message: String   
})
</script>

<style lang="scss" scoped>

</style>