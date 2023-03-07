<template>
      <div class="right-side-item-widgets content bs-container">
        <!-- card-group -->
        <div class="item-widget-cards row d-flex justify-content-center mt-sm-5">
            <div class="col-6 col-sm-4 m-0 p-0 d-flex justify-content-start ">
                <card-component 
                    card-type="Inquiries" 
                    card-css="cardInquiries"
                    card-title-css="cardTitleInquiries" 
                    card-icon-css="fa-circle-question iconInquiries"
                    cloud2-txt-css="cloud2Inquiries"
                />
            </div>
            
            <div class="col-6 col-sm-4 m-0 p-0 d-flex justify-content-center">
                <card-component 
                    card-type="Quotations" 
                    card-css="cardQuotations"
                    card-title-css="cardTitleQuotations"
                    card-icon-css="fa-file-invoice iconQuotations"
                    cloud2-txt-css="cloud2Quotations"
                />
            </div>

            <div class="col-6 col-sm-4 m-0 p-0 d-flex justify-content-center">
                <card-component 
                    card-type="Orders" 
                    card-css="cardOrders"
                    card-title-css="cardTitleOrders"
                    card-icon-css="fa-gear iconOrders"
                    cloud2-txt-css="cloud2Orders"
                />
            </div>    
        </div>
        <!-- table -->
        <div class="item-widget-tables bs-container">
            <div class="row">
                <div class="col-12">
                    <table-component table-title="Pending Inquiries" table-icon-css="fa-circle-question" />
                </div>
                <div class="col-12">
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
    grid-area: tables
   }
  .right-side-item-widgets{
    grid-area: widgets;
    display: grid;
    grid-template-columns: 90% 10%;
    grid-template-areas: 'cards tables';
  }
</style>