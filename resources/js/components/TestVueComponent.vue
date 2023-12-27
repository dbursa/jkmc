<template>
  <div>
    <h1>Hello {{ message }} and increment is {{ count }}</h1>
    <button @click="increment">Increment</button>
  </div>
</template>
<!-- Vue is working correctly. Its handled byt @vitejs/plugin-vue -->
<script setup>
import { ref } from 'vue';

const message = ref('Vue is awesome!');
const count = ref(0);

// Functions
const increment = () => {
  count.value++;
};
</script>