<template>
    <div>
        <div class="hr-anim" v-if="!isAuthenticated">
            <div id="hr-form" class="container h-100 float-end bg-white ps-20" :class="{
                'hr-login' : currentView == 'login-component' || currentView == null,
                'hr-inquiry' : currentView == 'inquiry-form-component'
            }">
                <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="hr-bros"></div>
                    <p class="py-3 ps-1 hr-hover">RCG <br> SOLUTIONS</p>
                </div>
                <transition name="fade" mode="out-in">
                    <component :is="currentView"></component>
                </transition>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import { mapActions, mapGetters } from 'vuex'
import LoginComponent from './subcomponents/LoginComponent.vue'
import InquiryFormComponent from './subcomponents/InquiryFormComponent.vue'
export default {
    components: {
        'login-component': LoginComponent,
        'inquiry-form-component': InquiryFormComponent,
    },
    computed: {
        ...mapGetters({
            currentView: 'welcome/getCurrentView',
        }),
    },
    data(){
        return {
            form:{
                'email' : '',
                'password' : ''
            },
            isAuthenticated: false,
        }
    },
    methods: {
        ...mapActions({
            signIn:'auth/login',
            changeView: 'welcome/setCurrentView'
        }),
        async loginUser()
        {
            let vm = this
            await axios.get('/sanctum/csrf-cookie')
            await axios.post('api/login', this.form)
            .then((data)=>{
                vm.isAuthenticated = true
                this.signIn()
            })
            .catch((error) => {
                // console.log("Error! ", JSON.stringify(error.response.data.errors))
            })
        }
    }
}
</script>

<style scoped>
.hr-login {
    position: absolute;
    display: block;
    right:0;
    width: 59%;
    transition: 1s;
}

.hr-inquiry {
    position: absolute;
    display: block;
    transition: 1s;
    width: 59%;
    right: 41%;
}
.cursor-pointer {
    cursor: pointer;
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>