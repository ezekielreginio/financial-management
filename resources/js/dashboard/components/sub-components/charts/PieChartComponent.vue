<template>
 
    <div class="pie-chart" ref="pieChart">

    </div>
  
</template>

<script>

import * as am5 from "@amcharts/amcharts5";
import * as am5percent from "@amcharts/amcharts5/percent";

export default {
  mounted() {
    let root = am5.Root.new(this.$refs.pieChart);
    let chart = root.container.children.push(
    am5percent.PieChart.new(root, {})
    );

    chart.set("background", am5.Rectangle.new(root, {
          stroke: am5.color(0x297373),
          strokeOpacity: 0.5,
          fill: am5.color(0x297373),
          fillOpacity: 0.2
    }));


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
  }
}
</script>

<style scoped>
.pie-chart{
  height: 100%;
  width: 100%;
}

</style>