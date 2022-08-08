<template>
    <div class="grid grid-cols-4 gap-3 p-2">
        <div class="bg-blue-500 text-center py-1 text-white text-xs" v-for="gene in computedGenes">{{ gene }}</div>
        <div class="col-span-4 cursor-pointer text-center flex justify-center" v-if="genes.length > 20" @click="expand = !expand">
            <div class="font-bold text-sm border px-2 bg-white hover:bg-blue-100">{{ expand ? 'Ver menos' : 'Ver mas' }}</div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "GenContainer",
        props: {
            genes: {
                type: Array,
                default: function () {
                    return [];
                }
            }
        },
        data() {
            return {
                expand: false
            }
        },
        computed: {
            computedGenes() {
                let total = this.expand ? this.genes.length : 20;
                return this.genes.slice(0, total);
            }
        }
    }
</script>

<style scoped>

</style>