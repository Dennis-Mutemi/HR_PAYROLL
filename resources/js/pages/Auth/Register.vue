
<script setup>
        // import { reactive } from 'vue';
        import { useForm} from '@inertiajs/vue3';
        import Textinput from '../Components/Textinput.vue';
// import { preview } from 'vite';

        defineOptions({
        layout: null
        });

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
            password_confirmation:null,
            avatar:null,
            preview:null
        })
        const change=(e)=>{
            form.avatar=e.target.files[0];
            form.preview=URL.createObjectURL(e.target.files[0]);
        }
        const submit=()=>{
            //console.log(form);
            //router.post('/register',form);
            form.post(route('register'),{
                onError:()=>form.reset("password","password_confirmation")
            });
        }
</script>

<template>
       <Head :title="` | ${$page.component}`"/>
       <div class="main-wrapper login-body">
            <div class="login-wrapper">
                <div class="container">
                    <img class="img-fluid logo-dark mb-2" :src="'assets/img/logo.png'" alt="Logo">
                    <div class="loginbox">
                        <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Register</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <form @submit.prevent="submit">
                                <div class="mb-3">
                                    <label for="avatar" class="form-label">Profile Picture</label>
                                    <input 
                                        class="form-control" 
                                        type="file" 
                                        id="avatar" 
                                        @input="change"
                                    >
                                    <div v-if="form.errors.avatar" class="invalid-feedback">
                                        {{ form.errors.avatar }}
                                    </div>
                                    <div v-if="form.avatar" class="mt-3">
                                        <img :src="form.preview" class="img-thumbnail" alt="Profile Picture Preview" style="max-width: 200px;">
                                    </div>
                                </div>
                                <Textinput 
                                    name="Name" 
                                    v-model="form.name" 
                                    :message="form.errors.name"
                                />                              
                                <Textinput 
                                    name="Email" 
                                    type="email" 
                                    v-model="form.email" 
                                    :message="form.errors.email"
                                />
                                <Textinput 
                                    name="Password" 
                                    type="password" 
                                    v-model="form.password"
                                    :message="form.errors.password"
                                />
                                <Textinput 
                                    name="Confirm Password" 
                                    type="password"
                                    v-model="form.password_confirmation"
                                />
                                <div class="form-group mb-0">
                                    <button class="btn btn-lg btn-block btn-primary" type="submit" :disabled="form.processing">Register</button>
                                </div>
                            </form>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>
                            <div class="social-login">
                                <span>Register with</span>
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                            </div>
                            <div class="text-center dont-have">Already have an account? <Link href="/">Login</Link></div>
                        </div>
                        </div>
                    </div>
                </div>
      </div>
</div>
</template>
