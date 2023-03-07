<template>
    <div class="side-nav-wrapper item-left-content">
      <div class="container flex-center side-nav-header">
          <img src="https://i.ibb.co/mvH0xjr/erp-logo.png" alt="" class="erp-logo" style="margin: 1.5em 0em 0em 0em;">
          <h2 class="erp-fw-800 erp-txt-white logo-text">Solutions</h2>
      </div>
      <ul class="side-nav-ul">
            <li class="side-nav-li" :class="{ active: currentPage=='dashboard' }"><a href="#"><i class="fa-solid fa-grip"></i>Dashboard</a></li>
            <li class="side-nav-li" :class="{ active: currentPage=='sales-management' }"><a href="#"><i class="fa-solid fa-chart-line"></i>Sales Management</a></li>
            <li class="side-nav-li"><a href="#"><i class="fa-solid fa-file-signature"></i>Inventory</a></li>
            <li class="side-nav-li"><a href="#"><i class="fa-solid fa-users"></i>Human Resources</a></li>
            <li class="side-nav-li"><a href="#"><i class="fa-solid fa-sack-dollar"></i>Finance</a></li>
            <li class="side-nav-li"><a href="#"><i class="fa-solid fa-users-gear"></i>Production</a></li>
      </ul>
    </div>
</template>

<script>
  export default { 
     props: {
      'currentPage' : {
          type : String
      },
     },
     mounted() {
      console.log(this.currentPage)
     }
  }
</script>

<style scoped>
.side-nav-wrapper{
    height: 950px;
    background-color: var(--white);
    width: 340px;
    border-radius: 20px;
    margin-right: 3em;
    box-shadow: 0px 5px 31px 5px rgba(0, 0, 0, 0.25);
  }
.side-nav-header{
    background-image: url('https://i.ibb.co/L5JWfzn/Ellipse-56.png');
    background-size: cover;
    width: auto;
    height: 205px;
    border-radius: 20px 20px 0px 0px;
}

.side-nav-ul{
  margin: 3em;
  list-style-type: none;
  padding: 0;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
.side-nav-li{
  height: 50px;
  display: flex;
  justify-content: left;
  align-items: center;
}
.active{
  border-radius: 10px;
  background: rgb(147,178,214);
  background: linear-gradient(90deg, rgba(147,178,214,1) 0%, rgba(152,182,216,1) 52%, rgba(223,235,248,1) 91%);
}
.side-nav-li a{
  text-decoration: none;
  color: var(--grey-muted);
  font-size: 16px;
  font-weight: 500;
  display: flex;
  justify-content: left;
  align-items: center;
}
.side-nav-li i{
  font-size: 20px;
  margin-right: 0.6em;
  margin-left: 1em;
  width: 25px;
}

.active a{
  color: white;
}
.erp-logo{
    width: 118px;
    height: 102px;
  }

.logo-text{
  font-size: 30px;
  margin: 1.6em 0.5em 0em 0em;
}

/* @media only screen and (min-width: 1200px) {
 


} */



</style>