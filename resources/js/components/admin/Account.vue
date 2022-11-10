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
                        Account 
                      </h3>
                    </div>
                    <div class="icons d-flex">
                      <button
                        class="btn ml-2 p-0 kt_notes_panel_toggle btn-outline-black"
                        data-toggle="tooltip"
                        title=""
                        data-placement="right"
                        data-original-title="Check out more demos"
                        v-if="$parent.permissions.includes('account-manage')"
                      >
                        <span
                          class="
                          h-30px font-size-h5 bg-white w-30px d-flex align-items-center justify-content-center shadow-sm 
                          "
                          v-on:click="display_form = !display_form"
                        >
                          <svg
                            width="25px"
                            height="25px"
                            viewBox="0 0 16 16"
                            class="bi bi-plus "
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"
                            ></path>
                          </svg>
                        </span>
                      </button>
                      <!-- <a href="#" onclick="printDiv()" class="ml-2">
                                            <span class="icon h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
                                                <svg width="15px" height="15px" viewBox="0 0 16 16" class="bi bi-printer-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5z"></path>
                                                    <path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"></path>
                                                    <path fill-rule="evenodd" d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="#" class="ml-2">
                                            <span class="icon h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
                                                <svg width="15px" height="15px" viewBox="0 0 16 16" class="bi bi-file-earmark-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 2l.5-2.5 3 3L10 5a1 1 0 0 1-1-1zM4.5 8a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"></path>
                                                </svg>
                                            </span>
                                        </a> -->
                    </div>
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
                          id="productaccountTable_wrapper"
                          class="dataTables_wrapper no-footer"
                        >
                          <div
                            class="dataTables_length mb-3"
                            id="productaccountTable_length"
                          >
                            <label
                              >Show
                              <select
                                name="productaccountTable_length"
        
                                class=""
                                v-model="limit"
                                v-on:change="fetchaccounts()"
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

                          <div
                            id="productaccountTable_filter"
                            class="dataTables_filter mb-3"
                          >
                            <label
                              >Search:<input
                                type="text"
                                class=""
                                placeholder=""
                                v-model="searchParameter"
                                @keyup="fetchaccounts()"
                            /></label>
                            <button
                              v-if="this.searchParameter != ''"
                              @click="clearSearch"
                            >
                              clear
                            </button>
                          </div>
                          <table
                            id="productaccountTable"
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
                                  ID
                                </th>
                                <th
                                  class="sorting"
                                  tabindex="0"
            
                                  rowspan="1"
                                  colspan="1"
                                  aria-label="account: activate to sort column ascending"
                                  @click="sorting('name')"
                                  :class="
                                    (this.$data.sortType == 'asc' ||
                                      this.$data.sortType == 'ASC') &&
                                    this.$data.sortBy == 'name'
                                      ? 'sorting_asc'
                                      : (this.$data.sortType == 'desc' ||
                                          this.$data.sortType == 'DESC') &&
                                        this.$data.sortBy == 'name'
                                      ? 'sorting_desc'
                                      : 'sorting'
                                  "
                                >
                                  Name
                                </th>
                                <th
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                >
                                  Code
                                </th>
                                <th
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                >
                                  Account Type
                                </th>
                                <th
                                  class="no-sort sorting_disabled"
                                  rowspan="1"
                                  colspan="1"
                                >
                                  Status
                                </th>
                                <!-- <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" >
                                                                Action
                                                            </th> -->
                              </tr>
                            </thead>
                            <tbody class="kt-table-tbody text-dark">
                              <tr
                                class="kt-table-row kt-table-row-level-0 odd"
                                role="row"
                                v-for="account in accounts"
                                v-bind:key="account.account_id"
                              >
                                <td class="sorting_1">
                                  {{ account.id }}
                                </td>
                                <td>
                                  {{ account.name }}
                                </td>
                                <td>{{ account.code }}</td>
                                <td>
                                  {{ account.account_type }}
                                </td>
                                <td>
                                  {{ account.status ? "Active" : "inActive" }}
                                </td>
                                <!-- <td v-if="account.id > 36">
                                                            <a href="javascript:void(0)" class="dropdown-item click-edit" id="click-edit1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos" @click="editaccount(account)"><i class="fa fa-edit"></i></a>
                                                                        <a class="dropdown-item" href="#" @click="deleteaccount(account.id)"><i class="fa fa-trash"></i></a>
                                                            </td> -->
                              </tr>
                              <tr v-if="accounts.length == 0" class="text-center font-size-16"><td colspan="5">No Order Found</td></tr>
                            </tbody>
                          </table>
                          <ul class="pagination pagination-sm mb-0 mt-3 justify-content-end align-items-center px-2" v-if="accounts.length != 0">
                            <li v-bind:class="[{disabled: !pagination.prev_page_url}]"><button class="page-link" href="#" @click="fetchaccounts(pagination.prev_page_url)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous
                                </button>
                            </li>

                            <li v-for="n in pagination.last_page" :key="n"><button class="page-link text-dark" :class="{ 'active' : pagination.current_page == n  }" href="#">{{ n }}</button></li>

                            <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><button class="page-link" href="#" @click="fetchaccounts(pagination.next_page_url)">
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
          <h4 class="font-size-h4 font-weight-bold m-0">Add account</h4>
          <a
            href="#"
            class="
              btn btn-sm btn-icon btn-light btn-hover-primary
              kt_notes_panel_close
            "
            v-on:click="clearForm()"
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
                  name="name"
                  v-model="account.name"
                  class="form-control"
                />
                <small
                  class="form-text text-danger"
                  v-if="errors.has('name')"
                  v-text="errors.get('name')"
                ></small>
              </div>
              <div class="form-group">
                <label>Account Type</label>
                <fieldset class="form-group mb-3">
                  <select
                    class="
                      js-example-basic-single js-states
                      form-control
                      bg-transparent
                    "
                    v-model="account.parent"
                    @change="appendChild($event, 'select')"
                  >
                    <option value="" disabled selected v-bind:key="0">
                      Select account
                    </option>
                    <option
                      v-for="parent in account_dropdowns"
                      :value="parent.id"
                      v-bind:selected="account.parent == parent.id"
                      v-bind:key="parent.id"
                      v-if="parent.parent_id == 0"
                    >
                      {{ parent.name }}
                    </option>
                  </select>
                </fieldset>
              </div>
              <div
                class="form-group child"
                v-for="(child, index) in childToAppend"
              >
                <select
                  class="
                    js-example-basic-single js-states
                    form-control
                    bg-transparent
                  "
                  @change="appendChild($event, 'select' + index)"
                >
                  <option value="" disabled selected v-bind:key="0">
                    Select account
                  </option>
                  <option
                    v-for="childern in child.data"
                    :value="childern.id"
                    v-bind:key="childern.id"
                  >
                    {{ childern.name }}
                  </option>
                </select>
              </div>
            </div>
          </div>
          <button
            type="button"
            @click="addUpdateaccount()"
            class="btn btn-primary w-100"
          >
            Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import ErrorHandling from "../../ErrorHandling";
export default {
  data() {
    return {
      display_form: 0,
      account: {
        id: "",
        name: "",
        parent: "",
      },
      searchParameter: "",
      sortBy: "id",
      sortType: "ASC",
      limit: 10,
      error_message: "",
      edit: false,
      pagination: {},
      request_method: "",
      accounts: [],
      account_dropdowns: [],
      token: [],
      childToAppend: [],
      selected_account_id: "",
      errors: new ErrorHandling(),
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },

  methods: {
    accountdropdowns(page_url) {
      this.$parent.loading = true;
      page_url = page_url || "/api/admin/account";

      axios
        .get(page_url, this.token)
        .then((res) => {
          this.account_dropdowns = res.data.data;
        })
        .finally(() => (this.$parent.loading = false));
    },
    fetchaccounts(page_url) {
      this.$parent.loading = true;
      let vm = this;
      page_url = page_url || "/api/admin/account";
      if(Number.isInteger(page_url)){
        page_url ="/api/admin/account?page="+page_url;
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
      page_url +=
        "&sortBy=" +
        this.sortBy +
        "&sortType=" +
        this.sortType +
        "&getDetail=1";
      var responseData = {};

      axios
        .get(page_url, this.token)
        .then((res) => {
          this.accounts = res.data.data;
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

    deleteaccount(id) {
      if (confirm("Are You Sure?")) {
        this.$parent.loading = true;
        axios
          .delete(`/api/admin/account/${id}`, this.token)
          .then((res) => {
            if (res.data.status == "Success") {
              this.$toaster.success("Settings has been updated successfully");
              this.fetchaccounts();
            }
          })
          .catch((err) => console.log(err))
          .finally(() => (this.$parent.loading = false));
      }
    },

    addUpdateaccount() {
      this.$parent.loading = true;
      var url = "/api/admin/account";
      if (this.edit === false) {
        // Add
        this.request_method = "post";
      } else {
        // Update
        var url = "/api/admin/account/" + this.account.id;
        this.request_method = "put";
      }

      axios[this.request_method](
        url,
        {
          name: this.account.name,
          account_id: this.selected_account_id,
        },
        this.token
      )
        .then((res) => {
          if (res.data.status == "Success") {
            this.display_form = 0;
            this.$toaster.success("Settings has been updated successfully");
            this.clearForm();
            this.fetchaccounts();
          } else {
            this.$toaster.error(res.data.message);
          }
        })
        .catch((error) => {
          this.error_message = "";
          this.errors = new ErrorHandling();
          if ((error.response.status = 422)) {
            if (error.response.data.status == "Error") {
              this.error_message = error.response.data.message;
            } else {
              this.errors.record(error.response.data.errors);
            }
          }
        })
        .finally(() => (this.$parent.loading = false));
    },
    editaccount(account) {
      this.edit = true;
      this.display_form = 1;
      this.errors = new ErrorHandling();
      this.account.id = account.id;
      this.account.name = account.name;
      this.appendChild(account.parent_id, "select");
    },
    clearForm() {
      this.display_form = 0;
      this.edit = false;
      this.account.id = null;
      this.account.name = [];
      this.account.is_active = "inactive";
      this.account.gallary_id = "";
      this.gallary_path = "";
      this.account.icon = "";
      this.icon_path = "";
      this.childToAppend = [];
    },

    sorting(sortBy) {
      this.sortBy = sortBy;
      this.sortType =
        this.sortType == "asc" || this.sortType == "ASC"
          ? (this.sortType = "desc")
          : (this.sortType = "asc");
      this.fetchaccounts();
    },
    appendChild(e, select) {
      this.findChild(e.target.value, select);
    },
    findChild(parent, select) {
      for (var i = 0; i < this.childToAppend.length; i++) {
        if (this.childToAppend[i].select == select) {
          this.childToAppend.splice(i);
        }
      }

      axios
        .get("/api/admin/account?parent_id=" + parent, this.token)
        .then((res) => {
          this.selected_account_id = parent;
          if (res.data.data.length > 0) {
            var data = res.data.data;
            this.childToAppend.push({ data, select });
          }
        });
    },
     clearSearch(){
      this.searchParameter = "",
      this.fetchaccounts();
    }
  },
  mounted() {
    var token = localStorage.getItem("token");
    this.token = {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    };
    this.fetchaccounts();
    this.accountdropdowns();
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
      position: absolute;
      top: -139px;
      right: auto;
      width: 100%;
      height: 100vh;
      background: rgba(0,0,0,0.5);
      bottom: 0;
      left: -300px;  
      z-index: 99;
  }
  table.dataTable.display tbody tr.odd>.sorting_1, table.dataTable.order-column.stripe tbody tr.odd>.sorting_1{
    background-color: transparent;
  }
  table.dataTable.display tbody tr:hover>.sorting_1, table.dataTable.order-column.hover tbody tr:hover>.sorting_1{
    background-color: transparent;
  }
</style>
