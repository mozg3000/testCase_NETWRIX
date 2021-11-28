<template>
  <div class="partners_list_item">
    <div class="list_item_logo">
      <img :src="partner.logo" :alt="partner.company">
    </div>
    <div class="list_item_description">
      <h3 class="list_item_description_header">
        {{this.partner.company}}
      </h3>
      <p class="list_item_description_address">
        {{this.partner.address}}
      </p>
    </div>
    <div class="list_item_contacts">
      <a :href="partner.website" class="list_item_contacts_site">
        Website
      </a>
      <p class="list_item_contacts_tel">
        {{this.partner.phone}}
      </p>
    </div>
    <div class="list_item_comment">
      {{this.partner.status}}
    </div>
  </div>
</template>

<script>
export default {
  name: "PartnersListItem",
  props: {
    partner: {
      type: Object,
      required: true
    }
  }
}
</script>

<style scoped>
.partners_list_item {
  display: flex;
  justify-content: space-between;
  flex-wrap: nowrap;
  padding: 35px 78px;
  background: #FFFFFF;
  box-shadow: 0px 1px 2px rgba(5, 27, 43, 0.14);
  border-radius: 8px;
  margin-bottom: 20px;
}
.list_item_logo {
  flex: 2;
}
.list_item_description {
  flex: 7;
}
.list_item_description_header {
  font-style: normal;
  font-weight: bold;
  font-size: 21px;
  line-height: 32px;
  color: #354556;
  margin: 0 0 14px 0;
}
.list_item_description_address {
  font-style: normal;
  font-weight: normal;
  font-size: 14px;
  line-height: 24px;
  color: #354556;
}
.list_item_contacts {
  flex: 2;
  border-right: 1px solid rgba(5, 27, 43, 0.14);
}
.list_item_contacts_site {
  font-style: normal;
  font-weight: normal;
  font-size: 14px;
  line-height: 32px;
  color: #0068DA;
  text-decoration: none;
  margin-bottom: 6px;
}
.list_item_contacts_tel {
  font-style: normal;
  font-weight: normal;
  font-size: 13px;
  line-height: 32px;
  color: #354556;
}
.list_item_comment {
  flex: 2;
  font-style: normal;
  font-weight: 600;
  font-size: 13px;
  line-height: 32px;
  color: #354556;
  padding-left: 48px;
}
</style>