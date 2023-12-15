<template>
    <div class="content-container">
        <h2>Add New Property</h2>
        <form @submit.prevent="addProperty" class="property-form">
            <label for="propertyName" class="form-label">Property Name:</label>
            <input type="text" id="propertyName" v-model="propertyName" class="form-input" required />

            <label for="propertyAddress" class="form-label">Property Address:</label>
            <input type="text" id="propertyAddress" v-model="propertyAddress" class="form-input" />

            <!-- Add other property form fields as needed -->

            <button type="submit" class="form-button">Add Property</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';

const propertyName = ref('');
const propertyAddress = ref('');
// Add other property form data as needed

const addProperty = async () => {
    const propertyName = document.getElementById('propertyName').value;
    const propertyAddress = document.getElementById('propertyAddress').value;

    try {
        const response = await axios.post('/add-property', {
            name: propertyName,
            address: propertyAddress,

        });

        console.log('Response:', response);

        if (response.data.success) {

            this.$emit('propertyAdded');

            document.getElementById('propertyName').value = '';
            document.getElementById('propertyAddress').value = '';

        } else {
            console.error('Failed to add property:', response.data.error || 'Unknown error');
        }
    }
    catch (error) {
        console.error('Failed to add property:', error.message || 'Unknown error');
    }
};

</script>

<style scoped>
.content-container {
    background-color: #000;
    color: #fff;
    padding: 20px;
}

.property-form {
    display: flex;
    flex-direction: column;
    max-width: 300px;
}

.form-label {
    margin-bottom: 5px;
}

.form-input {
    padding: 8px;
    margin-bottom: 10px;
}

.form-button {
    background-color: #ff0000;
    color: #fff;
    padding: 10px;
    cursor: pointer;
    margin-top: 10px;
}
</style>
