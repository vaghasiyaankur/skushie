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
                        Out Of Stock
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
                    <div class="row align-items-center mb-3">
                      <div class="col-md-3">
                        <div class="form-group mb-0">
                          <label>Warehouse Id</label>
                          <select class="form-control" v-model="warehouse_id">
                            <option value="">all</option>
                            <option v-for="warehouse in warehouses" :value="warehouse.warehouse_id">
                              {{warehouse.warehouse_name}}
                            </option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-3">
                          <label>Category</label>

                         <select class="form-control" v-model="category_id">
                            <option value="">all</option>
                            <option v-for="category in product_categories" :value="category.id">
                              {{category.slug.replace(/[^\w\s]/gi, ' ')}}
                            </option>
                          </select>
                      </div>

                      <div class="col-md-3">
                        <label>Product Id</label>
                        <select class="form-control" v-model="product_id">
                            <option value="">all</option>
                            <option v-for="product in products" :value="product.product_id">
                              {{product.detail ? product.detail[0].title : "" }}
                            </option>
                          </select>
                      </div>

                      <div class="col-md-3">
                        <label class="w-100"></label>
                        <button  style="padding:7px 20px;"
                        class="btn btn-outline-purple border_radius_5 mt-2" @click="fetchOutOfStock('')">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                          Filter
                        </button>
                      </div>
                    </div>
                    <div>
                      <div class="table-responsive" id="printableTable">
                        <div
                          id="productUnitTable_wrapper"
                          class="dataTables_wrapper no-footer"
                        >
                          <div
                            class="dataTables_length mb-3"
                            id="productUnitTable_length"
                          >
                            <label
                              >Show
                              <select
                                name="productUnitTable_length"
                                class=""
                                v-model="limit"
                                v-on:change="fetchOutOfStock()"
                              >
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="500">500</option>
                                <option value="1000">1000</option>
                              </select>
                              entries</label
                            >
                          </div>
                          <table
                            id="productUnitTable"
                            class="display dataTable no-footer order--table"
                            role="grid"
                          >
                            <thead class="text-body">
                              <tr role="row">
                                <th
                                  class="sorting"
                                  tabindex="0"
                                  rowspan="1"
                                  colspan="1"
                                  aria-sort="ascending"
                                  aria-label="ID: activate to sort column descending"
                                  style="width: 31.25px"
                                  @click="sorting('id')"
                                  :class="
                                    (this.$data.sortType == 'asc' ||
                                      this.$data.sortType == 'ASC') &&
                                    this.$data.sortBy == 'id'
                                      ? 'sorting_asc'
                                      : (this.$data.sortType == 'desc' ||
                                          this.$data.sortType == 'DESC') &&
                                        this.$data.sortBy == 'id'
                                      ? 'sorting_desc'
                                      : 'sorting'
                                  "
                                >
                                  Pid
                                </th>
                                <th
                                  class="sorting"
                                  tabindex="0"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="stock: activate to sort column ascending"
                                  style="width: 95.5288px"
                                >
                                  Product Name
                                </th>
                                <th
                                  class="sorting"
                                  tabindex="0"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="Phone No: activate to sort column ascending"
                                  style="width: 81.8109px"
                                >
                                  In Stock
                                </th>
                                <th
                                  
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="Action"
                                  style="width: 53.1891px"
                                >
                                  Out Stock
                                </th>

                                <th
                                  
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="Action"
                                  style="width: 53.1891px"
                                >
                                  Stock On Hand
                                </th>

                                
                              </tr>
                            </thead>
                            <tbody class="kt-table-tbody text-dark">
                              <tr
                                class="kt-table-row kt-table-row-level-0 odd"
                                role="row"
                                v-for="(stock, i) in stocks"
                                v-bind:key="i"
                              >
                                <td class="sorting_1">
                                  {{ stock.product_id }}
                                </td>
                                <td>
                                  {{
                                    stock.product
                                      ? stock.product.detail
                                        ? stock.product.detail[0].title
                                        : ""
                                      : ""
                                  }}
                                </td>
                                <td>
                                  {{ stock.stock_in ? stock.stock_in : 0 }}
                                </td>
                                <td>
                                  {{ stock.stock_out ? stock.stock_out : 0 }}
                                </td>
                                <td>
                                  {{ stock.remaining ? stock.remaining : 0 }}
                                </td>
                                
                              </tr>
                              <tr v-if="stocks.length == 0" class="text-center font-size-16"><td colspan="5">No Order Found</td></tr>
                            </tbody>
                          </table>
                          <ul class="pagination pagination-sm mb-0 mt-3 justify-content-end align-items-center px-2" v-if="stocks.length != 0">
                            <li v-bind:class="[{disabled: !pagination.prev_page_url}]"><button class="page-link" href="#" @click="fetchOutOfStock(pagination.prev_page_url)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous
                                </button>
                            </li>

                            <li v-for="n in pagination.last_page" :key="n"><button class="page-link text-dark" :class="{ 'active' : pagination.current_page == n  }" href="#">{{ n }}</button></li>

                            <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><button class="page-link" href="#" @click="fetchOutOfStock(pagination.next_page_url)">
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
      sortBy: "id",
      sortType: "ASC",
      limit: 10,
      error_message: "",
      pagination: {},
      stocks: [],
      warehouses: [],
      products: [],
      warehouse_id:"",
      product_id:"",
      category_id:"",
      product_categories: [],
      token: [],
      errors: new ErrorHandling(),
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },

  methods: {
    fetchOutOfStock(page_url) {
      this.$parent.loading = true;
      let vm = this;
      page_url = page_url || "/api/admin/reports/out-of-stock";
      if(Number.isInteger(page_url)){
        page_url ="/api/admin/reports/out-of-stock?page="+page_url;
      }
      var arr = page_url.split("?");

      if (arr.length > 1) {
        page_url += "&limit=" + this.limit;
      } else {
        page_url += "?limit=" + this.limit;
      }

      page_url += "&sortBy=" + this.sortBy + "&sortType=" + this.sortType;
      page_url += "&warehouse_id=" + this.warehouse_id + "&category_id=" + this.category_id+"&product_id="+this.product_id;

      var responseData = {};

      axios
        .get(page_url, this.token)
        .then((res) => {
          this.stocks = res.data.data;
          vm.makePagination(res.data.meta, res.data.links);
        })
        .finally(() => (this.$parent.loading = false));
    },

    makePagination(meta, links) {
      let pagination = {
        current_page: meta.current_page,
        last_page: meta.last_page,
        next_page_url: links.next,
        prev_page_url: links.prev,
      };

      this.pagination = pagination;
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
    fetchProductCategories(page_url) {
      this.$parent.loading = true;
      let vm = this;
      page_url = page_url || "/api/admin/category?getAllData=1";
      axios
        .get(page_url, this.token)
        .then((res) => {
          this.product_categories = res.data.data;
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
    sorting(sortBy) {
      this.sortBy = sortBy;
      this.sortType =
        this.sortType == "asc" || this.sortType == "ASC"
          ? (this.sortType = "desc")
          : (this.sortType = "asc");
      this.fetchOutOfStock("");
    },
  },
  mounted() {
    var token = localStorage.getItem("token");
    this.token = {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    };
    this.fetchOutOfStock("");
    this.fetchWarehouses();
    this.fetchProductCategories();
    this.fetchProducts();
  },
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
.offcanvas_backdrop{
      position: fixed;
      top: 0;
      right: auto;
      width: 100%;
      height: 100vh;
      background: rgba(0,0,0,0.5);
      bottom: 0;
      left: 0;  
      z-index: 99;
  }
table.dataTable.display tbody tr.odd>.sorting_1, table.dataTable.order-column.stripe tbody tr.odd>.sorting_1{
  background-color: transparent;
}
table.dataTable.display tbody tr:hover>.sorting_1, table.dataTable.order-column.hover tbody tr:hover>.sorting_1{
  background-color: transparent;
}
</style>
