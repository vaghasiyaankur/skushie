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
                                            Users
                                        </h3>
                                    </div>
                                    <div class="icons d-flex">
                                        <button class="btn ml-2 p-0 kt_notes_panel_toggle btn-outline-black" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos" v-if="$parent.permissions.includes('user-manage')">
                                            <span class="h-30px font-size-h5 bg-white w-30px d-flex align-items-center justify-content-center shadow-sm" v-on:click="
                                                        display_form = !display_form
                                                    ">
                                                <svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
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
                        <div class="col-12 ">
                            <div class="card card-custom gutter-b bg-white border-0">
                                <div class="card-body">
                                    <div>
                                        <div class=" table-responsive" id="printableTable">
                                        
                                            <div id="UserTable_wrapper" class="dataTables_wrapper no-footer order--table">

                                            <div class="dataTables_length mb-3" id="UserTable_length"><label>Show 
                                            <select name="UserTable_length"  class="" v-model="limit" v-on:change="fetchUsers()">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="500">500</option>
                                            <option value="1000">1000</option>
                                            </select> entries</label></div>

                                            <div id="UserTable_filter" class="dataTables_filter mb-3">
                                                <label>Search:<input type="text" class="" placeholder=""  v-model="searchParameter" @keyup="fetchUsers()"></label>
                                                <button v-if="this.searchParameter != ''" @click="clearSearch">clear</button>
                                            </div>
                                                <table id="UserTable" class="display dataTable no-footer" role="grid">
                                                    <thead class="text-body">
                                                        <tr role="row">
                                                            <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 31.25px;" @click="sorting('id')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'id'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'id' ? 'sorting_desc' : 'sorting'">
                                                                ID
                                                            </th>
                                                            <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="user: activate to sort column ascending" style="width: 95.5288px;" @click="sorting('name')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'name'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'name' ? 'sorting_desc' : 'sorting'">
                                                                Name
                                                            </th>
                                                            <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Phone No: activate to sort column ascending" style="width: 81.8109px;" @click="sorting('email')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'email'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'email' ? 'sorting_desc' : 'sorting'">
                                                                Email
                                                            </th>
                                                            <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 114.84px;">
                                                                Role
                                                            </th>
                                                            <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 158.462px;">
                                                                Status
                                                            </th>
                                                            <th v-if="$parent.permissions.includes('user-manage')" class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 53.1891px;">
                                                                Action
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="kt-table-tbody text-dark">
                                                        <tr class="kt-table-row kt-table-row-level-0 odd" role="row" v-for="user in users" v-bind:key="user.u_id">
                                                            <td class="sorting_1">
                                                                {{user.u_id}}
                                                            </td>
                                                            <td>
                                                                {{ user.name }}
                                                            </td>
                                                            <td>
                                                                {{ user.email }}
                                                            </td>
                                                            <td>
                                                                {{ user.role.name }}
                                                            </td>
                                                            <td>
                                                                <span :class="user.status == 'active' ? 'active-status' : 'deactive-status'">
                                                                    <span class="badge" :class="user.status == 'active' ? 'badge-light-success' : 'badge-light-danger'" >
                                                                        {{ user.status }}
                                                                      </span>
                                                                </span>
                                                                <!-- {{ user.status }} -->
                                                            </td>
                                                            <td v-if="$parent.permissions.includes('user-manage') " class="white__nowrap">
                                                            <a v-if="user.role.id != 1" href="#"  class="click-edit btn btn-outline-primary text-nowrap waves-effect p-2 mr-3" id="click-edit1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos" @click.prevent="editUser(user)">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                                <span class="pl-2">Edit</span>
                                                            </a>
                                                            <a v-if="user.role.id != 1" class="btn btn-outline-danger text-nowrap  waves-effect p-2" href="#"  @click.prevent="deleteUser(user.u_id)">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                </svg>
                                                                <span>Delete</span>
                                                            </a>
                                                            </td>
                                                        </tr>
                                                        <tr v-if="users.length == 0" class="text-center font-size-16"><td colspan="6">No Order Found</td></tr>
                                                    </tbody>
                                                </table>
                                                <ul class="pagination pagination-sm mb-0 mt-3 justify-content-end align-items-center px-2" v-if="users.length != 0">
                                                    <li v-bind:class="[{disabled: !pagination.prev_page_url}]"><button class="page-link" href="#" @click="fetchUsers(pagination.prev_page_url)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous
                                                        </button>
                                                    </li>

                                                    <li v-for="n in pagination.last_page" :key="n"><button class="page-link text-dark" :class="{ 'active' : pagination.current_page == n  }" href="#">{{ n }}</button></li>

                                                    <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><button class="page-link" href="#" @click="fetchUsers(pagination.next_page_url)">
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
        <div class="offcanvas offcanvas-right kt-color-panel p-5 kt_notes_panel" v-if="display_form" :class="display_form ? 'offcanvas-on' : ''">
            <div class="offcanvas-header d-flex align-items-center justify-content-between pb-3">
                <h4 class="font-size-h4 font-weight-bold m-0">Add User</h4>
                <a href="#" class="btn btn-sm btn-icon btn-light btn-hover-primary kt_notes_panel_close" v-on:click="display_form = 0">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </a>
            </div>
            <form id="myform">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="text-dark">Name </label>
                            <input type="text" name="text" v-model="user.name" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('name')" v-text="errors.get('name')"></small>
                        </div>

                        <div class="form-group">
                            <label class="text-dark">Email </label>
                            <input type="text" name="text" v-model="user.email" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('email')" v-text="errors.get('email')"></small>
                        </div>

                        <div class="form-group">
                            <label class="text-dark">Password </label>
                            <input type="password" name="text" v-model="user.password" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('password')" v-text="errors.get('password')"></small>
                        </div>

                        <div class="form-group">
                            <label class="text-dark">Confirm Passowrd </label>
                            <input type="password" name="text" v-model="user.confirm_password" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('confirm_password')" v-text="errors.get('confirm_password')"></small>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-dark">Role </label>
                                    <select v-model="user.role_id" class="w-100">
                                    <option value="">Select Role</option>
                                    <option v-for="role in roles" v-bind:value="role.id">
                                    {{ role.name }}
                                    </option>
                                    </select>
                                    <small class="form-text text-danger" v-if="errors.has('role_id')" v-text="errors.get('role_id')"></small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-dark">Status </label>
                                    <select v-model="user.status" class="w-100">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    <small class="form-text text-danger" v-if="errors.has('status')" v-text="errors.get('status')"></small>
                                </div>  
                            </div>
                        </div>                                        
                        <div class="form-group">
                            <label class="text-dark">Warehouse </label>
                            <multiselect v-model="user.warehouse_id" 
                                :options="warehouses" 
                                :custom-label="nameWithLang" 
                                placeholder="Select one" 
                                label="name" 
                                track-by="id"
                                :multiple="true"
                                :taggable="true"
                                
                                >
                                
                            </multiselect>
                            <!-- <select v-model="user.warehouse_id" class=" js-states form-control bg-transparent" multiple>
                                <option value="">Select Warehouse</option>
                                <option v-for="warehouse in warehouses" :selected="user.warehouse_id.includes(warehouse.warehouse_id)"  v-bind:value="warehouse.warehouse_id">
                                    {{ warehouse.warehouse_name }}
                                </option>
                            </select> -->
                        </div>
                    </div>
                </div>
                <button type="button" @click="addUpdateUser()" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</div>
</template>

<script>
import Multiselect from 'vue-multiselect'
import ErrorHandling from "./../../ErrorHandling";
export default {
  components: { Multiselect },
    data() {
        return {
            display_form: 0,
            user: {
                id: "",
                name: "",
                email: "",
                password: "",
                confirm_password: "",
                role_id: "",
                status: "active",
                warehouse_id:[],
            },
            searchParameter: '',
            sortBy: 'id',
            sortType: 'ASC',
            limit: 10,
            error_message: '',
            edit: false,
            actions: false,
            pagination: {},
            request_method: "",
            users: [],
            warehouses:[],
            roles: [],
            token: [],
            errors: new ErrorHandling(),
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        };
    },

    methods: {
        fetchRoles() {
            this.$parent.loading = true;
            var token = localStorage.getItem('token');
            const config = {
                headers: {
                    Authorization: `Bearer ${token}`
                }
            };
            var responseData = {};

            axios.get('/api/admin/role?limit=500', config)
                .then(res => {
                    if (res.data.status == "Success") {
                        this.roles = res.data.data;
                    }
                }).finally(() => (this.$parent.loading = false));
        },
        fetchUsers(page_url) {
            this.$parent.loading = true;
            let vm = this;
            page_url = page_url || "/api/admin/user";
            if(Number.isInteger(page_url)){
                page_url ="/api/admin/user?page="+page_url;
            }
            var arr = page_url.split('?');
            
            if (arr.length > 1) {
                page_url += '&limit='+this.limit;
            }
            else{
                page_url += '?limit='+this.limit;
            }
            if(this.searchParameter != null){
                page_url += '&searchParameter='+this.searchParameter;
            }
            page_url += '&sortBy='+this.sortBy+'&sortType='+this.sortType;
            var responseData = {};

            axios.get(page_url, this.token).then(res => {
                this.users = res.data.data;
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
        deleteUser(id) {
            if (confirm('Are You Sure?')) {
                this.$parent.loading = true;
                axios.delete(`/api/admin/user/${id}`,this.token)
                    .then(res => {
                        if (res.data.status == "Success") {
                            this.$toaster.success(res.data.message)
                            this.fetchUsers();
                        }

                    })
                    .catch(err => console.log(err))
                    .finally(() => (this.$parent.loading = false));
            }
        },
        addUpdateUser() {
            this.$parent.loading = true;
            var url = '/api/admin/user';
            if (this.edit === false) {
                // Add
                this.request_method = 'post'
            } else {
                // Update
                var url = '/api/admin/user/' + this.user.id;
                this.request_method = 'put'
            }
            axios[this.request_method](url, this.user, this.token)
                .then(res => {
                    if (res.data.status == "Success") {
                        this.display_form = 0;
                        this.$toaster.success(res.data.message)
                        this.clearForm();
                        this.fetchUsers();
                    } else {
                        this.$toaster.error(res.data.message)
                    }
                })
                .catch(error => {
					this.error_message = '';
					this.errors = new ErrorHandling();
					if (error.response.status == 422) {
						if(error.response.data.status == 'Error'){
							this.error_message = error.response.data.message;
						}
						else{
							this.errors.record(error.response.data.errors);
						}
					}
				}).finally(() => (this.$parent.loading = false));

        },
        editUser(user) {
            this.edit = true;
            this.display_form = 1;
            this.errors = new ErrorHandling();
            this.user.id = user.u_id;
            this.user.name = user.name;
            this.user.email = user.email;
            this.user.password = '';
            this.user.confirm_password = '';
            this.user.role_id = user.role.id;
            this.user.status = user.status;
            this.user.warehouse_id = user.warehouse;
        },
        clearForm() {
            this.edit = false;
            this.user.id = null;
            this.user.name = '';
            this.user.email = '';
            this.user.password = '';
            this.user.confirm_password = '';
            this.user.role_id = '';
            this.user.status = 'active';
        },
        sorting(sortBy){
            this.sortBy = sortBy;
            this.sortType = this.sortType == 'asc' || this.sortType == 'ASC' ? this.sortType='desc' : this.sortType = 'asc';
            this.fetchUsers();
        },
        fetchWarehouses() {
        this.$parent.loading = true;
        var token = localStorage.getItem('token');
        const config = {
            headers: {
                Authorization: `Bearer ${token}`
            }
        };
        axios.get('/api/admin/warehouse?getAllData=1', config)
            .then(res => {
                if (res.data.status == "Success") {
                    this.warehouses = res.data.data;
                }
            })
            .finally(() => (this.$parent.loading = false));
        },
        
        nameWithLang (warehoue) {
            console.log(warehoue, 'warehoue');
            return warehoue ? `${warehoue.warehouse_name}` : 'Hey';
        },
        clearSearch(){
            this.searchParameter = "",
            this.fetchUsers();
        }
    },
    mounted() {
        
        var token = localStorage.getItem('token');
        this.token = {
            headers: {
                Authorization: `Bearer ${token}`
            }
        };
        this.fetchRoles();
        this.fetchUsers();
        this.fetchWarehouses();
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
