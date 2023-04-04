<template>
      <div class="content">
        <!-- card-group -->
        <div class="item-widget-cards d-flex justify-content-between row">
            <card-component 
                card-type="card-blue" 
                card-title="Total"
                sub-title="Assets"
                icon="fa-hand-holding"
                sub-icon="fa-house"
                sub-icon2="fa-coins"
                class="col-xxl-4 m-0 p-0"
            />

            <card-component 
                card-type="card-purple"
                card-title=""
                sub-title="Liabilities"
                icon="fa-sack-xmark" 
                sub-icon=""
                sub-icon2=""
                class="col-xxl-4 m-0 p-0"
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
        <div class="item-widget-tables mt-3 row">
            <div class="col-12">
              <table-component-vue  table-title="Transactions Summary"/>
            </div>
        </div>
        <!-- charts -->
        <div class="item-widget-charts mt-3 row">
            <div class="card card-chart border-blue col-12">
              <bar-chart-component />
            </div>
            <div class="card card-chart border-blue mt-3 col-6">
              <pie-chart-component />
            </div>
            <div class="card card-chart border-blue mt-3 col-6">
              <line-chart-component />
            </div>
        </div>        
      </div>    
</template>

<script>

    import CardComponent from './sub-components/CardComponent.vue';
    import BarChartComponent from './sub-components/charts/BarChartComponent.vue';
    import PieChartComponent from './sub-components/charts/PieChartComponent.vue'
    import LineChartComponent from './sub-components/charts/LineChartComponent.vue';
    import TableComponentVue from './sub-components/TableComponent.vue';

    export default {
        components : {
            CardComponent,
            BarChartComponent,
            PieChartComponent,
            LineChartComponent,
            TableComponentVue
        }
    }
</script>

<style scoped>
.card-chart{
  height: 460px;
}
.card-chart-title{
    font-size: 25px;
    font-weight: 500;
    text-align: start;
    margin: 1em;
    color: var(--dark-blue);
}
.item-widget-cards{
    margin: 0em 5em;
    grid-area: cards
}
.item-widget-tables{
    grid-area: tables;
}
.item-widget-charts{
    grid-area: charts;
}
.content{
    width: 100%;
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: auto auto auto;
    grid-template-areas: 
    'cards'
    'tables'
    'charts';
}

</style>