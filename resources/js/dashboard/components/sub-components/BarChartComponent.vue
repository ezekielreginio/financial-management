<template>
  <div class="card card-white" ref="chartdiv">
  </div>
</template>

<script>
import * as am5 from "@amcharts/amcharts5";
import * as am5percent from "@amcharts/amcharts5/percent";
import am5themes_Animated from '@amcharts/amcharts5/themes/Animated';

export default {
  mounted() {
    let root = am5.Root.new(this.$refs.chartdiv);

    let chart = root.container.children.push(
      am5percent.PieChart.new(root, {})
    );

    let series = chart.series.push(
      am5percent.PieSeries.new(root, {
        name: "Series",
        categoryField: "country",
        valueField: "sales"
      })
    );

    series.data.setAll([{
      country: "France",
      sales: 100000
    }, {
      country: "Spain",
      sales: 160000
    }, {
      country: "United Kingdom",
      sales: 80000
    }]);

    let legend = chart.children.push(am5.Legend.new(root, {
      centerX: am5.percent(50),
      x: am5.percent(50),
      layout: root.horizontalLayout
    }));

    legend.data.setAll(series.dataItems);
  }
}
</script>

<style scoped>
.card{
  content: " ";
  width: 700px;
  height: 300px;
  border-radius: 15px;
  box-shadow: 0px 5px 31px 1px rgba(0, 0, 0, 0.25);
  z-index: -1;
}
/* card-blue css */
.card-blue{
  background-color: var(--light-blue);
}
.card-blue .card-title{
  font-size: 20px;
  font-weight: 500;
  color: var(--white);
  margin: 1em;
  margin-left: 1.5em;
  margin-bottom: 0em;
  font-size: 25px !important;
  font-weight: 500;
}
.card-blue .card-title span{
  font-size: 25px;
  margin-left: 0.3em;
  font-weight: 500;
  color: var(--dark-blue);
}
.card-blue .cloud .cloud-2 span{
  font-weight: 500;
  font-size: 35px;
  margin-top: 0.2em;
  margin-right: 0.2em;
  color: var(--light-blue);
}
.card-blue .fa-stack{
  display: inline-block;
  height: 2em;
  line-height: 2em;
  position: relative;
  vertical-align: middle;
  width: 2.5em;
  left: -5px;
  top: -15px;
  position: relative;
}
.card-blue .fa-stack i:nth-child(1){
  color: var(--dark-blue);
  top: 15px;
  z-index: 0;
  left: 65px;
  opacity: 30%;
  position: relative;
  transform: scale(8);
}
.card-blue .fa-stack i:nth-child(2){
  color: var(--dark-blue);
  z-index: 0;
  left: 30px;
  opacity: 30%;
  position: relative;
  transform: scale(3);
}
.card-blue .fa-stack i:nth-child(3){
  color: var(--dark-blue);
  z-index: 0;
  top: -27px;
  left: 85px;
  opacity: 30%;
  position: relative;
  transform: scale(3);
}
/* end of card-blue css */

/* card-purple css */
.card-purple{
  background-color: var(--light-purple);
}
.card-purple .card-title{
  font-size: 20px;
  font-weight: 500;
  color: var(--white);
  margin: 1em;
  margin-left: 1.5em;
  margin-bottom: 0em;
  font-size: 25px !important;
  font-weight: 500;
}
.card-purple .card-title span{
  font-size: 25px;
  margin-left: 0.3em;
  font-weight: 500;
  color: var(--dark-purple);
}

.card-purple .cloud .cloud-2 span{
  font-weight: 500;
  font-size: 35px;
  margin-top: 0.2em;
  margin-right: 0.2em;
  color: var(--light-purple);
}

.card-purple .fa-stack i:nth-child(1){
  color: var(--dark-purple);
  top: 15px;
  z-index: 0;
  left: 60px;
  opacity: 30%;
  position: relative;
  transform: scale(8);
}
/* end of card-purple css */

/* card-green css */
.card-green{
  background-color: var(--light-green);
}

.card-green .card-title{
  font-size: 20px;
  font-weight: 500;
  color: var(--white);
  margin: 1em;
  margin-left: 1.5em;
  margin-bottom: 0em;
  font-size: 25px !important;
  font-weight: 500;
}

.card-green .card-title span{
  color: var(--dark-green);
  margin: 0.2em;
  margin-left: 0.2em;
  margin-bottom: 1em;
  font-size: 25px;
  font-weight: 500;
}

.card-green .cloud .cloud-2 span{
  font-weight: 500;
  font-size: 35px;
  margin-top: 0.2em;
  margin-right: 0.2em;
  color: var(--light-green);
}

.card-green .fa-stack i:nth-child(1){
  color: var(--dark-green);
  top: 15px;
  z-index: 0;
  left: 60px;
  opacity: 30%;
  position: relative;
  transform: scale(8);
}

/* cloud css */
.cloud{
  width: 400px;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}
.cloud-1{
  content: " ";
  width: 130px;
  height: 22.24px;
  border-radius: 50px 0px 0px 50px;
  background-color:  var(--white);
  transform: translateY(5px);
}
.cloud-2{
  content: " ";
  width: 234px;
  height: 55px;
  border-radius: 50px 0px 0px 50px;
  background-color:  var(--white);
  display: flex;
  justify-content: end;
  align-items: center;
}

/* cloud number */

.cloud-3{
  content: " ";
  width: 252px;
  height: 10.5px;
  border-radius: 50px 0px 50px 0px;
  background-color:  var(--white);
}
.card-content{
  margin-top: 3.2em;
}
</style>