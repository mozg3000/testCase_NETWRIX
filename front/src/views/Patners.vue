<template>
<div>
  <div class="container">
    <div v-if="isLoading">
      Loading ...
    </div>
    <div v-else >
      <PartnersList :partners="partners" class="partner_list"/>
    </div>
  </div>
</div>
</template>

<script>
import {mapGetters, mapActions, mapState} from 'vuex';
import PartnersList from "../components/PartnersList";

export default {
  name: "Partners",
  components: {PartnersList},
  props: {
    company: {type: String},
    address: {type: String}
  },
  computed: {
    ...mapState(['isLoading', 'partners'])
  },
  methods: {
    ...mapActions(['fetchPartners']),
    buildQuery() {
      let query = '';
      query += this.company ? `company=${this.company}&` : '';
      query += this.address ? `address${this.address}` : '';
      return `${query}`;
    }
  },
  mounted() {
    this.fetchPartners(this.buildQuery())
    .then(partners => {
      console.log(partners);
    })
  }
}
</script>

<style scoped>
.partner_list {
  margin-top: 53px;
}
</style>