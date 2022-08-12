<template>
    <carousel :items="1" :loop="true" :center="true" :nav="false">
        <template v-if="type === 'stories'">
            <div v-for="(item, key) in items" :key="key" class="container flex flex-col md:flex-row md:flex-reverse gap-4 mg:gap-8">
                <div class="w-full flex flex-col gap-2 font-bold text-center md:text-left">
                    <p class="text-2xl">"{{ item.quote }}"</p>
                    <p class="text-xl">- {{ item.author }}</p>
                </div>
                <div class="w-full">
                    <img :src="'/images/' + item.img" class="w-3/4 md:1/2 mx-auto"/>
                </div>
            </div>
        </template>
        <template v-if="type === 'cards'">
            <div v-for="(card, key) in items" :key="key" class="w-full">
                <a :href="card.link ? card.link : '#'" class="flex flex-col gap-2 w-full cursor-pointer">
                    <div class="w-full sm:w-1/3 md:w-full text-center py-5 md:py-12" :class="card.bgColor ? card.bgColor : ''">
                        <img :src="`/icons/${card.icon}`" class="mx-auto">
                    </div>
                    <div class="w-full sm:w-2/3 md:w-full text-center sm:text-left md:text-center px-5 pb-5">
                        <p class="font-bold text-lg mb-2">{{ card.title }}</p>
                        <p class="font-light">{{ card.description }}</p>
                    </div>
                </a>
            </div>
        </template>
    </carousel>
</template>

<script>
    import carousel from 'vue-owl-carousel'

    export default {
        name: "VueCarousel",
        components: { carousel },
        props: {
            items: {
                type: Array,
            },
            type: {
                type: String,
                default: 'stories'
            }
        }
    }
</script>

<style scoped>

</style>