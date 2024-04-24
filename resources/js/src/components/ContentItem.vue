<template>
    <div class = 'box'>
        <div class= 'box-content'>
            {{ contents.title }}
        </div>
    </div>
</template>
<script lang="ts">
import { defineComponent } from 'vue'

export default defineComponent({
    props: {
        contents: {
            type: Object,
            default: () => {}
        }
    },
    setup() {
        
    },
})
</script>
<style>
    div {
        box-sizing: border-box;
    }
    
    .box {
        width: 140px;
        height: 140px;        
        margin:5px;
        border-radius: 1.6rem;       
    }

    .box-content {
        padding: 10px;
        border-radius: 1.6rem;
        width:100%;
        height:100%;
       
        background-color: blanchedalmond;
        transition: 0.2s;
    }

    .box-content:hover {
        cursor: pointer;
        background-color: coral;
    }
    
</style>
