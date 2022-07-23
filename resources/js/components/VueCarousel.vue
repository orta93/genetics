<template>
    <carousel :items="1" :loop="true" :center="true" :nav="false">
        <div v-for="(item, key) in items" :key="key" class="container flex flex-col md:flex-row md:flex-reverse gap-4 mg:gap-8">
            <div class="w-full flex flex-col gap-2 font-bold text-center md:text-left">
                <p class="text-2xl">"{{ item.quote }}"</p>
                <p class="text-xl">- {{ item.author }}</p>
            </div>
            <div class="w-full">
                <img :src="'/images/' + item.img" class="w-3/4 md:1/2 mx-auto"/>
            </div>
        </div>
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
            }
        },
        computed: {
        }
    }
</script>

<style scoped>

</style>