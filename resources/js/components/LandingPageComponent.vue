<template>
    <div>
        <div class="hr-anim" v-if="!isAuthenticated">
            <div id="hr-form" class="container h-100 float-end bg-white ps-20" :class="{
                'finance-login' : currentView == 'login-component' || currentView == null,
                'finance-registration' : currentView == 'registration-component'
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
import { mapActions, mapGetters } from 'vuex'
import LoginComponent from './subcomponents/LoginComponent.vue'
import InquiryFormComponent from './subcomponents/RegistrationComponent.vue'
export default {
    components: {
        'login-component': LoginComponent,
        'registration-component': InquiryFormComponent,
    },
    computed: {
        ...mapGetters({
            currentView: 'welcome/getCurrentView',
        }),
    },
    data(){
        return {
            isAuthenticated: false,
        }
    },
    methods: {
        ...mapActions({
            changeView: 'welcome/setCurrentView'
        }),
    }
}
</script>

<style scoped>
.finance-login {
    position: absolute;
    display: block;
    right:0;
    width: 59%;
    transition: 1s;
}

.finance-registration {
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