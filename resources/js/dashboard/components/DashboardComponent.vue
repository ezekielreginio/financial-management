<template>
    <div class="dashboard-wrapper">
        <side-navigation-component current-page="dashboard" />
        <div class="item-right-content">
            <div class="right-side-item-topnav row">
                <div class="col-12 col-sm">
                    <top-navigation-component/>
                    <content-component />
                </div>
            </div>
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
   }
   
</style>