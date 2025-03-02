<template>
       <Head :title="` | ${$page.component}`"/>
    <div>
        <form @submit.prevent="submit">
            <!-- <div class="form-group">
                <label class="form-control-label">Name</label>
                <input class="form-control" type="text" v-model="form.name">
                <small>{{ form.errors.name }}</small>
            </div> -->
            <Textinput 
                name="Name" 
                v-model="form.name" 
                :message="form.errors.name"
            />
            <!-- <div class="form-group">
                <label class="form-control-label">Email Address</label>
                <input class="form-control" type="text" v-model="form.email">
                <small>{{ form.errors.email }}</small>
            </div> -->
            <Textinput 
                name="Email" 
                type="email" 
                v-model="form.email" 
                :message="form.errors.email"
            />
            <!-- <div class="form-group">
                <label class="form-control-label">Password</label>
                <input class="form-control" type="text" v-model="form.password">
                <small>{{ form.errors.password }}</small>
            </div> -->
            <Textinput 
                name="Password" 
                type="password" 
                v-model="form.password"
                :message="form.errors.password"
             />
            <!-- <div class="form-group">
                <label class="form-control-label">Confirm Password</label>
                <input class="form-control" type="text" v-model="form.password_confirmation">
               
            </div> -->
            <Textinput 
                name="Confirm Password" 
                type="password"
                v-model="form.password_confirmation"
             />
            <div class="form-group mb-0">
               <button class="btn btn-lg btn-block btn-primary" type="submit" :disabled="form.processing">Register</button>
            </div>
       </form>
    </div>
</template>

<script setup>
import { reactive } from 'vue';
import { router ,useForm} from '@inertiajs/vue3';
import Textinput from '../Components/Textinput.vue';

//   const form=reactive({
//     name:null,
//     email:null,
//     password:null,
//     password_confirmation:null
//   })

  const form=useForm({
    name:null,
    email:null,
    password:null,
    password_confirmation:null
  })
const submit=()=>{
    //console.log(form);
    //router.post('/register',form);
    form.post(route('register'),{
        onError:()=>form.reset("password","password_confirmation")
    });
}

</script>

<style lang="scss" scoped>

</style>