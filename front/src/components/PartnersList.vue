<template>
  <div>
    <div
        v-for="partner in partners"
        :key="partner.id"
    >
      <PartnersListItem :partner="partner"/>
    </div>
  </div>
</template>

<script>
import PartnersListItem from "./PartnersListItem";

export default {
  name: "PartnersList",
  components: {PartnersListItem},
  props: {
    partners: {type: Array, required: true}
  }
}
</script>

<style scoped>

</style>