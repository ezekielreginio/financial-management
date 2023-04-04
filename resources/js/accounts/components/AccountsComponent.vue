<template>
    <div class="accounts-wrapper">
        <side-navigation-component current-page="accounts" />
        <div class="item-right-content">
            <div class="right-side-item-topnav row">
                    <top-navigation-component/>
            </div>
            <div class="right-side-item-widgets row"> 
                    <content-component />
                    <content-component />
            </div>
        </div>
    </div>
</template>

<script>
    import SideNavigationComponent from '../../layouts-components/SideNavigationComponent.vue';
    import TopNavigationComponent from '../../layouts-components/TopNavigationComponent.vue';
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
.accounts-wrapper{
        padding: auto;
        display: grid;
        grid-template-columns: 20% 80%;
        grid-template-areas: 
           'leftContent rightContent';
  }
  .item-left-content{
    grid-area: leftContent;
    margin: 1em;
   }
  .item-right-content{
    grid-area: rightContent;
    width: auto;
    margin: 1em;
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: 10% 90%;
    grid-template-areas:
       'topnav'
       'widgets';
   }

   .right-side-item-topnav{
    grid-area: topnav;
    margin: 0em 1em;
   }
   .right-side-item-widgets{
    grid-area: widgets;
    margin: 0em 1em;
   }
</style>
