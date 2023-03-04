<template>
    <div class="container dashboard-wrapper flex-center">
        <side-navigation-component current-page="dashboard" />
        <div class="container flex-col">
            <top-navigation-component/>
            <content-component />
        </div>
    </div>
</template>

<script>
    import SideNavigationComponent from './SideNavigationComponent.vue';
    import TopNavigationComponent from './TopNavigationComponent.vue';
    import ContentComponent from './ContentComponent.vue';

    export default {
        components : {
            'side-navigation-component' : SideNavigationComponent,
            'top-navigation-component'  : TopNavigationComponent,
            'content-component'         : ContentComponent
        }
    }
</script>

<style scoped>
  .dashboard-wrapper{
        margin: 1em;
  }
</style>