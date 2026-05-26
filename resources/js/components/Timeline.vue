<template>
  <div class="flex items-center justify-between w-full py-8 bg-white select-none">

    <!-- Left Arrow -->
    <button
      @click="prevStep"
      :disabled="activeIndex === 0"
      class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-full border border-slate-200 text-rose-500 transition-all hover:bg-slate-50 disabled:opacity-30 disabled:cursor-not-allowed"
    >
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
      </svg>
    </button>

    <!-- Timeline Track -->
    <div class="relative flex-1 mx-6">
      <!-- Labels row -->
      <div class="flex justify-between mb-3">
        <div
          v-for="(step, index) in steps"
          :key="'label-' + index"
          class="w-1/3 flex justify-center"
        >
          <span
            :class="[
              'text-sm whitespace-nowrap transition-all duration-200',
              activeIndex === index
                ? 'text-slate-800 font-bold'
                : 'text-slate-400 font-normal'
            ]"
          >{{ step.date }}</span>
        </div>
      </div>

      <!-- Dots + connector line row -->
      <div class="relative flex items-center justify-between">
        <!-- Connector line spanning between first and last dot centers -->
        <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 h-[2px] bg-[#D9D9D9]"></div>

        <!-- Dots -->
        <div
          v-for="(step, index) in steps"
          :key="'dot-' + index"
          @click="activeIndex = index"
          class="relative z-10 flex items-center justify-center cursor-pointer"
        >
          <div
            :class="[
              'rounded-full transition-all duration-300',
              activeIndex === index
                ? 'w-4 h-4 bg-rose-500 shadow-md shadow-rose-200'
                : 'w-3 h-3 bg-[#D9D9D9] hover:bg-slate-400'
            ]"
          ></div>
        </div>
      </div>
    </div>

    <!-- Right Arrow -->
    <button
      @click="nextStep"
      :disabled="activeIndex === steps.length - 1"
      class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-full border border-slate-200 text-rose-500 transition-all hover:bg-slate-50 disabled:opacity-30 disabled:cursor-not-allowed"
    >
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
      </svg>
    </button>

  </div>
</template>

<script setup>
import { ref } from 'vue'

const steps = ref([
  { date: 'June, 2021' },
  { date: 'May, 2022' },
  { date: 'June 2023' }
])

const activeIndex = ref(1)

const nextStep = () => {
  if (activeIndex.value < steps.value.length - 1) {
    activeIndex.value++
  }
}

const prevStep = () => {
  if (activeIndex.value > 0) {
    activeIndex.value--
  }
}
</script>