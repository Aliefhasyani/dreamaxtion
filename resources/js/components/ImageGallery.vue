<script lang="ts">
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'ImageGallery'
})
</script>

<template>
  <div>
    <main class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 items-start">
      
      <div class="group transition-all duration-300 hover:-translate-y-2 border border-neutral-200">
        <div class="overflow-hidden aspect-[3/4]">
          <img 
            src="img/mambo.png" 
            class="w-full h-full object-cover"
          />
        </div>
      </div>

      <div class="group transition-all duration-300 hover:-translate-y-2 border border-neutral-200">
        <div class="overflow-hidden aspect-[3/4]">
          <img 
            src="img/mambo.png" 
            class="w-full h-full object-cover"
          />
        </div>
      </div>

      <div class="group transition-all duration-300 hover:-translate-y-2 border border-neutral-200">
        <div class="overflow-hidden aspect-[3/4]">
          <img 
            src="img/mambo.png" 
            class="w-full h-full object-cover"
          />
        </div>
      </div>

      <div class="group transition-all duration-300 hover:-translate-y-2 border border-neutral-200">
        <div class="overflow-hidden aspect-[3/4]">
          <img 
            src="img/mambo.png" 
            class="w-full h-full object-cover"
          />
        </div>
      </div>

    </main>
  </div>
</template>

<style scoped>
</style>