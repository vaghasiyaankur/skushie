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
                        Supplier Report
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card card-custom gutter-b bg-white border-0">
                  <div class="card-body">
                    <div class="row mb-3 align-items-center">
                      <div class="col-md-3">
                        <label>Supplier</label>
                        <select class="form-control" v-model="supplier_id">
                          <option value="">all</option>
                          <option
                            v-for="supplier in suppliers"
                            :value="supplier.supplier_id"
                          >
                            {{
                              supplier.supplier_first_name +
                              " " +
                              supplier.supplier_last_name
                            }}
                          </option>
                        </select>
                      </div>

                      <div class="col-md-3">
                        <label class="w-100"></label>
                        <button
                          style="padding:7px 20px;"
                          class="btn btn-outline-purple border_radius_5 mt-2"
                          @click="fetchPurchases('')"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                          Filter
                        </button>
                      </div>
                    </div>
                    <div>
                      <div class="table-responsive" id="printableTable">
                        <div
                          id="purchase_wrapper"
                          class="dataTables_wrapper no-footer"
                        >
                          <div class="dataTables_length mb-3" id="purchase_length">
                            <label
                              >Show
                              <select
                                name="purchase_length"
                                aria-controls="purchase"
                                class=""
                                v-model="limit"
                                v-on:change="fetchPurchases()"
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
                            id="purchase"
                            class="display dataTable no-footer order--table"
                            purchase="grid"
                          >
                            <thead class="text-body">
                              <tr purchase="row">
                                <th
                                  class="sorting"
                                  tabindex="0"
                                  aria-controls="purchase"
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
                                  Purchase ID
                                </th>
                                <th
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="Action"
                                >
                                  Supplier
                                </th>
                                <th
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="Action"
                                >
                                  Purchase Date
                                </th>
                                <th
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="Action"
                                >
                                  Warehouse
                                </th>
                                <th
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="Action"
                                >
                                  Purchase Status
                                </th>
                                <th
                                  class="sorting"
                                  tabindex="0"
                                  aria-controls="purchase"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="purchase: activate to sort column ascending"
                                  style="width: 95.5288px"
                                  @click="sorting('total_amount')"
                                  :class="
                                    (this.$data.sortType == 'asc' ||
                                      this.$data.sortType == 'ASC') &&
                                    this.$data.sortBy == 'total_amount'
                                      ? 'sorting_asc'
                                      : (this.$data.sortType == 'desc' ||
                                          this.$data.sortType == 'DESC') &&
                                        this.$data.sortBy == 'total_amount'
                                      ? 'sorting_desc'
                                      : 'sorting'
                                  "
                                >
                                  Total Amount {{ getCurrencyTitle() }}
                                </th>
                                <th
                                  class="sorting"
                                  tabindex="0"
                                  aria-controls="purchase"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="purchase: activate to sort column ascending"
                                  style="width: 95.5288px"
                                  @click="sorting('amount_paid')"
                                  :class="
                                    (this.$data.sortType == 'asc' ||
                                      this.$data.sortType == 'ASC') &&
                                    this.$data.sortBy == 'amount_paid'
                                      ? 'sorting_asc'
                                      : (this.$data.sortType == 'desc' ||
                                          this.$data.sortType == 'DESC') &&
                                        this.$data.sortBy == 'amount_paid'
                                      ? 'sorting_desc'
                                      : 'sorting'
                                  "
                                >
                                  Paid Amount {{ getCurrencyTitle() }}
                                </th>
                                <th
                                  class="sorting"
                                  tabindex="0"
                                  aria-controls="purchase"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="purchase: activate to sort column ascending"
                                  style="width: 95.5288px"
                                  @click="sorting('discount_amount')"
                                  :class="
                                    (this.$data.sortType == 'asc' ||
                                      this.$data.sortType == 'ASC') &&
                                    this.$data.sortBy == 'discount_amount'
                                      ? 'sorting_asc'
                                      : (this.$data.sortType == 'desc' ||
                                          this.$data.sortType == 'DESC') &&
                                        this.$data.sortBy == 'discount_amount'
                                      ? 'sorting_desc'
                                      : 'sorting'
                                  "
                                >
                                  Discount {{ getCurrencyTitle() }}
                                </th>
                                <th
                                  class="sorting"
                                  tabindex="0"
                                  aria-controls="purchase"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="purchase: activate to sort column ascending"
                                  style="width: 95.5288px"
                                  @click="sorting('amount_due')"
                                  :class="
                                    (this.$data.sortType == 'asc' ||
                                      this.$data.sortType == 'ASC') &&
                                    this.$data.sortBy == 'amount_due'
                                      ? 'sorting_asc'
                                      : (this.$data.sortType == 'desc' ||
                                          this.$data.sortType == 'DESC') &&
                                        this.$data.sortBy == 'amount_due'
                                      ? 'sorting_desc'
                                      : 'sorting'
                                  "
                                >
                                  Due Amount {{ getCurrencyTitle() }}
                                </th>

                                <th
                                  class="no-sort sorting_disabled"
                                  tabindex="0"
                                  aria-controls="purchase"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="purchase: activate to sort column ascending"
                                  style="width: 95.5288px"
                                  @click="sorting('amount_due')"
                                  :class="
                                    (this.$data.sortType == 'asc' ||
                                      this.$data.sortType == 'ASC') &&
                                    this.$data.sortBy == 'amount_due'
                                      ? 'sorting_asc'
                                      : (this.$data.sortType == 'desc' ||
                                          this.$data.sortType == 'DESC') &&
                                        this.$data.sortBy == 'amount_due'
                                      ? 'sorting_desc'
                                      : 'sorting'
                                  "
                                >
                                  View
                                </th>
                              </tr>
                            </thead>
                            <tbody class="kt-table-tbody text-dark">
                              <tr
                                class="kt-table-row kt-table-row-level-0 odd"
                                purchase="row"
                                v-for="purchase in purchases"
                                v-bind:key="purchase.id"
                              >
                                <td class="sorting_1">
                                  <router-link
                                    :to="
                                      '/admin/purchase-detail/' +
                                      purchase.purchase_id
                                    "
                                  >
                                    {{ purchase.purchase_id }}
                                  </router-link>
                                </td>
                                <td>
                                  {{
                                    purchase.supplier != null
                                      ? purchase.supplier.supplier_first_name +
                                        " " +
                                        purchase.supplier.supplier_last_name
                                      : ""
                                  }}
                                </td>
                                <td>
                                  {{ purchase.purchase_date }}
                                </td>
                                <td>
                                  {{
                                    purchase.warehouse != null
                                      ? purchase.warehouse.warehouse_name
                                      : ""
                                  }}
                                </td>
                                <td>
                                  {{ purchase.purchase_status }}
                                </td>
                                <td>
                                  {{ purchase.total_amount }}
                                </td>
                                <td>
                                  {{ purchase.amount_paid }}
                                </td>
                                <td>
                                  {{ purchase.discount_amount }}
                                </td>
                                <td>
                                  {{ purchase.amount_due }}
                                </td>
                                <router-link
                                  :to="
                                    '/admin/purchase-detail/' +
                                    purchase.purchase_id
                                  "
                                >
                                  View
                                </router-link>
                              </tr>
                              <tr v-if="purchases.length == 0" class="text-center font-size-16"><td colspan="10">No Order Found</td></tr>
                            </tbody>
                          </table>
                          <ul class="pagination pagination-sm mb-0 mt-3 justify-content-end align-items-center px-2" v-if="purchases.length != 0">
                            <li v-bind:class="[{disabled: !pagination.prev_page_url}]"><button class="page-link" href="#" @click="fetchPurchases(pagination.prev_page_url)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous
                                </button>
                            </li>

                            <li v-for="n in pagination.last_page" :key="n"><button class="page-link text-dark" :class="{ 'active' : pagination.current_page == n  }" href="#">{{ n }}</button></li>

                            <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><button class="page-link" href="#" @click="fetchPurchases(pagination.next_page_url)">
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
    <div class="offcanvas_backdrop" v-if="display_form">
      <div
        class="offcanvas offcanvas-right kt-color-panel p-5 kt_notes_panel"
        v-if="display_form"
        :class="display_form ? 'offcanvas-on' : ''"
      >
        <div
          class="
            offcanvas-header
            d-flex
            align-items-center
            justify-content-between
            pb-3
          "
        >
          <h4 class="font-size-h4 font-weight-bold m-0">Add purchase</h4>
          <a
            href="#"
            class="
              btn btn-sm btn-icon btn-light btn-hover-primary
              kt_notes_panel_close
            "
            v-on:click="display_form = 0"
          >
            <svg
              width="20px"
              height="20px"
              viewBox="0 0 16 16"
              class="bi bi-x"
              fill="currentColor"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
              ></path>
            </svg>
          </a>
        </div>
        <form id="myform">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="text-dark">Name </label>
                <input
                  type="text"
                  name="text"
                  v-model="purchase.name"
                  class="form-control"
                />
                <small
                  class="form-text text-danger"
                  v-if="errors.has('name')"
                  v-text="errors.get('name')"
                ></small>
              </div>
              <div class="form-group">
                <label class="text-dark">Direction </label>
                <select v-model="purchase.direction">
                  <option value="ltr">LTR</option>
                  <option value="rtl">RTL</option>
                </select>
                <small
                  class="form-text text-danger"
                  v-if="errors.has('direction')"
                  v-text="errors.get('direction')"
                ></small>
              </div>
              <div class="form-group">
                <label class="text-dark">Code </label>
                <input
                  type="text"
                  name="text"
                  v-model="purchase.code"
                  class="form-control"
                />
                <small
                  class="form-text text-danger"
                  v-if="errors.has('code')"
                  v-text="errors.get('code')"
                ></small>
              </div>
              <div class="form-group">
                <label class="text-dark">Directory </label>
                <input
                  type="text"
                  name="text"
                  v-model="purchase.directory"
                  class="form-control"
                />
                <small
                  class="form-text text-danger"
                  v-if="errors.has('directory')"
                  v-text="errors.get('directory')"
                ></small>
              </div>
              <div class="form-group">
                <input
                  type="checkbox"
                  name="text"
                  v-model="purchase.is_default"
                  id="is_default"
                  class="form-check-input"
                />
                <label class="text-dark" for="is_default">Set as default </label>
                <small
                  class="form-text text-danger"
                  v-if="errors.has('is_default')"
                  v-text="errors.get('is_default')"
                ></small>
              </div>
            </div>
          </div>
          <button
            type="button"
            @click="addUpdatepurchase()"
            class="btn btn-primary"
          >
            Submit
          </button>
        </form>
      </div>
    </div>      
  </div>
</template>

<script>
import ErrorHandling from "./../../ErrorHandling";
export default {
  data() {
    return {
      display_form: 0,
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
      currency: [],
      suppliers:[],
      supplier_id:"",
      errors: new ErrorHandling(),
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },

  methods: {
    fetchCurrency() {
      this.$parent.loading = true;
      var token = localStorage.getItem("token");
      const config = {
        headers: {
          Authorization: `Bearer ${token}`,
        },
      };
      var responseData = {};

      axios
        .get("/api/admin/currency?is_default=1", config)
        .then((res) => {
          if (res.data.status == "Success") {
            this.currency = res.data.data;
          }
        })
        .finally(() => (this.$parent.loading = false));
    },
    fetchPurchases(page_url) {
      this.$parent.loading = true;
      let vm = this;
      page_url = page_url || "/api/admin/purchase";
      if(Number.isInteger(page_url)){
        page_url ="/api/admin/purchase?page="+page_url;
      }
      var arr = page_url.split("?");

      if (arr.length > 1) {
        page_url += "&limit=" + this.limit;
      } else {
        page_url += "?limit=" + this.limit;
      }
      if (this.searchParameter != null) {
        page_url += "&searchParameter=" + this.searchParameter;
      }
      page_url += "&sortBy=" + this.sortBy + "&sortType=" + this.sortType;
      page_url +=
        "&getSupplier=1&getPurchaseDetail=1&getProductDetail=1&getProductCombinationDetail=1&getWarehouse=1";
      page_url += "&supplier_id=" + this.supplier_id;


      var responseData = {};

      axios
        .get(page_url, this.token)
        .then((res) => {
          this.purchases = res.data.data;
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
    sorting(sortBy) {
      this.sortBy = sortBy;
      this.sortType =
        this.sortType == "asc" || this.sortType == "ASC"
          ? (this.sortType = "desc")
          : (this.sortType = "asc");
      this.fetchPurchases();
    },
    getCurrencyTitle() {
      return this.currency == null ? "" : "(" + this.currency.title + ")";
    },
    fetchSuppliers(page_url) {
      this.$parent.loading = true;
      var page_url =  "/api/admin/supplier?getAllData=1";
      axios
        .get(page_url, this.token)
        .then((res) => {
          this.suppliers = res.data.data;
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
    this.fetchCurrency();
    this.fetchPurchases();
    this.fetchSuppliers();
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
