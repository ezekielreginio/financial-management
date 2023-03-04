<template>
    <div class="content container flex-col">
        <!-- card-group -->
        <div class="container flex-space-between flex-row erp-mt-1">
            <card-component 
                card-type="Inquiries" 
                card-css="cardInquiries"
                card-title-css="cardTitleInquiries" 
                card-icon-css="fa-circle-question iconInquiries"
                cloud2-txt-css="cloud2Inquiries"
            />
            <card-component 
                card-type="Quotations" 
                card-css="cardQuotations"
                card-title-css="cardTitleQuotations"
                card-icon-css="fa-file-invoice iconQuotations"
                cloud2-txt-css="cloud2Quotations"
            />
            <card-component 
                card-type="Orders" 
                card-css="cardOrders"
                card-title-css="cardTitleOrders"
                card-icon-css="fa-gear iconOrders"
                cloud2-txt-css="cloud2Orders"
            />
        </div>
        <!-- table -->
        <div class="container flex-space-between flex-row erp-mt-1">
            <table-component table-title="Pending Inquiries" table-icon-css="fa-circle-question" />
            <table-component table-title="Pending Quotations" table-icon-css="fa-file-invoice" />
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
  .content{
    margin: 1em 0em;
  }
</style>