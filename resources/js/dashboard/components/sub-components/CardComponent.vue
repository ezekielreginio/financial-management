<template>
    <div class="card container flex-col" :class="cardCss">
        <div class="card-title">Pending <span :class="cardTitleCss">{{cardType}}</span></div>
        <div class="card-content container flex-row">
            <i class="fa-solid  big-i icon" :class="cardIconCss"></i>
            <div class="cloud">
                <div class="cloud-1"></div>
                <div class="cloud-2"><span :class="cloud2TxtCss">21</span></div>
                <div class="cloud-3"></div>
            </div>
        </div>
    </div>
</template>

<script>
  export default { 
      props: {
        'cardType' : {
            type : String
        },
        'cardCss' : {
            type: String,
            default: 'cardInquiries'
        },
        'cardTitleCss' : {
            type: String,
            default: 'cardTitleInquiries'
        },
        'cardIconCss' : {
            type: String,
            default: 'fa-circle-question iconInquiries'
        },
        'cloud2TxtCss' : {
            type: String,
            default: 'cloud2Inquiries'
        }

      },
      mounted() {
        console.log(this.cardType)
      }
  }
</script>

<style scoped>
  .card{
    content: " ";
    width: 360px;
    height: 210px;
    border-radius: 15px;
    box-shadow: 0px 5px 31px 1px rgba(0, 0, 0, 0.25);
  }
  /* card-background */
  .cardInquiries{
    background-color: var(--light-blue);
  }
  .cardQuotations{
    background-color: var(--light-purple);
  }
  .cardOrders{
    background-color: var(--light-green);
  }
  .card-title{
    font-size: 20px;
    font-weight: 500;
    color: var(--white);
    margin: 1em;
    margin-left: 1.5em;
    margin-bottom: 0em;
    font-size: 20px;
    font-weight: 500;
  }
  /* card-subtitle */
  .cardTitleInquiries{
    font-size: 20px;
    font-weight: 500;
    color: var(--dark-blue);
  }
  .cardTitleQuotations{
    font-size: 20px;
    font-weight: 500;
    color: var(--dark-purple);
  }
  .cardTitleOrders{
    font-size: 20px;
    font-weight: 500;
    color: var(--dark-green);
  }
  .icon{
    margin-top: 0.2em;
    margin-left: 0.5em;
    margin-bottom: 0.5em;
  }
  /* icon color */
  .iconInquiries{
    color: var(--dark-blue);
  }
  .iconQuotations{
    color: var(--dark-purple);
  }
  .iconOrders{
    color: var(--dark-green);
  }
  .cloud{
    width: 400px;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
  }
  .cloud-1{
    content: " ";
    width: 60px;
    height: 22.24px;
    border-radius: 50px 0px 0px 50px;
    background-color:  var(--white);
    transform: translateY(5px);
  }
  .cloud-2{
    content: " ";
    width: 137px;
    height: 53px;
    border-radius: 50px 0px 0px 50px;
    background-color:  var(--white);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .cloud-2 span{
    font-weight: 500;
    font-size: 40px;
    margin-top: 0.2em;
  }
  /* cloud number */
  .cloud2Inquiries{
    font-weight: 500;
    font-size: 40px;
    color: var(--light-blue);
  }
  .cloud2Quotations{
    font-weight: 500;
    font-size: 40px;
    color: var(--light-purple);
  }
  .cloud2Orders{
    font-weight: 500;
    font-size: 40px;
    color: var(--light-green);
  }
  .cloud-3{
    content: " ";
    width: 152px;
    height: 10.5px;
    border-radius: 50px 0px 50px 0px;
    background-color:  var(--white);
  }

  
</style>