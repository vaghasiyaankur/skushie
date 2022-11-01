<template>
   <div>
      <div
         class="row"
         style="justify-content: center; align-items: center !important"
         v-if="!$parent.permissions.includes('dashboard')"
         >
         <div class="notfound" style="margin-top: 200px">
            <p>You Don't Have Permission To View Dashboard</p>
         </div>
      </div>
      <div class="row" v-if="$parent.permissions.includes('dashboard')">
         <div class="col-sm-6 col-xl-3">
            <div
               class="
               card card-custom
               card_custom_effect
               gutter-b
               bg-white
               border-0
               theme-circle theme-circle-primary
               "
               >
               <div class="card-body">
                  <div class="up-down-counter up-counter">
                    <span
                    class="svg-icon"
                    :class="OrderPercentage < 0 ? 'text-danger' : 'text-success'"
                    >
                 <i
                    :class="
                    OrderPercentage < 0 ? 'fa-arrow-down' : 'fa-arrow-up'
                    "
                    class="fas"
                    ></i>
                 </span>
                     <span
                        class="font-weight-bold font-size-h0 pl-3"
                        :class="OrderPercentage < 0 ? 'text-danger' : 'text-success'"
                        >
                     {{ OrderPercentage }}
                     </span>
                   
                  </div>
                  <div class="mt-3">
                     <div class="d-flex align-items-center">
                        <div class="icon-wrapper pr-4 order-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user avatar-icon">
                              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                              <circle cx="12" cy="7" r="4"></circle>
                           </svg>
                        </div>
                        <div class="count-content">
                           <h3 class="text-body font-weight-bold mb-0">Orders</h3>
                           <span class="text-dark font-weight-bold"
                              ><span class="counter">
                           {{ totalOrders }}
                           </span></span
                              >
                        </div>
                     </div>
                     <div class="text-black-50 mt-3">
                        Compare to last year ({{ lastYear }})
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xl-3">
            <div
               class="
               card card-custom card_custom_effect
               gutter-b
               bg-white
               border-0
               theme-circle theme-circle theme-circle-secondary
               "
               >
               <div class="card-body">
                <div class="up-down-counter up-counter">
                  <span
                    class="svg-icon"
                    :class="
                    ProductPercentage < 0 ? 'text-danger' : 'text-success'
                    "
                    >
                  <i
                    :class="
                    ProductPercentage < 0 ? 'fa-arrow-down' : 'fa-arrow-up'
                    "
                    class="fas"
                    ></i>
                  </span>
                  <span
                  class="font-weight-bold font-size-h0 pl-3"
                  :class="
                  ProductPercentage < 0 ? 'text-danger' : 'text-success'
                      "
                      >
                  {{ ProductPercentage }}
                  </span>
                  
                </div>
                 
                  <div class="mt-3">
                     <div class="d-flex align-items-center">
                      <div class="icon-wrapper pr-4 product-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box avatar-icon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                      </div>
                      <div class="count-content">
                        <h3 class="text-body font-weight-bold mb-0">Products</h3>
                        <span class="text-dark font-weight-bold"
                           ><span class="counter">
                        {{ totalProducts }}
                        </span></span
                           >
                      </div>
                       
                     </div>
                     <div class="text-black-50 mt-3">
                        Compare to last year ({{ lastYear }})
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xl-3">
            <div
               class="
               card card-custom card_custom_effect
               gutter-b
               bg-white
               border-0
               theme-circle theme-circle-success
               "
               >
               <div class="card-body">
                <div class="up-down-counter up-counter">
                  <span
                      class="svg-icon"
                      :class="
                      CustomerPercentage < 0 ? 'text-danger' : 'text-success'
                      "
                      >
                    <i
                        :class="
                        CustomerPercentage < 0 ? 'fa-arrow-down' : 'fa-arrow-up'
                        "
                      class="fas"
                      ></i>
                  </span>
                  <span
                    class="font-weight-bold font-size-h0 pl-3"
                    :class="
                    CustomerPercentage < 0 ? 'text-danger' : 'text-success'
                      "
                      >
                  {{ CustomerPercentage }}
                </span>
                        
                </div>
                 
                  <div class="mt-3">
                     <div class="d-flex align-items-center">
                      <div class="icon-wrapper pr-4 user-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user avatar-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                      </div>
                      <div class="count-content">
                        <h3 class="text-body font-weight-bold mb-0">Users</h3>
                        <span class="text-dark font-weight-bold"
                           ><span class="counter">
                        {{ totalCustomers }}
                        </span></span
                           >
                      </div>
                        
                     </div>
                     <div class="text-black-50 mt-3">
                        Compare to last year ({{ lastYear }})
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-xl-3">
            <div
               class="
               card card-custom card_custom_effect
               gutter-b
               bg-white
               border-0
               theme-circle theme-circle-info
               "
               >
               <div class="card-body">
                <div class="up-down-counter up-counter">
                  <span
                  class="svg-icon"
                  :class="SalePercentage < 0 ? 'text-danger' : 'text-success'"
                  >
                  <i
                      :class="
                      SalePercentage < 0 ? 'fa-arrow-down' : 'fa-arrow-up'
                      "
                  class="fas"
                  ></i>
                  </span>
                  <span
                  class="font-weight-bold font-size-h0 pl-3"
                  :class="SalePercentage < 0 ? 'text-danger' : 'text-success'"
                  >
                  {{ SalePercentage }}
                  </span>
              
                </div>
                  
                  <div class="mt-3">
                     <div class="d-flex align-items-center">
                        <div class="icon-wrapper pr-4 sales-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </div>
                        <div class="count-content">
                          <h3 class="text-body font-weight-bold mb-0">Sales</h3>
                            <span class="text-dark font-weight-bold"
                              >$<span class="counter">
                            {{ totalSales }}
                            </span></span
                              >
                        </div>
                     </div>
                     <div class="text-black-50 mt-3">
                        Compare to last year ({{ lastYear }})
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row" v-if="$parent.permissions.includes('dashboard')">
        <div class="col-xl-8 col-lg-7">
          <div class="card card-custom gutter-b bg-white border-0 order_card">
             <div class="card-body px-2">
                <div>
                   <div class="kt-table-content table-responsive">
                      <Order />
                   </div>
                </div>
             </div>
          </div>
       </div>
         <!-- <div class="col-lg-6 col-xl-8">
            <div class="card card-custom gutter-b bg-white border-0">
               <div class="card-header align-items-center border-0">
                  <div class="card-title mb-0">
                     <h3 class="card-label text-body font-weight-bold mb-0">Users</h3>
                  </div>
               </div>
               <div class="card-body pt-3">
                  <div id="chart">
                     <apexchart
                        type="line"
                        height="350"
                        :options="chartOptions"
                        :series="series"
                        ></apexchart>
                  </div>
               </div>
            </div>
         </div> -->
         
         <div class="col-xl-4 col-lg-5">
            <div class="card card-custom gutter-b bg-white border-0">
               <div class="card-header align-items-center border-0">
                  <div class="card-title mb-0">
                     <h3 class="card-label text-body font-weight-bold mb-0">
                        Last Update
                     </h3>
                  </div>
               </div>
               <div class="card-body px-0">
                  <ul class="list-group scrollbar-1 justify-content-between" style="height: 300px">
                     <li
                        class="
                        list-group-item list-group-item-action
                        border-0
                        d-flex
                        align-items-center
                        justify-content-between
                        py-2
                        "
                        >
                        <div class="list-left d-flex align-items-center">
                           <span
                              class="
                              d-flex
                              align-items-center
                              justify-content-center
                              rounded
                              svg-icon
                              w-45px
                              h-45px
                              bg_lightyellow text__yellow
                              mr-3 border_radius_10
                              "
                              >
                              <svg
                                 width="20px"
                                 height="20px"
                                 viewBox="0 0 16 16"
                                 class="bi bi-lightning-fill"
                                 fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <path
                                    fill-rule="evenodd"
                                    d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"
                                    />
                              </svg>
                           </span>
                           <div class="list-content">
                              <span class="list-title text-body">Total Products</span>
                              <small class="text-muted d-block"
                                 >{{ thisWeekProducts }} New Products</small
                                 >
                           </div>
                        </div>
                        <span style="font-size:16px;">{{ totalProducts }}</span>
                     </li>
                     <li
                        class="
                        list-group-item list-group-item-action
                        border-0
                        d-flex
                        align-items-center
                        justify-content-between
                        py-2
                        "
                        >
                        <div class="list-left d-flex align-items-center">
                           <span
                              class="
                              d-flex
                              align-items-center
                              justify-content-center
                              rounded
                              svg-icon
                              w-45px
                              h-45px
                              text__blue bg_lightblue
                              mr-3 border_radius_10
                              "
                              >
                              <svg data-v-12658639="" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon"><polyline data-v-12658639="" points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline data-v-12658639="" points="17 6 23 6 23 12"></polyline></svg>
                           </span>
                           <div class="list-content">
                              <span class="list-title text-body">Total Sales</span>
                              <small class="text-muted d-block"
                                 >{{ thisWeekSales }} New Sales</small
                                 >
                           </div>
                        </div>
                        <span style="font-size:16px;">{{ totalSales }}</span>
                     </li>
                     <li
                        class="
                        list-group-item list-group-item-action
                        border-0
                        d-flex
                        align-items-center
                        justify-content-between
                        py-2
                        "
                        >
                        <div class="list-left d-flex align-items-center">
                           <span
                              class="
                              d-flex
                              align-items-center
                              justify-content-center
                              rounded
                              svg-icon
                              w-45px
                              h-45px
                              bg_lightpurple text__purple
                              mr-3 border_radius_10
                              "
                              >
                              <svg
                                 width="20px"
                                 height="20px"
                                 viewBox="0 0 16 16"
                                 class="bi bi-bar-chart-line-fill"
                                 fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <path
                                    fill-rule="evenodd"
                                    d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"
                                    />
                              </svg>
                           </span>
                           <div class="list-content">
                              <span class="list-title text-body">Total Order</span>
                              <small class="text-muted d-block"
                                 >{{ thisWeekOrders }} New Sales</small
                                 >
                           </div>
                        </div>
                        <span style="font-size:16px;">{{ totalOrders }}</span>
                     </li>
                     <li
                        class="
                        list-group-item list-group-item-action
                        border-0
                        d-flex
                        align-items-center
                        justify-content-between
                        py-2
                        "
                        >
                        <div class="list-left d-flex align-items-center">
                           <span
                              class="
                              d-flex
                              align-items-center
                              justify-content-center
                              rounded
                              svg-icon
                              w-45px
                              h-45px
                              bg_lightgreen text__green
                              mr-3 border_radius_10
                              "
                              >
                              <svg
                                 width="20px"
                                 height="20px"
                                 viewBox="0 0 16 16"
                                 class="bi bi-lightning-fill"
                                 fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <path
                                    fill-rule="evenodd"
                                    d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"
                                    />
                              </svg>
                           </span>
                           <div class="list-content">
                              <span class="list-title text-body">Total Users</span>
                              <small class="text-muted d-block"
                                 >{{ thisWeekCustomer }}New Users</small
                                 >
                           </div>
                        </div>
                        <span style="font-size:16px;">{{ totalCustomers }}</span>
                     </li>
                     <!-- <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between py-2">
                        <div class="list-left d-flex align-items-center">
                            <span class="d-flex align-items-center justify-content-center rounded svg-icon w-45px h-45px bg-info text-white mr-2">
                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-lightning-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z" />
                                </svg>
                            </span>
                            <div class="list-content">
                                <span class="list-title text-body">Total Visits</span>
                                <small class="text-muted d-block">New Visits</small>
                            </div>
                        </div>
                        <span>4.6k</span>
                        </li> -->
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="row" v-if="$parent.permissions.includes('dashboard')">
        <div class="col-lg-6 col-12">
            <div class="card card-custom gutter-b bg-white border-0">
               <div class="card-header align-items-center">
                  <div class="card-title mb-0">
                     <h3 class="card-label text-body font-weight-bold mb-0">Users</h3>
                  </div>
               </div>
               <div class="card-body pt-3">
                  <div id="chart" class="chart_main card_custom_effect">
                     <apexchart
                        type="line"
                        height="350"
                        :options="chartOptions"
                        :series="series"
                        ></apexchart>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-12">
          <div class="card card-custom gutter-b bg-white border-0">
             <div class="card-header align-items-center">
                <div class="card-title mb-0">
                   <h3 class="card-label font-weight-bold mb-0 text-body">
                      Monthly Sales
                   </h3>
                </div>
             </div>
             <div class="card-body pt-3">
                <div id="chart" class="chart_main card_custom_effect">
                   <apexchart
                      type="line"
                      height="350"
                      :options="saleChartOptions"
                      :series="saleSeries"
                      ></apexchart>
                </div>
             </div>
          </div>
       </div>
        </div>
      <!-- <div class="row" v-if="$parent.permissions.includes('dashboard')">
         <div class="col-lg-12 col-xl-12">
            <div class="card card-custom gutter-b bg-white border-0">
               <div class="card-header align-items-center border-0">
                  <div class="card-title mb-0">
                     <h3 class="card-label font-weight-bold mb-0 text-body">
                        Monthly Sales
                     </h3>
                  </div>
               </div>
               <div class="card-body pt-3">
                  <div id="chart">
                     <apexchart
                        type="line"
                        height="350"
                        :options="saleChartOptions"
                        :series="saleSeries"
                        ></apexchart>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- <div class="row" v-if="$parent.permissions.includes('dashboard')">
         <div class="col-lg-12 col-xl-12">
            <div class="card card-custom gutter-b bg-white border-0">
               <div class="card-body">
                  <div>
                     <div class="kt-table-content table-responsive">
                        <Order />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
   </div>
</template>
<script>
   import Order from "./Orders";
   import VueApexCharts from "vue-apexcharts";
   
   export default {
     name: "Dashboard",
     components: {
       Order,
       apexchart: VueApexCharts,
     },
     data() {
       return {
         loading: false,
         lastYearCustomers: 0,
         lastYearOrders: 0,
         lastYearProducts: 0,
         thisYearCustomers: 0,
         thisYearOrders: 0,
         thisYearProducts: 0,
         totalCustomers: 0,
         totalOrders: 0,
         totalProducts: 0,
         OrderPercentage: 0,
         ProductPercentage: 0,
         CustomerPercentage: 0,
         lastYear: "",
         totalSales: 0,
         thisYearSales: 0,
         lastYearSales: 0,
         SalePercentage: 0,
         thisWeekCustomer: 0,
         thisWeekOrders: 0,
         thisWeekProducts: 0,
         thisWeekSales: 0,
         series: [
           {
             name: "Customers",
             data: [],
           },
         ],
         chartOptions: {
           chart: {
             height: 350,
             type: "line",
             zoom: {
               enabled: false,
             },
           },
           dataLabels: {
             enabled: false,
           },
           stroke: {
             curve: "straight",
           },
           title: {
             text: "Monthly Users",
             align: "left",
           },
           grid: {
             row: {
               colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
               opacity: 0.5,
             },
           },
           xaxis: {
             categories: [],
           },
         },
         saleSeries: [
           {
             name: "Customers",
             data: [],
           },
         ],
         saleChartOptions: {
           chart: {
             height: 350,
             type: "line",
             zoom: {
               enabled: false,
             },
           },
           dataLabels: {
             enabled: false,
           },
           stroke: {
             curve: "straight",
           },
           title: {
             text: "Monthly Sales",
             align: "left",
           },
           grid: {
             row: {
               colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
               opacity: 0.5,
             },
           },
           xaxis: {
             categories: [],
           },
         },
       };
     },
     methods: {
       calculateOrders() {
         if (this.lastYearOrders < this.thisYearOrders)
           this.OrderPercentage =
             ((parseInt(this.thisYearOrders) - parseInt(this.lastYearOrders)) /
               parseInt(this.thisYearOrders)) *
             100;
         else if (this.lastYearOrders > this.thisYearOrders)
           this.OrderPercentage =
             (parseInt(this.thisYearOrders) - parseInt(this.lastYearOrders)) /
             parseInt(this.thisYearOrders) /
             100;
       },
       calculateProducts() {
         if (this.lastYearProducts < this.thisYearProducts)
           this.ProductPercentage =
             ((parseInt(this.thisYearProducts) - parseInt(this.lastYearProducts)) /
               parseInt(this.thisYearProducts)) *
             100;
         else if (this.lastYearProducts > this.thisYearProducts)
           this.ProductPercentage =
             (parseInt(this.thisYearProducts) - parseInt(this.lastYearProducts)) /
             parseInt(this.thisYearProducts) /
             100;
       },
       calculateCustomers() {
         if (this.lastYearCustomers < this.thisYearCustomers)
           this.CustomerPercentage =
             ((parseInt(this.thisYearCustomers) -
               parseInt(this.lastYearCustomers)) /
               parseInt(this.thisYearCustomers)) *
             100;
         else if (this.lastYearCustomers > this.thisYearCustomers)
           this.CustomerPercentage =
             (parseInt(this.thisYearCustomers) -
               parseInt(this.lastYearCustomers)) /
             parseInt(this.thisYearCustomers) /
             100;
       },
       calculateSales() {
         if (this.lastYearSales < this.thisYearSales)
           this.SalePercentage =
             ((parseInt(this.thisYearSales) - parseInt(this.lastYearSales)) /
               parseInt(this.thisYearSales)) *
             100;
         else if (this.lastYearSales > this.thisYearSales)
           this.SalePercentage =
             (parseInt(this.thisYearSales) - parseInt(this.lastYearSales)) /
             parseInt(this.thisYearSales) /
             100;
       },
       getDashboardStats() {
         this.$parent.loading = true;
         let page_url = "/api/admin/dashboard";
   
         axios
           .get(page_url, this.token)
           .then((res) => {
             let data = res.data;
             this.lastYearCustomers = parseInt(data.lastYearCustomers);
             this.lastYearOrders = parseInt(data.lastYearOrders);
             this.lastYearProducts = parseInt(data.lastYearProducts);
             this.thisYearCustomers = parseInt(data.thisYearCustomers);
             this.thisYearOrders = parseInt(data.thisYearOrders);
             this.thisYearProducts = parseInt(data.thisYearProducts);
             this.totalCustomers = parseInt(data.totalCustomers);
             this.totalOrders = parseInt(data.totalOrders);
             this.totalProducts = parseInt(data.totalProducts);
             this.lastYear = data.lastYear;
             this.totalSales = data.totalSales;
             this.thisYearSales = data.thisYearSales;
             this.lastYearSales = data.lastYearSales;
             this.thisWeekOrders = data.lastYearOrders;
             this.thisWeekProducts = data.thisWeekProducts;
             this.thisWeekCustomer = data.thisWeekCustomer;
             this.thisWeekSales = data.thisWeekSales;
             this.calculateOrders();
             this.calculateProducts();
             this.calculateCustomers();
   
             if (data.customerMonthly.length > 0) {
               var seiresData = [];
               var categories = [];
               for (var i = 0; i < data.customerMonthly.length; i++) {
                 seiresData.push(data.customerMonthly[i].id);
                 categories[i] = data.customerMonthly[i].month;
               }
               this.series = [{ name: "Customers", data: seiresData }];
               this.chartOptions = {
                 ...this.chartOptions,
                 ...{
                   xaxis: {
                     categories,
                   },
                 },
               };
             }
             if (data.saleMonthly.length > 0) {
               var saleSeriesData = [];
               var salCategories = [];
               for (var i = 0; i < data.saleMonthly.length; i++) {
                 saleSeriesData.push(data.saleMonthly[i].amount);
                 salCategories[i] = data.saleMonthly[i].month;
               }
               this.saleSeries = [{ name: "Sales", data: saleSeriesData }];
               this.saleChartOptions = {
                 ...this.saleChartOptions,
                 ...{
                   xaxis: {
                     categories: salCategories,
                   },
                 },
               };
             }
             console.log(this.saleSeries, this.saleChartOptions);
           })
           .finally(() => (this.$parent.loading = false));
       },
     },
     mounted() {
       var token = localStorage.getItem("token");
       this.token = {
         headers: {
           Authorization: `Bearer ${token}`,
         },
       };
   
       this.getDashboardStats();
     },
   };
</script>
<style>
.border_radius_10{
  border-radius: 10px !important;
}
.bg_lightpurple{
  background-color: #efe2fd !important;
}
.text__purple{
  color: #cfa5f9 !important;
}
.bg_lightyellow{
  background-color: #fdebd4 !important;
}
.text__yellow{
  color: #f9c47f !important;
}
.bg_lightgreen{
  background-color: #d4edda !important;
}
.text__green{
  color: #7eca90 !important;
}
.bg_lightblue{
  background-color: #cce5ff !important;
}
.text__blue{
  color: #66b0ff !important;
}
@media screen and (min-width:992px) and (max-width:1125px) {
   .order_card .dataTables_wrapper .dataTables_length {
      float: none !important;
      text-align: center !important;
  }
   .order_card .dataTables_wrapper .dataTables_filter {
      float: none !important;
      text-align: center !important;
   }
  }
</style>
<style scoped>

   .icon-wrapper svg {
   height: 50px;
   width: 50px;
   padding: 10px;
   border-radius: 10px;   
   }
   .icon-wrapper.order-icon svg{
    background: #efe2fd;
    color: #d7b4fa;
   }
   .icon-wrapper.product-icon svg{
    background: #fdebd4;
    color: #f9c47f;
   }
   .icon-wrapper.user-icon svg{
    background-color: #d4edda;
    color: #7eca90;
   }
   .icon-wrapper.sales-icon svg{
    background-color: #cce5ff;
    color: #66b0ff;
   }
   .count-content h3 {
   font-size: 15px;
   }
   .count-content span {
   line-height: normal;
   font-size: 25px;
   }
   .up-down-counter .svg-icon{
      width: 20px;
      height: 20px;
      background: #d4edda;
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
    }
  .list-group .list-content span{
    font-size: 16px;
    font-weight: 600;
  }
  .list-group .list-content small{
    font-size: 12px;
    font-weight: normal;
  }
  .chart_main{
    box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);
    padding: 10px;
    border-radius: 10px;
  }
  .card-custom .card-header{
    background-color: #f9f9f9;
  }
 
</style>