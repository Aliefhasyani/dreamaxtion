<script lang="ts" setup>
import ImageGallery from './ImageGallery.vue';
import Timeline from './Timeline.vue';
</script>

<template>
  <div>
    <div class="bg-white py-24">
      <div class="w-full pl-22 ">
        
        <div class="flex items-center gap-6">
          <a href="/" class="flex items-center flex-shrink-0">
            <img
              src="/img/logo.png"
              alt="Dreamaxtion Logo"
              width="301"
              height="54"
            >
          </a>

          <p class="font-[Montserrat,sans-serif] font-semibold text-[38px] ml-4 mt-2 leading-none flex-shrink-0 text-slate-800">
            Journey
          </p>
        </div>
        
      </div>

      <div class="mt-10 w-full">
        <Timeline/>
      </div>

      <div class="w-full px-14">

        <div class="mt-25">
          <ImageGallery/>
        </div>

        <div class="flex justify-center items-center my-55">
          <p class="font-[Montserrat,sans-serif] font-semibold text-[48px] underline decoration-[#DF3E43] decoration-3 underline-offset-14 tracking-[2%]">Meet Founder</p>
        </div>

        <div class="flex items-center gap-8">
          <img src="/img/mambo.png" alt="victor-osman" class="flex-shrink-0">
          <div>
            <p class="font-[Montserrat,sans-serif] font-semibold text-[32px] tracking-[5%]">Victor Osman, MIB</p>
          </div>
        </div>
      
      </div>
    </div>
  </div>
</template>