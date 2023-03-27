<template>
    <div>
        <p class="text-danger fw-bold">Create an Account</p>
        <p class="hris-header fw-bold fs-1">Registration Form</p>
        <p class="fs-10 text-secondary">Fill up the form below to create an account.</p>

        <div class="container p-0 m-0">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" placeholder="name@example.com">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="email-address" placeholder="name@example.com">
                <label for="email-address">Email Address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="contact-number" placeholder="Password">
                <label for="contact-number">Password</label>
            </div>
            <div class="form-floating">
                <textarea type="password" class="form-control" id="floatingPassword" placeholder="Password"></textarea>
                <label for="floatingPassword">Confirm Password</label>
            </div>
            <div class="d-grid gap-2 mt-3">
                <button class="btn primary-bg text-white py-3 btn-text" type="button">REGISTER</button>
                <p class="text-primary cursor-pointer text-center pt-5 fs-5" @click.prevent="changeView('login-component')">Go Back to Login</p>
            </div>
        </div> 
    </div>
</template>

<script>
import { mapActions } from 'vuex'

export default {
    methods: {
        ...mapActions({
            changeView: 'welcome/setCurrentView'
        }),
    }
}
</script>