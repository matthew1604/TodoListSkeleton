<script setup lang="ts">
import { ref } from 'vue';

const response = ref({});
fetch("http://localhost:8000/api/tasks")
  .then((res) => res.json())
  .then((data) => {
    response.value = data;
  });
</script>

<template>
  <pre>{{ JSON.stringify(response, null, 2) }}</pre>
</template>
