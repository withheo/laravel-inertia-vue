<template>
    <div>
        <div class='filter-item' :class = "{test : isActive(filter)}"
        @click="onClick(filter)"
        > {{ filter.name }} </div>
    </div>
</template>
<script lang="ts">
import { defineComponent } from 'vue'
import { router } from '@inertiajs/vue3'

export default defineComponent({
    props: {
        filter: Object,
    },
    setup() {
        const onClick = (filterItem) => {
            console.log("filterItem", filterItem);
            const url = `/?category_id=${filterItem.category_id}`;
            router.visit(url, {
                only: ['contents', 'filters'],
                preserveState: true,
                preserveScroll: true,
            })
        }

        const isActive = (filterItem) => {
            return filterItem.active;
        }
        
        return {
            onClick,
            isActive,
        }
    },
})
</script>
<style>
    .filter-item {
        margin:0.5rem;
        border-radius: 0.6rem;
        background-color: cornflowerblue;
        padding: 1rem;
        color: cornsilk;
        transition: 0.2s;
    }
    .filter-item:hover {
         background-color: rgb(173, 201, 255);
         color: rgb(0, 0, 0);
         cursor: pointer;
    }
</style>