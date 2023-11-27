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
            chartData: {
                labels: this.data.labels, // Time intervals
                datasets: [
                    {
                        label: 'User Count',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                        data: this.data.userCount, // User count data
                    },
                ],
            },
            chartOptions: {
                responsive: true,
                maintainAspectRatio: false,
                // Add other chart options as needed
            },
        };
    },
    mounted() {
        this.renderChart(this.chartData, this.chartOptions);
    },
};
</script>
