<template>
    <div>
        <h2>User Signup Chart</h2>
        <div>
            <line-chart :data="chartData"></line-chart>
        </div>
    </div>
</template>

<script>
import LineChart from 'vue-chartjs'

export default {
    components: {
        LineChart
    },
    data() {
        return {
            chartData: {
                labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5'],
                datasets: [
                    {
                        label: 'Viewer Signups',
                        backgroundColor: 'rgba(75,192,192,0.2)',
                        borderColor: 'rgba(75,192,192,1)',
                        data: [5, 8, 10, 6, 12]
                    },
                    {
                        label: 'Presenter Signups',
                        backgroundColor: 'rgba(255,99,132,0.2)',
                        borderColor: 'rgba(255,99,132,1)',
                        data: [3, 6, 8, 4, 9]
                    }
                ]
            }
        }
    }
}
</script>

<style scoped>
/* Add any styling if needed */
</style>
