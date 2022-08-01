<template>
    <p>{{ tweened.toFixed(0) }}</p>
</template>

<script>
    import gsap from 'gsap'

    export default {
        name: "Counter",
        props: {
            value: {
                type: [String, Number],
                default: 0
            }
        },
        watch: {
            number(n) {
                gsap.to(this, { duration: 1, tweened: Number(n) || 0 });
            }
        },
        data() {
            return {
                number: 0,
                tweened: 0
            }
        },
        mounted() {
            this.number = parseInt(this.value);
        }
    }
</script>

<style scoped>

</style>