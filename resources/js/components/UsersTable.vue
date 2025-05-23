<script setup lang="ts">
import { computed } from 'vue';
import type { User } from '@/types';
const patternId = computed(() => `pattern-${Math.random().toString(36).substring(2, 9)}`);





</script>

<template>
  <div class="flex flex-col items-center gap-6 p-7 ">
 
    <div class="w-full overflow-x-auto p-4">
      <table class="w-full border-collapse border border-gray-300 shadow-lg rounded-lg overflow-hidden">
        <thead class="bg-blue-600 text-white">
          <tr>
            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold uppercase">State</th>
            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold uppercase">City</th>
            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold uppercase">State</th>
            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold uppercase">City</th>
            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold uppercase">State</th>
            <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold uppercase">City</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <tr class="hover:bg-gray-100">
            <td class="border border-gray-200 px-6 py-4">hh</td>
            <td class="border border-gray-200 px-6 py-4">Indianapolis</td>
            <td class="border border-gray-200 px-6 py-4">Indiana</td>
            <td class="border border-gray-200 px-6 py-4">Indianapolis</td>
            <td class="border border-gray-200 px-6 py-4">Indiana</td>
            <td class="border border-gray-200 px-6 py-4">Indianapolis</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="border border-gray-200 px-6 py-4">Indiana</td>
            <td class="border border-gray-200 px-6 py-4">Indianapolis</td>
            <td class="border border-gray-200 px-6 py-4">Indiana</td>
            <td class="border border-gray-200 px-6 py-4">Indianapolis</td>
            <td class="border border-gray-200 px-6 py-4">Indiana</td>
            <td class="border border-gray-200 px-6 py-4">Indianapolis</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="border border-gray-200 px-6 py-4">Indiana</td>
            <td class="border border-gray-200 px-6 py-4">Indianapolis</td>
            <td class="border border-gray-200 px-6 py-4">Indiana</td>
            <td class="border border-gray-200 px-6 py-4">Indianapolis</td>
            <td class="border border-gray-200 px-6 py-4">Indiana</td>
            <td class="border border-gray-200 px-6 py-4">Indianapolis</td>
          </tr>
          <tr class="hover:bg-gray-100">
            <td class="border border-gray-200 px-6 py-4">Indiana</td>
            <td class="border border-gray-200 px-6 py-4">Indianapolis</td>
            <td class="border border-gray-200 px-6 py-4">Indiana</td>
            <td class="border border-gray-200 px-6 py-4">Indianapolis</td>
            <td class="border border-gray-200 px-6 py-4">Indiana</td>
            <td class="border border-gray-200 px-6 py-4">Indianapolis</td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>
</template>
