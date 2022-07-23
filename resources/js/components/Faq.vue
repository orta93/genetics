<template>
    <div class="flex flex-col">
        <div v-for="(item, key) in items" class="flex flex-col gap-2 border-b border-black" :key="key" @click="toggleIndex(key)">
            <div class="cursor-pointer py-2">{{ item.question }}</div>
            <div v-if="selectedIndex === key" class="py-2">{{ item.answer }}</div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Faq",
        props: {
            items: {
                type: Array,
            }
        },
        data() {
            return {
                selectedIndex: null,
            }
        },
        methods: {
            toggleIndex(key) {
                this.selectedIndex = key === this.selectedIndex ? null : key;
            }
        }
    }
</script>

<style scoped>

</style>