<template>
  <div class="wrapper">
    <header class="header">
      <div class="container">
        <h1 class="main_header">
          Netwrix Partner Locator
        </h1>
        <div>
          <p class="header_text">
            Hundreds of Netwrix partners around the world are standing by to help you. <br/>With our Partner Locator you can easily find the list of authorized partners in your area.
          </p>
        </div>
        <div class="search_box">
          <div class="search_input_group">
            <input type="text" class="search_input" placeholder="Search by company name or address..">
            <svg
                class="search_icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 50 50"
                width="15px"
                height="18"
                fill="#0068DA"
            >
              <path d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z"/>
            </svg>
          </div>
          <div class="search_selectors_group">
            <select
                name="search-type"
                id="search_type_id"
                class="search_selection"
            >
              <option value="">Type</option>
              <option value="0">Company</option>
              <option value="1">Address</option>
            </select>
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

<style>

@font-face {
  font-family: "OpenSans";
  src: url("assets/fonts/Open_Sans/OpenSans-VariableFont_wdth,wght.ttf") format("truetype");
  font-style: normal;
  font-weight: normal;
}
.header {
  height: 500px;
  background: url(assets/bg.png);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  color: #FFFFFF;
  padding-top: 120px;
}
.container {
  width: 1110px;
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
  padding: 5px 0;
}
.search_selection_country {
  border-radius-topright: 0;
  border-radius-topleft: 0;
}
.search_selection_state {
  border-left: none;
}
</style>
