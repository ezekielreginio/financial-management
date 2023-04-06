<template>
    <div>
        <p class="text-danger fw-bold">Create an Account</p>
        <p class="hris-header fw-bold fs-1">Registration Form</p>
        <p class="fs-10 text-secondary">Fill up the form below to create an account.</p>

        <div class="container p-0 m-0">
            <form @submit.prevent="register">
                <div class="form-floating mb-3">
                    <input v-model="form.name" type="text" class="form-control" id="name">
                    <label for="name">Name</label>
                    <p v-if="errors.name" class="text-danger">{{ parseErrorMessage(errors.name) }}</p>
                </div>
                <div class="form-floating mb-3">
                    <input v-model="form.email" type="email" class="form-control" id="email-address">
                    <label for="email-address">Email Address</label>
                    <p v-if="errors.email" class="text-danger">{{ parseErrorMessage(errors.email) }}</p>
                </div>
                <div class="form-floating mb-3">
                    <input v-model="form.password" type="password" class="form-control" id="contact-number">
                    <label for="contact-number">Password</label>
                    <p v-if="errors.password" class="text-danger">{{ parseErrorMessage(errors.password) }}</p>
                </div>
                <div class="form-floating">
                    <input v-model="form.confirmPassword" type="password" class="form-control" id="floatingPassword">
                    <label for="floatingPassword">Confirm Password</label>
                    <p v-if="errors.confirmPassword" class="text-danger">Please retype your password.</p>
                </div>
                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn primary-bg text-white py-3 btn-text">REGISTER</button>
                    <p class="text-primary cursor-pointer text-center pt-5 fs-5" @click.prevent="changeView('login-component')">Go Back to Login</p>
                </div>
            </form>
        </div> 
    </div>
</template>

<script>
import { mapActions } from 'vuex'
import FormMixins from '../../mixins/FormMixins.vue';
import UserService from '../services/UserService.js';
import CookieService from '../../services/CookieService.js';

export default {
    mixins: [ FormMixins ],
    data() {
        return {
            form: {
                name: null,
                email: null,
                password: null,
                confirmPassword: null
            },
            errors: {}
        }
    },
    methods: {
        ...mapActions({
            changeView: 'welcome/setCurrentView'
        }),
        register() {
            let rules = {
                'confirmPassword': [
                    {
                        rule: this.form.confirmPassword != this.form.password,
                        message: "Passwords do not match. Please try again"
                    }
                ]
            }

            if (this.validateForm(rules)) {
                return;
            }

            UserService.registrationRequest(this.form)
            .then((response) => {
                if (response.status == 200) {
                    CookieService.setCookie('user_token', response.data.data.access_token)
                    window.location.href = '/finance-management/dashboard'
                } else {
                    this.errors = error.response.data.errors
                }
            })
            .catch(error => {
                this.errors = error.response.data.errors
            })
        }
    }
}
</script>