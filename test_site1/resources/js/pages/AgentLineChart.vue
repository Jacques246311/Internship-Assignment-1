<template>
    <div>
        <!-- Your Line Chart implementation goes here -->
    </div>
</template>

<script>
import { Line } from 'vue-chartjs';
import { Chart as ChartJS, Title, Tooltip, Legend, LineElement, CategoryScale, LinearScale } from 'chart.js';

ChartJS.register(Title, Tooltip, Legend, LineElement, CategoryScale, LinearScale);

export default {
    extends: Line,
    props: {
        agents: {
            type: Array,
            required: true,
        },
    },
    watch: {
        agents: {
            handler: 'updateChart',
            deep: true,
        },
    },
    mounted() {
        this.updateChart();
    },
    methods: {
        updateChart() {
            // Implement the logic to update your Line Chart based on the agents data
            // Example: You may want to extract relevant data from agents and update the chart accordingly
            const data = {
                labels: this.agents.map(agent => agent.name),
                datasets: [
                    {
                        label: 'Agent Age',
                        borderColor: 'blue',
                        backgroundColor: 'rgba(0, 0, 255, 0.2)',
                        data: this.agents.map(agent => agent.age),
                    },
                ],
            };

            this.renderChart(data, { responsive: true });
        },
    },
};
</script>

<style scoped>
/* Your component-specific styles go here */
</style>
