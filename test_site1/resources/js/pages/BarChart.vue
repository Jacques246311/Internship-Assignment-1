<!-- BarChart.vue -->
<template>
    <div>
        <bar-chart :data="chartData" :options="chartOptions"></bar-chart>
    </div>
</template>

<script>
import { Bar, mixins } from 'vue-chartjs';

export default {
    extends: Bar,
    mixins: [mixins.reactiveProp],
    props: ['chartData', 'chartOptions'],
    mounted() {

        this.renderChart(this.chartData, this.chartOptions);
    }
};
</script>

<style scoped>

</style>
