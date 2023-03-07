<template>
  
    <div class="top-nav-wrapper flex-center ">
      <div class="container flex-center align-items-center">
          <div class="input-icon"><i class="fa-solid fa-magnifying-glass erp-txt-mg"></i></div>
          <input type="text" class="erp-input erp-fw-500" placeholder="Search">
      </div>
      <div class="container flex-center align-items-center">
          <i class="fa-solid fa-envelope erp-txt-mg"></i>
          <i class="fa-solid fa-bell erp-txt-mg"></i>
          <div class="user-info-wrapper erp-me-1">
              <span class="user-name erp-fw-500">Tanya Singh</span>
              <span class="user-role erp-fw-500 erp-txt-mg small-txt">Finance Manager</span>
          </div>
          <span class="avatar-s"></span>
      </div>
       
    </div>
</template>

<script>
  
</script>

<style scoped>
  .top-nav-wrapper{
    display: flex;
    background-color: var(--blue-grey);
    border-radius: 10px;
    height: 74px;
    box-shadow: 0px 5px 31px 5px rgba(0, 0, 0, 0.25);
    justify-content: space-between;
    align-items: center;
    padding: 0.5em 1em;
  }
  .top-nav-wrapper i{
    font-size: 20px;
    margin-right: 0.5em;
  }

  .user-info-wrapper{
    display: flex;
    justify-content: right;
    align-items: center;
    flex-direction: column;
  }
  .erp-input{
    height: 46px;
    width: 500px;
    border-radius: 0px 50px 50px 0px;
    background-color: transparent;
    border:2px solid #D6D6D6;
    border-left: none;
    
  }
  .input-icon{
    height: 48px;
    width: 30px;
    border-radius: 50px 0px 0px 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: transparent;
    border:2px solid #D6D6D6;
    border-right: none;
    padding-left: 0.5em;
  }
</style>