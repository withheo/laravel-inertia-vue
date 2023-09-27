<template>
  <div>
    App Test pages
    {{ props.datas }} {{ a }}
  </div>
</template>
<script lang="ts">
import { defineComponent, onMounted } from 'vue';

export default defineComponent({
  props: {
    datas: Object,
  },
  setup(props: any, emit) {

    const a = 1;

    onMounted(() => {

    })

    return {
      props,
      a
    }
  },
})

</script>
