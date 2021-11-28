<template>
  <div class="wrapper">
    <header class="header">
      <div class="">
        <h1 class="main_header">
          Netwrix Partner Locator
        </h1>
        <div>
          <p class="header_text">
            Hundreds of Netwrix partners around the world are standing by to help you. <br/>With our Partner Locator you can easily find the list of authorized partners in your area.
          </p>
          <SearchBox @change="handleSearch($event)"/>
          <div class="search_selectors_group">
            <SearchSelector
                :options="typeOptions"
                @changeSelect="handleTypeChange($event)"
            />
            <div class="select_box_combo">
              <select
                  name="search-country"
                  id="search_country_id"
                  class="search_selection search_selection_country"
              >
                <option value="">Country</option>
                <option value="0">Company</option>
                <option value="1">Address</option>
              </select><select
                name="search-state"
                id="search_state_id"
                class="search_selection search_selection_state"
            >
              <option value="">State</option>
              <option value="0">Company</option>
              <option value="1">Address</option>
            </select>
            </div>
          </div>
        </div>
      </div>
    </header>
    <router-view/>
  </div>
</template>

<script>
import {mapMutations, mapActions, mapGetters, mapState} from "vuex";

import SearchBox from "./components/SearchBox";
import SearchSelector from "./components/SearchSelector";

export default {
  name: 'App',
  components: {SearchBox, SearchSelector},
  data: () => ({
    typeOptions: [
        'company',
        'address'
    ]
  }),
  computed: {
    ...mapGetters(['buildQuery']),
    ...mapState(['searchType', 'search'])
  },
  methods: {
    ...mapMutations(['SET_SEARCH', 'SET_SEARCH_TYPE']),
    ...mapActions(['fetchPartners']),
    handleSearch(search) {
      this.SET_SEARCH(search);
      // window.location.search = this.buildQuery;
      this.fetchPartners(this.buildQuery);
    },

    handleTypeChange(type) {
      this.SET_SEARCH_TYPE(type);
      if (this.search) {
        this.fetchPartners(this.buildQuery);
      }
    },
  }
}
</script>

<style>

@font-face {
  font-family: "OpenSans";
  src: url("assets/fonts/Open_Sans/OpenSans-VariableFont_wdth,wght.ttf") format("truetype");
  font-style: normal;
  font-weight: normal;
}
body {
  font-family: "OpenSans";
  background-color: #F2F2F2;
  overflow-x: hidden
}
.header {
  height: 500px;
  background: url(assets/bg.png);
  background-size: cover;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  color: #FFFFFF;
  padding-top: 120px;
  background-color: #F2F2F2;
}
.search_box {
  width: 692px;
  padding-top: 54px;
  margin: 0 auto;
}
.search_input {
  border: none;
  outline: none;
  width: 100%;
}
.search_input_group {
  background: #FFFFFF;
  border: 1px solid #FFFFFF;
  box-sizing: border-box;
  padding: 7px 16px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  border-radius: 2px;
  margin-bottom: 20px;
}
.search_selectors_group {
  display: flex;
  justify-content: space-between;
}
.search_selection {
  background: rgba(0, 0, 0, 0.0001);
  border: 2px solid #FFFFFF;
  box-sizing: border-box;
  color: white;
  padding: 12px;
  border-radius: 2px;
  opacity: 1;
  outline: none;
  width: 209px;
  font-size: 13px;
  line-height: 40px;
}
.search_selection > option {
  color:#354556;
  padding: 5px;
}
.search_selection_country {
  border-radius-topright: 0;
  border-radius-topleft: 0;
}
.search_selection_state {
  border-left: none;
}
@media screen and (min-width: 1260px) {

  .container {
    width: 1110px;
    margin: 0 auto;
    background-color: #F2F2F2;
  }
  .main_header {
    font-family: OpenSans, serif;
    font-size: 46px;
    line-height: 28px;
    margin-bottom: 21px;
  }
  .header_text {
    font-size: 16px;
    line-height: 32px;
    width: 692px;
    margin: 0 auto;
  }
  .search_box {
    width: 692px;
    padding-top: 54px;
    margin: 0 auto;
  }
  .search_input {
    border: none;
    outline: none;
    width: 100%;
  }
  .search_input_group {
    background: #FFFFFF;
    border: 1px solid #FFFFFF;
    box-sizing: border-box;
    padding: 7px 16px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    border-radius: 2px;
    margin-bottom: 20px;
  }
  .search_selectors_group {
    display: flex;
    justify-content: space-between;
  }
  .search_selection {
    background: rgba(0, 0, 0, 0.0001);
    border: 2px solid #FFFFFF;
    box-sizing: border-box;
    color: white;
    padding: 12px;
    border-radius: 2px;
    opacity: 1;
    outline: none;
    width: 209px;
    font-size: 13px;
    line-height: 40px;
  }
  .search_selection > option {
    color:#354556;
    padding: 5px;
  }
  .search_selection_country {
    border-radius-topright: 0;
    border-radius-topleft: 0;
  }
  .search_selection_state {
    border-left: none;
  }
}
@media screen and (max-width: 767px) {
  .container {
    width: 288px;
  }
  .search_selectors_group {
    flex-direction: column;
    align-items: center;
    min-height: 150px;
  }
  .select_box_combo {
    flex-direction: column;
    align-items: center;
  }
  .select_box_combo > select {
    display: block;
  }
  .header {
    height: 601px;
  }
  .header_text,
  .search_box,
  .main_header {
    width: 288px;
  }
  .main_header {
    font-weight: bold;
    font-size: 30px;
    line-height: 40px;
  }
  .search_selection {
    margin-bottom: 10px;
    width: 288px;
  }
  .select_box_combo > select {
    margin-bottom: 10px;
  }
  .search_selection_state {
    border-left: 2px solid #FFFFFF;
  }
}
</style>
