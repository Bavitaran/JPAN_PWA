<template>
  <div>
    <apexchart
      height="350"
      width="90%"
      type="bar"
      :options="chartOptions"
      :series="series"
    ></apexchart>
  </div>
</template>
<script>
import VueApexCharts from "vue3-apexcharts";
export default {
    components: {
        apexchart: VueApexCharts,
    },
    data: function() {
        return {
        chartOptions: {
          chart: {
            id: "vuechart-example",
            background: '#fff',
          },
          xaxis: {
            categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998],
          },
        },
        series: [
          {
            name: "series-1",
            data: [30, 40, 35, 50, 49, 60, 70, 91],
          },
          {
            name: "series-2",
            data: [56, 62, 26, 32, 94, 20, 40, 54],
          },
        ],
        };
    },
};
</script>