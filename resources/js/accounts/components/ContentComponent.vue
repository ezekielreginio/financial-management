<template>
      <div class="content mb-5">
         <div class="account-group">
            <div class="row">
                  <div class="divider-title col-2">
                     {{ groupName }}
                  </div>
                  <hr class="divider">
            </div>
            <div class="row">
               <div v-for="(account, index) in accounts" class="col-4 d-flex justify-content-center mt-4">
                   <card-component-v2 
                    :account-name="account.name"
                    :account-value="account.initial_amount"
                   />
               </div>
            </div>
         </div>
      </div>    
</template>

<script>
import CardComponentV2 from './sub-components/CardComponentV2.vue';

export default {
   components: {
      CardComponentV2
   },
   props : {
      'groupName' : {
         type : String,
      },
      'accounts' : {
         type : Array
      }
   },
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