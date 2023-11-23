
<template>
  <div>
    <line-chart :data="chartData" :options="chartOptions"></line-chart>
  </div>
</template>

<script>
import { Line } from 'vue-chartjs';

export default {
  extends: Line,
  props: ['data'],
  data() {
    return {
      chartData: this.data,
      chartOptions: {
        responsive: true,
        maintainAspectRatio: false,
      },
    };
  },
  watch: {
    data: function(newData) {
      this.chartData = newData;
      this.renderChart(this.chartData, this.chartOptions);
    },
  },
  mounted() {
    this.renderChart(this.chartData, this.chartOptions);
  },
};
</script>

<style scoped>

</style>
