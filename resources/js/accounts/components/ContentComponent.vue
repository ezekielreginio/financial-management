<template>
      <div class="content mb-5">
         <div class="cash-assets">
            <div class="row">
                  <div class="divider-title col-2">
                     Cash Assets
                  </div>
                  <hr class="divider">
            </div>
            <div class="row">
               <div class="col-4 d-flex justify-content-center mt-4">
                   <card-component-v2 />
               </div>
               <div class="col-4 d-flex justify-content-center mt-4">
                   <card-component-v2 />
               </div>
               <div class="col-4 d-flex justify-content-center mt-4">
                   <card-component-v2 />
               </div>
               <div class="col-4 d-flex justify-content-center mt-4">
                   <card-component-v2 />
               </div>
               <div class="col-4 d-flex justify-content-center mt-4">
                   <card-component-v2 />
               </div>
               <div class="col-4 d-flex justify-content-center mt-4">
                   <card-component-v2 />
               </div>
            </div>
         </div>
         <div class="tangible-properties">
 
         </div>
         <div class="real-estate">

         </div>
      </div>    
</template>

<script>
   import CardComponentV2 from './sub-components/CardComponentV2.vue';

   export default{
      components:{
         CardComponentV2
      }
   }
</script>

<style scoped>
.cash-assets{
   grid-area: cash-assets;
}
.tangible-properties{
   grid-area: tangible-properties;
}
.real-state{
   grid-area: real-estate;
}
.content{
    width: 100%;
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: auto auto auto;
    grid-template-areas: 
    'cash-assets'
    'tangible-properties'
    'real-estate';
}


.divider-title{
      height: 41px;
      width: auto;
      font-size: 20px;
      font-weight: 600;
      color: var(--white);
      border-radius: 0px 10px 0px 10px;
      background-color: #93b2d6;
      text-align: center;
      line-height: 43.5px;
}

.divider{
    width: 100%;
    border: 5px solid #93b2d6;
    position: relative;
    top:-8px;
    border-radius: 0px 0px 0px 20px;
}


</style>