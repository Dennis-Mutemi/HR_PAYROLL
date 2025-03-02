<template>
   <div class="main-wrapper login-body">
   <div class="login-wrapper">
      <div class="container">
         <img class="img-fluid logo-dark mb-2" :src="'assets/img/logo.png'" alt="Logo">
         <div class="loginbox">
            <div class="login-right">
               <div class="login-right-wrap">
                  <h1>Login</h1>
                  <p class="account-subtitle">Access to our dashboard</p>
                  <form @submit.prevent="submit">
                    <Textinput 
                        name="Email" 
                        v-model="form.email" 
                        type="email"
                        :message="form.errors.email"
                    />
                    <Textinput 
                        name="Password" 
                        v-model="form.password" 
                        type="password"
                        :message="form.errors.password"
                    />
                     <div class="form-group">
                        <div class="row">
                           <div class="col-6">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="cb1" v-model="form.remember">
                                 <label class="custom-control-label" for="cb1">Remember me</label>
                              </div>
                           </div>
                           <div class="col-6 text-right">
                              <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                           </div>
                        </div>
                     </div>
                     <button class="btn btn-lg btn-block btn-primary" type="submit" :disabled="form.processing">Login</button>
                     <div class="login-or">
                        <span class="or-line"></span>
                        <span class="span-or">or</span>
                     </div>
                     <div class="social-login mb-3">
                        <span>Login with</span>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                     </div>
                     <div class="text-center dont-have">Don't have an account yet? <Link :href="route('register')">Register</Link></div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</template>

<script setup>
    import { router ,useForm} from '@inertiajs/vue3';
    import Textinput from '../Components/Textinput.vue';
       const form=useForm({           
            email:null,
            password:null,    
            remember:null,       
        })
        const submit=()=>{
            //console.log(form);
            //router.post('/register',form);
            form.post('/',{
                onError:()=>form.reset("password","remember")
            });
        }   

        defineOptions({
        layout: null
        });
</script>

<style lang="scss" scoped>

</style>