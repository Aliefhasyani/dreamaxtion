<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const isMobileMenuOpen = ref(false);
const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
};
</script>

<template>
    <nav class="h-[100px] lg:h-[120px] z-10 relative nav-fade">
        <div class="absolute top-full left-0 w-full h-[240px] pointer-events-none z-10"></div>

        <div class="container mx-auto px-6 md:px-4">
            <div class="flex h-[100px] lg:h-[130px] items-center justify-between">
                <div>
                    <Link href="/">
                        <img
                            src="/img/logo-white.png"
                            alt="Dreamaxtion Logo"
                            width="177"
                            height="33"
                            class="ml-14"
                        >
                    </Link>
                </div>
                
                <div class="hidden md:block">
                    <div class="flex items-center relative z-20">
                        <Link href="/about" class="text-white text-[16px] tracking-wider font-medium font-[Montserrat,sans-serif] mr-10">
                            About 
                        </Link>
                        <Link href="/services" class="text-white text-[16px] tracking-wider font-medium font-[Montserrat,sans-serif] mr-10">
                            Services
                        </Link>
                        <Link href="/journey" class="text-white text-[16px] tracking-wider font-medium font-[Montserrat,sans-serif] mr-10">
                            Journey
                        </Link>
                        <Link href="/founder" class="text-white text-[16px] tracking-wider font-medium font-[Montserrat,sans-serif] mr-10">
                            Founder
                        </Link>
                        <Link href="/book-meeting" class="bg-[#DF3E43] text-[16px]  hover:opacity-90 text-white font-medium font-[Montserrat,sans-serif] py-2 px-11 rounded-full transition-opacity duration-200 inline-block">
                            Book Meeting
                        </Link>
                    </div>
                </div>
                
                <div class="md:hidden">
                    <button @click="toggleMobileMenu" type="button" class="focus:outline-none relative z-20">
                        <img src="/img/icons/menu.svg" alt="menu">
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div v-if="isMobileMenuOpen" class="z-10 relative" style="background: radial-gradient(ellipse at center, #082239, #031221, #021220);">
        <div class="container mx-auto px-6 md:px-4">
            <div class="pb-8 text-white">
                <Link href="/about" class="font-semibold block pt-4">
                    About Us
                </Link>
                <Link href="/careers" class="font-semibold mt-8 block">
                    Careers
                </Link>
                <Link href="/contact" class="font-semibold mt-8 block">
                    Contact Us
                </Link>
            </div>
        </div>
    </div>
</template>