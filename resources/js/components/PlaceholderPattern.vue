<script setup lang="ts">
import { computed } from 'vue';

const patternId = computed(() => `pattern-${Math.random().toString(36).substring(2, 9)}`);
</script>

<template>
    <div class="flex flex-col items-center gap-6 p-7 ">
  <div>
    <img class="size-48 shadow-xl rounded-md" alt="" src="/img/cover.png" />
  </div>
  <div class="flex items-center">
    <span class="text-2xl font-medium">Class Warfare</span>
    <span class="font-medium text-sky-500">The Anti-Patterns</span>
    <span class="flex gap-2 font-medium text-gray-600 dark:text-gray-400">
      <span>No. 4</span>
      <span>·</span>
      <span>2025</span>
    </span>
  </div>
</div>
</template>
