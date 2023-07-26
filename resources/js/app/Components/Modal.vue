<template>
    <div class="fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay z-10 absolute w-full h-full bg-black opacity-90 "></div>
        <div class="modal-container flex fixed w-full h-full z-50 overflow-y-auto items-center justify-center">
            <div class="bg-white rounded-xl p-4 flex flex-col modal">
                <div class="border-b border-gray-100 pb-2 mb-2 flex justify-between">
                    <span class=" font-bold">
                    {{ title }}
                    </span>
                    <span class="rounded-full p-2 cursor-pointer hover:bg-gray-200" @click="$emit('close')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </div>
                <div class="overflow-y-scroll" style="max-height: 600px;">
                    <pre>{{ contents }}</pre>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal",
    props: {
        title: String,
        contents: String,
    }
}
</script>

<style scoped>

</style>
