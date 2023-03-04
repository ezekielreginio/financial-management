<template>
    <div class="container flex-col table-wrapper">
        <div class="table-head">
            <i class="fa-solid small-icon erp-txt-dark-blue" :class="tableIconCss" ></i>
            <span class="erp-txt-dark-blue erp-fw-600 erp-ms-1">{{tableTitle}}</span>
        </div>
        <table class="erp-table">
           <thead>
             <th>Id</th>
             <th>Name</th>
             <th>Company</th>
             <th>Contact</th>
             <th>Email</th>
           </thead>
           <tr v-if="tableTitle === 'Pending Inquiries'">
            <td>1</td>
            <td>Hari Haryanto</td>
            <td>Business</td>
            <td>(961) 647-2051</td>
            <td>hello.@gmail.com</td>
           </tr>
           <tr v-if="tableTitle === 'Pending Inquiries'">
            <td>1</td>
            <td>Hari Haryanto</td>
            <td>Business</td>
            <td>(961) 647-2051</td>
            <td>hello.@gmail.com</td>
           </tr>
           <tr v-if="tableTitle === 'Pending Inquiries'">
            <td>1</td>
            <td>Hari Haryanto</td>
            <td>Business</td>
            <td>(961) 647-2051</td>
            <td>hello.@gmail.com</td>
           </tr>
           <tr v-if="tableTitle === 'Pending Inquiries'">
            <td>1</td>
            <td>Hari Haryanto</td>
            <td>Business</td>
            <td>(961) 647-2051</td>
            <td>hello.@gmail.com</td>
           </tr>
           <tr v-if="tableTitle === 'Pending Inquiries'">
            <td>1</td>
            <td>Hari Haryanto</td>
            <td>Business</td>
            <td>(961) 647-2051</td>
            <td>hello.@gmail.com</td>
           </tr>
           <tr v-else-if="tableTitle === 'Pending Quotations'">
            <td colspan="5">
              <div class="empty">
                <img src="https://i.ibb.co/YfFDgGP/clipboard-img.png" alt="" srcset="" class="empty-img" />
                <span class="erp-fw-800 medium-txt erp-txt-grey-muted">No Data</span>
              </div>
            </td> 
          </tr>
        </table>
    </div>
</template>

<script>
   export default{
     props: {
      'tableTitle' : {
         type : String
      },
      'tableIconCss' : {
          type : String,
          default : 'fa-circle-question'
      }
     }
   }
</script>

<style scoped>
  .table-wrapper{
    margin: 1em 0;
  }
  .table-head{
   padding: 0 1em;
   display: flex;
   justify-content: left;
   align-items: center;
   width: 449px;
   height: 41px;
   border-radius: 15px 15px 0px 0px;
   background: rgb(179,221,216);
   background: linear-gradient(90deg, rgba(179,221,216,1) 21%, rgba(167,140,241,1) 51%, rgba(142,174,235,1) 72%);                                        
  }
  .erp-table{
    width: 481px;
    height: 230px;
    background-color: var(--white);
    border-radius: 0px 0px 15px 15px;
    border-collapse: collapse;
  }
  .erp-table th, .erp-table td{
    padding: 8px;
    border-bottom: 1px solid var(--blue-grey);
  }
  .erp-table thead{
    font-size: 14px;
    font-weight: 500;
    text-align: left;
  }
  .erp-table tr{
    font-size: 12px;
  }
  .erp-table tr:nth-last-child(1){
    border-bottom: none;
  }
  .empty{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .empty-img{
    width: 150px;
    height: 160px;
  }
</style>