<template>
    <div class="flex flex-row w-11/12 items-center">
        <img v-if="image" :src="image"
            class="border border-gray-400 h-6 rounded-full w-6">   
        <div class="border border-gray-200 max-w-sm ml-2 px-4 py-2 rounded-3xl">
            <span>Hola hola</span>
        </div>
     </div>
</template>

<script>
export default {
    data() {
        return {
            image : 'https://instagram.fscl16-1.fna.fbcdn.net/v/t51.2885-19/s150x150/120027817_335190484353597_6805762739375752326_n.jpg?_nc_ht=instagram.fscl16-1.fna.fbcdn.net&_nc_ohc=mlbR7Vla5QUAX-JPXU7&tp=1&oh=1f9c99e5957f5af0bd8d415a4f8bf96b&oe=601913F6'
        }
    },
    created() {
    },
    methods: {
    }
}
</script>