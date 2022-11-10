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
                        Expense Report
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
                                v-on:change="expenseReports()"
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
                            <!-- <label>Search:<input type="search" class="" placeholder="" aria-controls="sale" v-model="searchParameter" @keyup="expenseReports()"></label> -->
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
                                  Detail
                                </th>
                                <th
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="Action"
                                  style="width: 53.1891px"
                                >
                                  Expense Amount
                                </th>
                              </tr>
                            </thead>
                            <tbody class="kt-table-tbody text-dark">
                              <tr
                                class="kt-table-row kt-table-row-level-0 odd"
                                sale="row"
                                v-for="(expense, i) in expenses"
                                v-bind:key="i"
                              >
                                <td>
                                  {{ expense.description }}
                                </td>
                                <td>
                                  {{ expense.amount }}
                                </td>
                                <input
                                  type="hidden"
                                  :set="
                                    (totel_amount =
                                      parseFloat(totel_amount) +
                                      parseFloat(expense.amount))
                                  "
                                />
                              </tr>
                              <tr>
                                <td>Totel Expense</td>
                                <td>
                                  {{
                                    expenses.reduce(function (total, item) {
                                      return total + parseFloat(item.amount);
                                    }, 0)
                                  }}
                                </td>
                              </tr>
                              <tr v-if="expenses.length == 0" class="text-center font-size-16"><td colspan="6">No Order Found</td></tr>
                            </tbody>
                          </table>
                          <ul class="pagination pagination-sm mb-0 mt-3 justify-content-end align-items-center px-2" v-if="expenses.length != 0">
                            <li v-bind:class="[{disabled: !pagination.prev_page_url}]"><button class="page-link" href="#" @click="expenseReports(pagination.prev_page_url)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous
                                </button>
                            </li>

                            <li v-for="n in pagination.last_page" :key="n"><button class="page-link text-dark" :class="{ 'active' : pagination.current_page == n  }" href="#">{{ n }}</button></li>

                            <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><button class="page-link" href="#" @click="expenseReports(pagination.next_page_url)">
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
      expenses: [],
      totel_amount: 0,
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

      errors: new ErrorHandling(),
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },

  methods: {
    expenseReports(page_url) {
      this.$parent.loading = true;
      let vm = this;
      page_url = page_url || "/api/admin/reports/expense-report";
      if(Number.isInteger(page_url)){
        page_url ="/api/admin/reports/expense-report?page="+page_url;
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
          this.expenses = res.data.data;
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
  },
  mounted() {
    var token = localStorage.getItem("token");
    this.token = {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    };
    this.expenseReports();
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
