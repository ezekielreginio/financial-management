<template>
    <div @keydown.enter.prevent="saveAccount" class="card-v2 bg-blue">
        <div class="inner">
            <div class="card-v2-inner1">
            </div>
            <div class="card-v2-inner2">
              <i @click="toggleEdit" class="fa-solid fa-pen-to-square edit-icon"></i>
            </div>
        </div>
        <div v-if="!isEditMode" class="card-title card-account-name">
            {{ accountName }}
        </div>
        <div v-else class="w-80">
          <textarea cols="15" rows="1" class="card-title card-textarea"></textarea>
        </div>
        <div class="card-content">
            <div class="currency">
                <span>PHP</span>
            </div>
            <div class="money-value">
                <span v-if="!isEditMode">{{ accountValue }}</span>
                <input v-else type="text" class="money-value" style="height: 90%">
            </div>
        </div>
        
    </div>
</template>

<script>
export default {
  props : {
    'accountName' : {
        type : String,
    },
    'accountValue' : {
        type : Number
    }
  },
  data() {
    return {
      isEditMode: false,
    }
  },
  methods: {
    toggleEdit() {
      this.isEditMode = !this.isEditMode
    },
    saveAccount() {
      this.isEditMode = false
      alert("Saved!")
    }
  }
}
</script>

<style scoped>
.card-v2{
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  width: 381px;
  height: 193px;
  border-radius: 26px;
  overflow: hidden;
  animation: none;
  box-shadow: 0px 5px 31px 1px rgba(0, 0, 0, 0.25);
}
.card-v2:hover .card-v2-inner2{
  animation: editIcon 0.8s;
  animation-timing-function:linear;
  animation-fill-mode:forwards;
  animation-iteration-count: 1;
}
.card-v2:hover{
  animation: grow 0.8s;
  animation-timing-function:linear;
  animation-fill-mode:forwards;
  animation-iteration-count: 1;
}

@keyframes editIcon {
  0% {transform: translate(80px, -99px);}
  30% {transform: translate(80px, -40px);}
  100% {transform: translate(80px, -30px);}
}
@keyframes grow {
  0% {transform: scale(1);}
  30% {transform: scale(1.1);}
  100% {transform: scale(1.2);}
}
.inner{
  display: flex;
  flex-direction: row;
}
.card-v2-inner1{
  display: block;
  content: "";
  background-color: var(--white);
  width: 141.81px;
  height:98.86px;
  border-radius: 100%;
  position: relative;
  transform: translate(-150px, -52px);
  
}
.card-v2-inner2{
  display: block;
  content: "";
  background-color: var(--white);
  width: 105.81px;
  height:98.86px;
  border-radius: 100%;
  position: relative;
  transform: translate(80px, -99px);
  /* transform: translate(80px, -30px); */
  
}
.card-v2-inner2 i{
  color: #435278;
  position: relative;
  font-size: 30px;
  font-weight: 600;
  top: 45px;
  left: 30px;
}
.bg-blue{
  background-color: #8DADFF;
}

.card-title{
  font-size: 20px;
  font-weight: 600;
  text-align: left;
  padding-right: 50px;
  position: relative;
  top: -55px;
  height: 61.33px;
}

.card-account-name {
  width: 265px;
  color: var(--white);
  display: inline-block;/* or inline-block */
  text-overflow: ellipsis;
  word-wrap: word-break;
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}

.card-textarea {
  text-align: left;
  border-radius: 15px;
  color: var(--black);
  max-height: 45px;
}

.card-content{
  display: flex;
  flex-direction: row;
  width: 315px;
  height: 41px;
  transform: translateY(-25px);
  position: relative;
}
.currency{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 55px;
  height: 41px;
  background-color: #435278;
  border-radius: 10px 0px 0px 10px; 
}

.currency span{
  font-size: 20px;
  font-weight: 600;
  color: var(--white);
}
.money-value{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 260px;
  height: 42px;
  border-radius: 0px 10px 10px 0px;
  background-color: var(--white); 
}
.money-value span{
  font-size: 20px;
  font-weight: 600;
  color: #435278;
}

.w-80 {
  width: 80%;
}

</style>