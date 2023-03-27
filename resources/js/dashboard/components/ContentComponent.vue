<template>
      <div class="content">
        <!-- card-group -->
        <div class="item-widget-cards d-flex flex-row mt-sm-5 row">
            <card-component 
                card-type="card-blue" 
                card-title="Total"
                sub-title="Assets"
                icon="fa-hand-holding"
                sub-icon="fa-house"
                sub-icon2="fa-coins"
                class="col-xxl-4 m-0 p-0 me-5"
            />

            <card-component 
                card-type="card-purple"
                card-title=""
                sub-title="Liabilities"
                icon="fa-sack-xmark" 
                sub-icon=""
                sub-icon2=""
                class="col-xxl-4 m-0 p-0 me-5"
            />

            <card-component 
                card-type="card-green"
                card-title="This Month's"
                sub-title="Expenses" 
                icon="fa-wallet" 
                sub-icon=""
                sub-icon2=""
                class="col-xxl-4 m-0 p-0"
            />  
            
        </div>
        <!-- table -->
        <div class="item-widget-charts d-flex justify-content-center">
            <bar-chart-component />
        </div>        
      </div>    
</template>

<script>

    import CardComponent from './sub-components/CardComponent.vue';
    import BarChartComponent from './sub-components/BarChartComponent.vue';

    export default {
        components : {
            CardComponent,
            BarChartComponent
        }
    }
</script>

<style scoped>
.item-widget-cards{
    margin: 0em 5em;
    grid-area: cards
}
.item-widget-charts{
    grid-area: charts;
}
.content{
    width: 100%;
    display: grid;
    grid-template-columns: 100%;
    grid-template-areas: 
    'cards';
}

</style>