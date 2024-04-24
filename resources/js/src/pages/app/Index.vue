<template>
  <div class = 'flex' style= 'width:100%;height:auto'>
    <div style = 'min-width: 140px;'>
      <FilterItem :filter = "filter" v-for="filter in filters" :key="filter.cateogry_id"/>
    </div>
    <div class = 'wrapper'>
      <Content :contents="contents"/>
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent, onMounted } from 'vue';
import Content from '../../components/Content.vue';
import FilterItem from '../../components/FilterItem.vue';

export default defineComponent({
  components: {
    Content,
    FilterItem,
  },
  props: {
    contents: Object,
    filters: Object,
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
<style>
.flex {
  display: flex;
}
.wrapper {
        display: flex;
        flex-wrap: wrap;
    overflow: auto;
    }
</style>
