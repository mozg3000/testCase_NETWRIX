<template>
  <select
      name="search-type"
      id="search_type_id"
      class="search_selection"
      :change="handleChange()"
      v-model="selected"
  >
    <option
        v-for="(option, i) in options"
        :key="i"
        :value="i"
    >
      {{ option }}
    </option>
  </select>
</template>

<script>
import {mapState} from "vuex";
export default {
  name: "SearchSelector",
  props: {
    options: {type: Array, required: true},
  },
  data: () => ({
    selected: 0
  }),
  computed: {
    ...mapState(['searchType'])
  },
  methods: {
    handleChange() {
      this.$emit('changeSelect', this.options[this.selected])
    }
  }
}
</script>

<style scoped>


</style>