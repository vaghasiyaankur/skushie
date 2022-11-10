<template>
  <div>
    <div class="d-flex flex-column-fluid">
      <!--begin::Container-->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-lg-12 col-xl-12">
                <div
                  class="
                    card card-custom
                    gutter-b
                    bg-transparent
                    shadow-none
                    border-0
                  "
                >
                  <div
                    class="
                      card-header
                      align-items-center
                      border-bottom-dark
                      px-0
                    "
                  >
                    <div class="card-title mb-0">
                      <h3 class="card-label mb-0 font-weight-bold text-body">
                        Purchase Report
                      </h3>
                    </div>
                    <div class="icons d-flex"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card card-custom gutter-b bg-white border-0">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-md-3 mb-3">
                        <div class="form-group mb-0">
                          <label>Warehouse Id</label>
                          <select class="form-control" v-model="warehouse_id">
                            <option value="">all</option>
                            <option
                              v-for="warehouse in warehouses"
                              :value="warehouse.warehouse_id"
                            >
                              {{ warehouse.warehouse_name }}
                            </option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label>Product Id</label>
                        <select class="form-control" v-model="product_id">
                          <option value="">all</option>
                          <option
                            v-for="product in products"
                            :value="product.product_id"
                          >
                            {{ product.detail ? product.detail[0].title : "" }}
                          </option>
                        </select>
                      </div>

                      <div class="col-md-3 mb-3">
                        <label class="w-100"></label> 
                        <button
                          class="btn btn-outline-purple border_radius_5 mt-2" 
                          style="padding: 7px 20px;"
                          @click="purchasReports('')"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                          Filter
                        </button>
                      </div>
                    </div>
                    <div>
                      <div class="table-responsive" id="printableTable">
                        <div
                          id="sale_wrapper"
                          class="dataTables_wrapper no-footer"
                        >
                          <div class="dataTables_length mb-3" id="sale_length">
                            <label
                              >Show
                              <select
                                name="sale_length"
                                aria-controls="sale"
                                class=""
                                v-model="limit"
                                v-on:change="purchasReports()"
                              >
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="500">500</option>
                                <option value="1000">1000</option>
                              </select>
                              entries</label
                            >
                          </div>

                          <div id="sale_filter" class="dataTables_filter">
                            <!-- <label>Search:<input type="search" class="" placeholder="" aria-controls="sale" v-model="searchParameter" @keyup="purchasReports()"></label> -->
                          </div>
                          <table
                            id="sale"
                            class="display dataTable no-footer order--table"
                            sale="grid"
                          >
                            <thead class="text-body">
                              <tr sale="row">
                                <th
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="Action"
                                  style="width: 53.1891px"
                                >
                                  Product
                                </th>
                                <th
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="Action"
                                  style="width: 53.1891px"
                                >
                                  Purchase Amount
                                </th>
                                <th
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="Action"
                                  style="width: 53.1891px"
                                >
                                  Purchase Qty
                                </th>
                                
                              </tr>
                            </thead>
                            <tbody class="kt-table-tbody text-dark">
                              <tr
                                class="kt-table-row kt-table-row-level-0 odd"
                                sale="row"
                                v-for="(purchase,i) in purchases"
                                v-bind:key="i"
                              >
                                <td>
                                  {{ purchase.title ? purchase.title : "" }}
                                </td>
                                <td>
                                  {{ purchase.price}}
                                </td>
                                <td>
                                  {{ purchase.qty}}
                                </td>                               
                              </tr>
                              <tr v-if="purchases.length == 0" class="text-center font-size-16"><td colspan="3">No Order Found</td></tr>
                            </tbody>
                          </table>
                          <ul class="pagination pagination-sm mb-0 mt-3 justify-content-end align-items-center px-2" v-if="purchases.length != 0">
                            <li v-bind:class="[{disabled: !pagination.prev_page_url}]"><button class="page-link" href="#" @click="purchasReports(pagination.prev_page_url)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous
                                </button>
                            </li>

                            <li v-for="n in pagination.last_page" :key="n"><button class="page-link text-dark" :class="{ 'active' : pagination.current_page == n  }" href="#">{{ n }}</button></li>

                            <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><button class="page-link" href="#" @click="purchasReports(pagination.next_page_url)">
                                Next<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </button></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ErrorHandling from "../../ErrorHandling";
export default {
  data() {
    return {
      purchases: [],
      searchParameter: "",
      sortBy: "id",
      sortType: "ASC",
      limit: 10,
      error_message: "",
      edit: false,
      actions: false,
      pagination: {},
      request_method: "",
      is_default: "0",
      token: [],
      product_id: "",
      warehouse_id: "",
      warehouses: [],
      products: [],
      errors: new ErrorHandling(),
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },

  methods: {
    purchasReports(page_url) {
      this.$parent.loading = true;
      let vm = this;
      page_url = page_url || "/api/admin/reports/purchase-report";
      if(Number.isInteger(page_url)){
        page_url ="/api/admin/reports/purchase-report?page="+page_url;
      }
      var arr = page_url.split("?");

      if (arr.length > 1) {
        page_url += "&limit=" + this.limit;
      } else {
        page_url += "?limit=" + this.limit;
      }
      page_url +=
        "&warehouse_id=" + this.warehouse_id + "&product_id=" + this.product_id;

      var responseData = {};

      axios
        .get(page_url, this.token)
        .then((res) => {
          this.purchases = [];
          var arr = {};
          for (var k = 0; k < res.data.data.length; k++) {
              if (res.data.data[k].product.product_type == 'simple') {
                  arr = res.data.data[k];
                  arr.title = res.data.data[k].product.detail.length > 0 ? res.data.data[k].product.detail[0].title : '';
                  console.log(arr);
                  this.purchases.push(arr);
                  arr = {};
              } else {
                  if (res.data.data[k].product.product_combination.length > 0) {
                      for (var i = 0; i < res.data.data[k].product.product_combination.length; i++) {
                          var combination_name = '';
                          if(res.data.data[k].product.product_combination[i].id == res.data.data[k].product_combination_id){
                              if (res.data.data[k].product.product_combination[i].combination.length > 0) {
                                  for (var j = 0; j < res.data.data[k].product.product_combination[i].combination.length; j++) {
                                      if (j == 0) {
                                          combination_name = res.data.data[k].product.product_combination[i].combination[j].variation.variation_detail[0].name;
                                      } else {
                                          combination_name += '-' + res.data.data[k].product.product_combination[i].combination[j].variation.variation_detail[0].name;
                                      }
                                      // console.log('i=' + i + 'j=' + j);
                                  }
                              }
                              arr = res.data.data[k];
                              arr.title = res.data.data[k].product.detail.length > 0 ? res.data.data[k].product.detail[0].title + ' (' + combination_name + ')' : '';
                              
                              this.purchases.push(arr);
                              arr = {};
                          }
                      }
                  }
              }
          }
          console.log('testing', this.purchases);
          vm.makePagination(res.data, res.data.links);
        })
        .finally(() => (this.$parent.loading = false));
    },

    makePagination(meta, links) {
      let pagination = {
        current_page: meta.current_page,
        last_page: meta.last_page,
        next_page_url: meta.next_page_url,
        prev_page_url: meta.prev_page_url,
      };

      this.pagination = pagination;
    },
    productNameBasedOnType(purchase) {
      // console.log(purchase);

      if (purchase.detail[0].product.product_type === "simple") {
        return purchase.detail[0].product.detail[0].title;
      }
      if (purchase.detail[0].product.product_type === "variable") {
        var nameToReturn =
          purchase.detail[0].product.detail[0].title + "(";

        purchase.detail[0].product.combination_detail.forEach(
          (element, i) => {
            if (
              element.product_combination_id ==
              purchase.detail[0].product_combination
                .product_combination_id
            ) {
              element.combination.forEach((result, j) => {
                nameToReturn += result.variation.detail[0].name;
                if (element.combination.length != j + 1) {
                  nameToReturn += ",";
                }
              });
            }
          }
        );
        nameToReturn += ")";
        return nameToReturn;
      }

      // return "working";
    },
    fetchWarehouses(page_url) {
      this.$parent.loading = true;
      let vm = this;
      page_url = page_url || "/api/admin/warehouse?getAllData=1";
      axios
        .get(page_url, this.token)
        .then((res) => {
          this.warehouses = res.data.data;
        })
        .finally(() => (this.$parent.loading = false));
    },
    fetchProducts(page_url) {
      this.$parent.loading = true;
      let vm = this;
      page_url = page_url || "/api/admin/product?getAllData=1";

      axios
        .get(page_url, this.token)
        .then((res) => {
          this.products = res.data.data;
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
    this.purchasReports();
    this.fetchWarehouses();
    this.fetchProducts();
  },
  props: ["loading"],
};
</script>
<style scoped>
.pagination.pagination-sm li button{
  padding: 6px 12px;
  border-radius: 5px;
  font-size: 15px;
  border: none;
  margin: 0 10px;
}
table.dataTable.display tbody tr.odd>.sorting_1, table.dataTable.order-column.stripe tbody tr.odd>.sorting_1{
  background-color: transparent;
}
table.dataTable.display tbody tr:hover>.sorting_1, table.dataTable.order-column.hover tbody tr:hover>.sorting_1{
  background-color: transparent;
}
</style>
