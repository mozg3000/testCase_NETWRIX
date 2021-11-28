<template>
  <select
      name="search-type"
      id="search_type_id"
      class="search_selection"
      @change="$event('change')"
  >
    <option
        v-for="(i, option) in options"
        :key="i"
        :value="i"
    >
      {{ option }}
    </option>
  </select>
</template>

<script>
export default {
  name: "SearchSelector",
  props: {
    options: {type: Array, required: true}
  }
}
</script>

<style scoped>

</style>