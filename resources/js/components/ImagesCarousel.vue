<template>
    <carousel :items="1" :loop="false" :center="true" :nav="false" :autoplay="true">
        <div v-for="(item, key) in items" :key="key" class="w-full">
            <div class="w-full">
                <img :src="'/images/' + item.img" class="w-3/4 md:1/2 mx-auto"/>
            </div>
        </div>
    </carousel>
</template>

<script>
    import carousel from 'vue-owl-carousel'

    export default {
        name: "ImagesCarousel",
        components: { carousel },
        props: {
            items: {
                type: Array,
            }
        }
    }
</script>

<style scoped>

</style>