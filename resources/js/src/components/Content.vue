<template>
    <div v-for="item in contents.data" :key="item.id" >
        <content-item :contents="item"/>
    </div>
</template>
<script lang="ts">
import { defineComponent } from 'vue'
import ContentItem from './ContentItem.vue';

export default defineComponent({
    components: {
        ContentItem
    },
    props: {
        contents: Object,
    },
    setup() {
        
    },
})
</script>
