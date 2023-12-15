<template>
    <div class="content-container">
        <h2>Welcome to ATLANTIS Property Management System</h2>
        <p>Your one-stop solution for managing properties and agents efficiently.</p>

        <section class="action-section">
            <h2>Get Started</h2>
            <p>Follow these simple steps to use our platform:</p>

            <div>
                <h3>Add a New Agent:</h3>
                <p>Expand your team by adding a new agent to the system.</p>
                <button @click="navigateToAddAgent" class="form-button">Add New Agent</button>
            </div>

            <div>
                <h3>Add a New Property:</h3>
                <p>Increase your property portfolio by adding a new property with detailed information.</p>
                <button @click="navigateToAddProperty" class="form-button">Add New Property</button>
            </div>

            <div>
                <h3>Search Properties:</h3>
                <p>Effortlessly find properties based on various criteria, ensuring quick access to relevant information.</p>
                <button @click="navigateToSearch" class="form-button">Search Properties</button>
            </div>

            <div>
                <h3>View Chart:</h3>
                <p>Explore visual representation of agent data.</p>
                <button @click="navigateToChart" class="form-button">View Chart</button>
            </div>
        </section>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const navigateToAddAgent = () => {
    window.location.href = '/agent-form';
};

const navigateToAddProperty = () => {
    window.location.href = '/property-form';
};

const navigateToSearch = () => {
    window.location.href = '/search-properties';
};

const navigateToChart = () => {
    window.location.href = '/agent-chart';
};
</script>

<style scoped>
.content-container {
    background-color: #000;
    color: #fff;
    padding: 20px;
}

.action-section {
    display: flex;
    flex-direction: column;
    max-width: 300px;
    margin-top: 20px;
}

.form-button {
    background-color: #ff0000;
    color: #fff;
    padding: 10px;
    cursor: pointer;
    margin-top: 10px;
}
</style>
