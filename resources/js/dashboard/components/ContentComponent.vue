<template>
      <div class="content bs-container m-0 p-0">
        <!-- card-group -->
        <div class="item-widget-cards cd-flex flex-row justify-content-between mt-sm-5 row">
            <card-component 
                card-type="card-blue" 
                card-title="Total"
                sub-title="Assets"
                icon="fa-hand-holding"
                sub-icon="fa-house"
                sub-icon2="fa-coins"
                class="col-3"
            />

            <card-component 
                card-type="card-purple"
                card-title=""
                sub-title="Liabilities"
                icon="fa-sack-xmark" 
                sub-icon=""
                sub-icon2=""
                class="col-3"
            />

            <card-component 
                card-type="card-green"
                card-title="This Month's"
                sub-title="Expenses" 
                icon="fa-wallet" 
                sub-icon=""
                sub-icon2=""
                class="col-3"
            />  
            <card-component 
                card-type="card-green"
                card-title="This Month's"
                sub-title="Expenses" 
                icon="fa-wallet" 
                sub-icon=""
                sub-icon2=""
                class="col-3"
            /> 
        </div>
        <!-- table -->
        <div class="item-widget-tables">
            <div class="">
                <div class="">
                    <table-component table-title="Pending Inquiries" table-icon-css="fa-circle-question" />
                </div>
                <div class="">
                    <table-component table-title="Pending Quotations" table-icon-css="fa-file-invoice" />
                </div>
            </div>
        </div>        
      </div>    
</template>

<script>

    import CardComponent from './sub-components/CardComponent.vue';
    import TableComponent from './sub-components/TableComponent.vue';

    export default {
        components : {
            'card-component'  : CardComponent,
            'table-component' : TableComponent
        }
    }
</script>

<style scoped>
.item-widget-cards{
    grid-area: cards
}
.item-widget-tables{
    grid-area: tables;
}
.content{
    width: 100%;
    display: grid;
    grid-template-columns: 100%;
    grid-template-areas: 
    'cards'
    'tables';
}

</style>