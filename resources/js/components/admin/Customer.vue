<template>
<div>
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <div class="card card-custom gutter-b bg-transparent shadow-none border-0">
                                <div class="card-header align-items-center  border-bottom-dark px-0">
                                    <div class="card-title mb-0">
                                        <h3 class="card-label mb-0 font-weight-bold text-body">
                                            Customer
                                        </h3>
                                    </div>
                                    <div class="icons d-flex">
                                        <button class="btn ml-2 p-0 kt_notes_panel_toggle btn-outline-black" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos" v-if="$parent.permissions.includes('customer-manage')">
                                            <span class="h-30px font-size-h5 bg-white w-30px d-flex align-items-center justify-content-center shadow-sm" v-on:click="
                                                        display_form = !display_form
                                                    ">
                                                <svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-plus " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <div class="card card-custom gutter-b bg-white border-0">
                                <div class="card-body">
                                    <div>
                                        <div class=" table-responsive" id="printableTable">
                                            <div id="productUnitTable_wrapper" class="dataTables_wrapper no-footer">

                                                <div class="dataTables_length mb-3" id="productUnitTable_length"><label>Show
                                                        <select name="productUnitTable_length"  class="" v-model="limit" v-on:change="fetchcustomers()">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                            <option value="200">200</option>
                                                            <option value="500">500</option>
                                                            <option value="1000">1000</option>
                                                        </select> entries</label></div>

                                                <div id="productUnitTable_filter" class="dataTables_filter mb-3">
                                                <label>Search:<input type="text" class="" placeholder=""  v-model="searchParameter" @keyup="fetchcustomers()"></label>
                                                <button v-if="this.searchParameter != ''" @click="clearSearch">clear</button>
                                                </div>
                                                <table id="productUnitTable" class="display dataTable no-footer order--table" role="grid">
                                                    <thead class="text-body">
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 31.25px;" @click="sorting('id')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'id'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'id' ? 'sorting_desc' : 'sorting'">
                                                                ID
                                                            </th>
                                                            <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="First Name: activate to sort column ascending" style="width: 95.5288px;" @click="sorting('first_name')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'first_name'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'first_name' ? 'sorting_desc' : 'sorting'">
                                                                First Name
                                                            </th>
                                                            <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending" style="width: 81.8109px;" @click="sorting('last_name')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'last_name'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'last_name' ? 'sorting_desc' : 'sorting'">
                                                                Last Name
                                                            </th>
                                                            <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 114.84px;">
                                                                Status
                                                            </th>
                                                            <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Is Seen: activate to sort column ascending" style="width: 158.462px;">
                                                                Is Seen
                                                            </th>
                                                            <th  v-if="$parent.permissions.includes('customer-manage')" class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 53.1891px;">
                                                                Action
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="kt-table-tbody text-dark">
                                                        <tr class="kt-table-row kt-table-row-level-0 odd" role="row" v-for="customer in customers" v-bind:key="customer.id">
                                                            <td class="sorting_1">
                                                                {{customer.customer_id}}
                                                            </td>
                                                            <td>
                                                                {{ customer.customer_first_name }}
                                                            </td>
                                                            <td>
                                                                {{ customer.customer_last_name }}
                                                            </td>
                                                            <td>
                                                                <span :class="customer.customer_status == '1' ? 'active-status' : 'deactive-status'">
                                                                    <span class="badge" :class="customer.customer_status == '1' ? 'badge-light-success' : 'badge-light-danger'" >
                                                                        {{ customer.customer_status == '1' ? 'Active' : 'InActive' }}
                                                                      </span>
                                                                </span>
                                                                <!-- {{ customer.customer_status == '1' ? 'Active' : 'Inactive' }} -->
                                                            </td>
                                                            <td>
                                                                {{ customer.is_seen == '0' ? 'unseen' : 'seen' }}
                                                            </td>
                                                            <td  v-if="$parent.permissions.includes('customer-manage')" class="white__nowrap">
                                                                <a href="javascript:void(0)" class=" click-edit btn btn-outline-primary text-nowrap  waves-effect p-2 mr-3" id="click-edit1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos" @click="editcustomer(customer)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                                    <span class="pl-2">Edit</span>
                                                                </a>
                                                                <a class="btn btn-outline-danger text-nowrap  waves-effect p-2" href="#" @click="deletecustomer(customer.customer_id)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                                    <span>Delete</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr v-if="customers.length == 0" class="text-center font-size-16"><td colspan="6">No Order Found</td></tr>
                                                    </tbody>
                                                </table>
                                                <ul class="pagination pagination-sm mb-0 mt-3 justify-content-end align-items-center px-2" v-if="customers.length != 0">
                                                    <li v-bind:class="[{disabled: !pagination.prev_page_url}]"><button class="page-link" href="#" @click="fetchcustomers(pagination.prev_page_url)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous
                                                        </button>
                                                    </li>

                                                    <li v-for="n in pagination.last_page" :key="n"><button class="page-link text-dark" :class="{ 'active' : pagination.current_page == n  }" href="#">{{ n }}</button></li>

                                                    <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><button class="page-link" href="#" @click="fetchcustomers(pagination.next_page_url)">
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
    <div class="offcanvas_backdrop" v-if="display_form == 1">
        <div class="offcanvas offcanvas-right kt-color-panel p-5 kt_notes_panel" v-if="display_form == 1" :class="display_form ? 'offcanvas-on' : ''">
            <div class="offcanvas-header d-flex align-items-center justify-content-between pb-3">
                <h4 class="font-size-h4 font-weight-bold m-0">{{ edit ? "Edit" :"Add" }} customer</h4>
                <a href="#" class="btn btn-sm btn-icon btn-light btn-hover-primary kt_notes_panel_close" v-on:click="clearForm()">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </a>
            </div>
            <form id="myform">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="text-dark">First Name </label>
                            <input type="text" name="text" v-model="customerData.customer_first_name" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('first_name')" v-text="errors.get('name')"></small>
                        </div>

                        <div class="form-group">
                            <label class="text-dark">Last Name </label>
                            <input type="text" name="text" v-model="customerData.customer_last_name" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('last_name')" v-text="errors.get('last_name')"></small>
                        </div>

                        <div class="form-group">
                            <label class="text-dark">Email </label>
                            <input type="email" name="text" v-model="customerData.customer_email" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('email')" v-text="errors.get('email')"></small>
                        </div>

                        <div class="form-group">
                            <label class="text-dark">Password </label>
                            <input type="text" name="text" v-model="customerData.password" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('password')" v-text="errors.get('password')"></small>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="js-example-basic-single js-states form-control bg-transparent" v-model='customerData.customer_status'>
                                <option v-bind:selected="customerData.customer_status == 1" value="1">Active</option>
                                <option v-bind:selected="customerData.customer_status == 0" value="0">In Active</option>
                            </select>
                            <small class="form-text text-danger" v-if="errors.has('state_id')" v-text="errors.get('status')"></small>
                        </div>

                    </div>
                </div>
                <button type="button" @click="addcustomer()" class="btn btn-primary w-100">Submit</button>
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
            customerData: {
                customer_id: "",
                customer_first_name: "",
                customer_last_name: "",
                customer_email: "",
                customer_hash: "",
                customer_avatar: "",
                is_seen: "",
                customer_status: "",
                password: ""
            },
            countries: [],
            states: [],
            error_message: '',
            edit: false,
            pagination: {},
            request_method: "",
            customers: [],
            token: [],
            searchParameter: '',
            sortBy: 'id',
            sortType: 'ASC',
            limit: 10,
            actions: false,
            errors: new ErrorHandling(),
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        };
    },

    methods: {


        fetchcustomers(page_url) {
            this.$parent.loading = true;
            let vm = this;
            page_url = page_url || "/api/admin/customer";
            if(Number.isInteger(page_url)){
                page_url ="/api/admin/customer?page="+page_url;
            }
            var arr = page_url.split('?');

            if (arr.length > 1) {
                page_url += '&limit=' + this.limit;
            } else {
                page_url += '?limit=' + this.limit;
            }
            if (this.searchParameter != null) {
                page_url += '&searchParameter=' + this.searchParameter;
            }
            page_url += '&sortBy=' + this.sortBy + '&sortType=' + this.sortType + '&getCountry=1&getState=1';
            var responseData = {};

            axios.get(page_url, this.token).then(res => {
                this.customers = res.data.data;
                vm.makePagination(res.data.meta, res.data.links);
            }).finally(() => (this.$parent.loading = false));
        },

        makePagination(meta, links) {
            let pagination = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page_url: links.next,
                prev_page_url: links.prev
            };

            this.pagination = pagination;
        },
        deletecustomer(id) {
            if (confirm('Are You Sure?')) {
                this.$parent.loading = true;
                axios.delete(`/api/admin/customer/${id}`, this.token)
                    .then(res => {
                        if (res.data.status == "Success") {
                            this.$toaster.success(res.data.message)
                            this.fetchcustomers();
                        }

                    })
                    .catch(err => console.log(err))
                    .finally(() => (this.$parent.loading = false));
            }
        },
        addcustomer() {
            this.$parent.loading = true;
            var url = '/api/admin/customer';
            if (this.edit === false) {
                // Add
                this.request_method = 'post'
            } else {
                // Update
                var url = '/api/admin/customer/' + this.customerData.customer_id;
                this.request_method = 'put'
            }
            axios[this.request_method](url, {
                        'first_name': this.customerData.customer_first_name,
                        'gallary_id': 1,
                        'last_name': this.customerData.customer_last_name,
                        'email': this.customerData.customer_email,
                        'status': this.customerData.customer_status,
                        'password': this.customerData.password
                    },
                    this.token)
                .then(res => {
                    if (res.data.status == "Success") {
                        this.display_form = 0;
                        this.$toaster.success(res.data.message)
                        this.fetchcustomers();
                        this.clearForm();

                    } else {
                        this.$toaster.error(res.data.message)
                    }
                })
                .catch(error => {
                    this.error_message = '';
                    this.errors = new ErrorHandling();
                    if (error.response.status == 422) {
                        if (error.response.data.status == 'Error') {
                            this.error_message = error.response.data.message;
                        } else {
                            this.errors.record(error.response.data.errors);
                        }
                    }
                }).finally(() => (this.$parent.loading = false));

        },
        editcustomer(customer) {
            this.edit = true;
            this.display_form = 1;
            this.errors = new ErrorHandling();
            this.customerData.customer_id = customer.customer_id
            this.customerData.customer_first_name = customer.customer_first_name
            this.customerData.customer_last_name = customer.customer_last_name
            this.customerData.customer_email = customer.customer_email
            this.customerData.customer_hash = customer.customer_hash
            this.customerData.customer_avatar = customer.customer_avatar
            this.customerData.is_seen = customer.is_seen
            this.customerData.customer_status = customer.customer_status
            
        },
        clearForm() {
            this.edit = false;
            this.display_form = 0;
            this.customerData = {
                customer_id :"",
                customer_first_name :"",
                customer_last_name :"",
                customer_email :"",
                customer_hash :"",
                customer_avatar :"",
                is_seen :"",
                customer_status :"",
                password :""
            }
        },
        sorting(sortBy) {
            this.sortBy = sortBy;
            this.sortType = this.sortType == 'asc' || this.sortType == 'ASC' ? this.sortType = 'desc' : this.sortType = 'asc';
            this.fetchcustomers();
        },
        clearSearch(){
            this.searchParameter = "",
            this.fetchcustomers();
        }
    },
    mounted() {
        console.log(this.$route.name);
        var token = localStorage.getItem('token');
        this.token = {
            headers: {
                Authorization: `Bearer ${token}`
            }
        };
        this.fetchcustomers();
    }
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
.active-status .badge, .deactive-status .badge {
    padding: 0.3rem 0.5rem;
    text-align: center;
    border-radius: 0.358rem;
    font-size: 13px !important;
    font-weight: 600;
    line-height: 1;
    white-space: nowrap;
    vertical-align: baseline;
    display: inline-block;
}
.active-status .badge.badge-light-success {
    background-color: rgba(40,199,111,.12);
    color: #28c76f!important;
}
.deactive-status .badge.badge-light-danger{
    background-color: rgba(234, 84, 85, 0.12);
    color: #ea5455 !important;
}
</style>
