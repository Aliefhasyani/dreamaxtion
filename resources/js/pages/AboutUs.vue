<script setup lang="ts">
import { ref } from 'vue';
import ClientRow from '@/components/ClientRow.vue';
import Footer from '@/components/Footer.vue';
import Navbar from '@/components/Navbar.vue';
import WhiteSection from '@/components/WhiteSection.vue';

const activeTab = ref('about');
</script>

<template>
    <section class="bg-[#020F1B] min-h-screen relative overflow-hidden">
        
        <div class="absolute top-0 left-0 w-full z-30">
            <Navbar/>
        </div>

        <div class="relative z-10">
            <div class="flex justify-center items-center gap-16 mt-36 relative z-20">
                <p 
                    @click="activeTab = 'about'"
                    :class="[
                        'w-52 font-normal text-center hover:bg-gray-500/60 text-white py-1 rounded-full transition-all duration-200 cursor-pointer font-[Montserrat,sans-serif]',
                        activeTab === 'about' ? 'bg-[#DFE3E817]' : ''
                    ]"
                >
                    About Dreamaxtion
                </p>
                <p 
                    @click="activeTab = 'vision'"
                    :class="[
                        'w-52 font-normal text-center hover:bg-gray-500/60 text-white py-1 rounded-full transition-all duration-200 cursor-pointer font-[Montserrat,sans-serif]',
                        activeTab === 'vision' ? 'bg-[#DFE3E817]' : ''
                    ]"
                >
                    Vision & Mission
                </p>
                <p 
                    @click="activeTab = 'values'"
                    :class="[
                        'w-52 font-normal text-center hover:bg-gray-500/60 text-white py-1 rounded-full transition-all duration-200 cursor-pointer font-[Montserrat,sans-serif]',
                        activeTab === 'values' ? 'bg-[#DFE3E817]' : ''
                    ]"
                >
                    Values
                </p>
            </div>
            
            <div class="flex items-start pr-12 w-full relative">
                <img
                    src="/img/union.png"
                    alt=""
                    class="absolute left-1/2 top-[100%] -translate-x-1/2 -translate-y-1/2 max-w-full h-auto object-contain pointer-events-none z-0 mix-blend-screen"
                >
                <div class="relative lg:w-1/2 flex-shrink-0">
                    <img src="/img/header.png" alt="mambo" class="w-[1103px] h-[564px] object-cover mt-20">
                    <div class="absolute inset-0" style="background: linear-gradient(to bottom, #020F1B 0%, #020F1B 18%, transparent 55%);"></div>
                </div>

                <div class="flex flex-col ml-24 pt-48 max-w-2xl">
                    
                    <div v-if="activeTab === 'about'">
                        <p class="font-semibold font-[Montserrat,sans-serif] text-[18px] text-white tracking-[5%]">Est 2017</p>
                        <p class="font-normal text-[14px] font-[Montserrat,sans-serif] text-white mt-8 leading-relaxed">
                            Dreamaxtion is making Human Capital better for employers and talents alike, leveraging psychometrics and cloud technology to revolutionize assessment, recruitment, and talent development.
                        </p>
                        <p class="font-normal text-[14px] font-[Montserrat,sans-serif] text-white mt-8 leading-relaxed">
                            Our flagship product is Dreamtalent, a predictive psychometric testing platform. With an assessment library in personality, culture and strengths, we help employers put the right people in the right place, and talents to reach their full potential.
                        </p>
                    </div>

                    <div v-if="activeTab === 'vision'">
                        <p class="font-semibold font-[Montserrat,sans-serif] text-[18px] text-white tracking-[5%]">Our Vision & Mission</p>
                        <p class="font-normal text-[14px] font-[Montserrat,sans-serif] text-white mt-8 leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore fugiat est non ipsum, dicta id blanditiis accusamus mollitia ex expedita totam consectetur optio? Molestias nemo mollitia qui laudantium corrupti ullam?
                        </p>
                        <p class="font-normal text-[14px] font-[Montserrat,sans-serif] text-white mt-8 leading-relaxed">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis odio nisi assumenda molestias adipisci ab, perspiciatis neque veritatis. Quos possimus esse animi voluptates. Inventore laborum optio incidunt provident quam consequuntur!                        </p>
                    </div>

                    <div v-if="activeTab === 'values'">
                        <p class="font-semibold font-[Montserrat,sans-serif] text-[18px] text-white tracking-[5%]">Our Values</p>
                        <p class="font-normal text-[14px] font-[Montserrat,sans-serif] text-white mt-8 leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis ratione beatae sunt optio nulla dicta quisquam porro voluptatem aliquid, voluptate laborum sapiente sint maiores architecto excepturi soluta quo laudantium enim?                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center mt-32 relative">
            <p class="absolute -top-5 bg-[#DF3E43] tracking-[5%] hover:opacity-90 text-white text-[18px] font-normal font-[Montserrat,sans-serif] py-2 px-5 rounded-lg transition-opacity duration-200 z-10">
                Clients
            </p>
            
            <div class="flex border-2 border-[#FFFFFF40] w-full max-w-2xl rounded-sm">
                <div class="flex flex-col items-center justify-center w-1/2 py-10 border-r border-[#FFFFFF40]">
                    <p class="text-[#FFFFFF] font-semibold text-[64px] leading-none font-[Montserrat,sans-serif]">120+</p>
                    <p class="text-[#FFFFFF] text-[28px] opacity-80 mt-4 font-[Montserrat,sans-serif] font-regular">Companies</p>
                </div>
                <div class="flex flex-col items-center justify-center w-1/2 py-10">
                    <p class="text-[#FFFFFF] font-semibold text-[64px] leading-none font-[Montserrat,sans-serif]">450K</p>
                    <p class="text-[#FFFFFF] text-[28px] opacity-80 mt-4 font-[Montserrat,sans-serif] font-regular">Candidates</p>
                </div>
            </div>
        </div>

        <div class="mt-28">
            <ClientRow/>
        </div>

        <div>
            <WhiteSection/>
        </div>

        <Footer/>
       
    </section>
</template>