<template>
    <div class="side-nav-wrapper container">
      <div class="container flex-center side-nav-header">
          <img src="https://i.ibb.co/mvH0xjr/erp-logo.png" alt="" class="erp-logo" style="margin: 1.5em 0em 0em 0em;">
          <h2 class="erp-fw-800 erp-txt-white" style="margin: 1.3em 0.5em 0em 0em;">Solutions</h2>
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
    display: flex;
    background-color: var(--white);
    border-radius: 20px;
    width: 242px;
    margin-right: 3em;
    height: 620px;
    box-shadow: 0px 5px 31px 5px rgba(0, 0, 0, 0.25);
    flex-direction: column;
  }
.side-nav-header{
    background-image: url('https://i.ibb.co/L5JWfzn/Ellipse-56.png');
    background-size: cover;
    width: 242px;
    height: 120px;
    border-radius: 20px 20px 0px 0px;
}

.side-nav-ul{
  margin: 1em;
  list-style-type: none;
  padding: 0;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
.side-nav-li{
  height: 40px;
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
  font-size: 14px;
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


</style>