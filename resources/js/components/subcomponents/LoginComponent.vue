<template>
    <div>
        <p class="text-danger fw-bold">SAVE MONEY! </p>
        <p class="hris-header fw-bold fs-1">FINANCE MANAGEMENT</p>
        <p class="fs-10 text-secondary">Log in with your data that you entered during your registration. </p>

        <div class="container p-0 m-0">
            <form @submit.prevent="login">
                <div v-if="alertMessage" class="alert alert-danger" role="alert">
                    {{ alertMessage }}
                </div>
                <div class="form-floating mb-3">
                    <input type="email" v-model="form.email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                    <p v-if="errors.email" class="text-danger">{{ errors.email }}</p>
                </div>
                <div class="form-floating">
                    <input type="password" v-model="form.password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    <p v-if="errors.password" class="text-danger">{{ errors.password }}</p>
                </div>
                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn primary-bg text-white py-3 btn-text">LOG IN</button>
                    <p class="text-primary cursor-pointer text-center pt-5 fs-5" @click.prevent="changeView('registration-component')">Create an Account? Click Here!</p>
                </div>
            </form>
        </div> 
    </div>
</template>

<script>
import { mapActions } from 'vuex'
import FormMixins from '../../mixins/FormMixins.vue'
import UserService from '../services/UserService.js'
import CookieService from '../../services/CookieService.js'

export default {
    data() {
        return {
            form: {
                email: null,
                password: null
            },
            errors: {},
            alertMessage: null 
        }
    },
    mixins: [FormMixins],
    methods: {
        ...mapActions({
            changeView: 'welcome/setCurrentView'
        }),
        login() {
            this.alertMessage = null

            if (this.validateForm()) {
                return;
            }

            UserService.loginRequest(this.form)
            .then((response) => {
                if (response.status == 200) {
                    CookieService.setCookie('user_token', response.data.data.access_token);
                    window.location.href = '/finance-management/dashboard'
                } else {
                    this.invalidateCredentials()
                }
            })
            .catch(error => {
                this.invalidateCredentials()
            })
        },
        invalidateCredentials() {
            this.alertMessage = "Invalid Login Credentials. Please Try Again."
        }
    }
}
</script>