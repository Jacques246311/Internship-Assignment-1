<template>
    <div class="content-container">
        <h2>Add New Agent</h2>

        <form @submit.prevent="addAgent" class="form-container">
            <label for="agentName" class="form-label">Agent Name:</label>
            <input type="text" id="agentName" v-model="agentName" class="form-input" required />

            <label for="agentAge" class="form-label">Agent Age:</label>
            <input type="number" id="agentAge" v-model="agentAge" class="form-input" required />

            <button type="submit" class="form-button">Add Agent</button>
        </form>

        <v-data-table
            :headers="headers"
            :items="agents"
            :sort-by="['name']"
            :sort-desc="[false]"
            multi-sort
            class="elevation-1"
        >
            <template v-slot:item.action="{ item }">
                <v-icon @click="editAgent(item)" class="mr-2">mdi-pencil</v-icon>
                <v-icon @click="deleteAgent(item)">mdi-delete</v-icon>
            </template>
        </v-data-table>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const agentName = ref('');
const agentAge = ref(0);
const agents = ref([]);

const headers = [
    { text: 'Agent Name', value: 'name' },
    { text: 'Age', value: 'age' },
    { text: 'Actions', value: 'action', sortable: false },
];

const addAgent = async () => {
    try {
        const response = await axios.post('/add-agent', {
            name: agentName.value,
            age: agentAge.value,
        });

        console.log('Response:', response);

        if (response.data.success) {
            fetchAgents();
            agentName.value = '';
            agentAge.value = 0;
        } else {
            console.error('Failed to add agent:', response.data.error || 'Unknown error');
        }
    } catch (error) {
        console.error('Failed to add agent:', error.message || 'Unknown error');
    }
};

const fetchAgents = async () => {
    try {
        const response = await axios.get('/get-agents');
        agents.value = response.data;
    } catch (error) {
        console.error('Failed to fetch agents:', error.message || 'Unknown error');
    }
};

const editAgent = async (agent) => {
    try {
        const newAge = prompt('Enter the new age:', agent.age);

        if (newAge !== null) {
            const response = await axios.put(`/edit-agent/${agent._id}`, { age: newAge });

            if (response.data.success) {
                fetchAgents();
            } else {
                console.error('Failed to edit agent:', response.data.error || 'Unknown error');
            }
        }
    } catch (error) {
        console.error('Failed to edit agent:', error.message || 'Unknown error');
    }
};

const deleteAgent = async (agent) => {
    try {
        const confirmDelete = confirm(`Are you sure you want to delete ${agent.name}?`);

        if (confirmDelete) {
            const response = await axios.delete(`/delete-agent/${agent._id}`);

            if (response.data.success) {
                fetchAgents();
            } else {
                console.error('Failed to delete agent:', response.data.error || 'Unknown error');
            }
        }
    } catch (error) {
        console.error('Failed to delete agent:', error.message || 'Unknown error');
    }
};

onMounted(fetchAgents);
</script>

<style scoped>
.content-container {
    background-color: #000;
    color: #fff;
    padding: 20px;
}

.form-container {
    display: flex;
    flex-direction: column;
    max-width: 300px;
    margin-bottom: 20px;
}

.form-label {
    margin-bottom: 10px;
}

.form-input {
    padding: 10px;
    margin-bottom: 10px;
}

.form-button {
    background-color: #ff0000;
    color: #fff;
    padding: 10px;
    cursor: pointer;
}
</style>
