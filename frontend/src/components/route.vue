<script setup>
import { ref, computed } from 'vue'

import { InsertData } from "./InsertData.vue";


const routes = {
  
  '/InsertData': InsertData
}

const currentPath = ref(window.location.hash)

window.addEventListener('hashchange', () => {
  currentPath.value = window.location.hash
})

const currentView = computed(() => {
  return routes[currentPath.value.slice(1) || '/'] || NotFound
})
</script>

<template>
|
  <a href="#/insertData">Insertion</a> |
  
  <component :is="currentView" />
</template>
