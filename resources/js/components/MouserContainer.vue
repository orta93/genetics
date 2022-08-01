<template>
    <div class="flex gap-4 my-8">
        <div class="w-full flex flex-col gap-4">
            <div class="font-bold text-3xl text-gray-500 cursor-pointer" @mouseenter="selectedIndex = key" :class="{'text-blue-primary': selectedIndex === key}" v-for="(item, key) in items" :key="key">
                {{ item.title }}
            </div>
        </div>
        <div class="w-full" v-if="selectedItem !== null">
            <div class="bg-blue-primary rounded text-white flex flex-col gap-4 p-8">
                <p v-for="content in selectedItem.content">{{ content }}</p>
                <p v-if="selectedItem.link !== undefined"><a class="underline" :href="selectedItem.link.href">{{ selectedItem.link.content }}</a></p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "MouserContainer",
        props: {
            items: {
                type: Array,
            }
        },
        data() {
            return {
                selectedIndex: 0,
            }
        },
        computed: {
            selectedItem() {
                if (this.items.length && this.items[this.selectedIndex] !== undefined) {
                    return this.items[this.selectedIndex];
                }

                return null;
            }
        }
    }
</script>

<style scoped>

</style>