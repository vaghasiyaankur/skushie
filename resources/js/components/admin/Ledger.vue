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
                                        Transaction
                                        </h3>
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
                                        
                                            <div id="productaccountTable_wrapper" class="dataTables_wrapper no-footer">

                                            <div class="dataTables_length mb-3" id="productaccountTable_length"><label>Show 
                                            <select name="productaccountTable_length" aria-controls="productaccountTable" class="" v-model="limit" v-on:change="fetchaccounts()">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            </select> entries</label></div>

                                            <div id="productaccountTable_filter" class="dataTables_filter mb-3"><label>Search:<input type="search" class="" placeholder="" aria-controls="productaccountTable" v-model="searchParameter" @keyup="fetchaccounts()"></label></div>
                                                <table id="productaccountTable" class="display dataTable no-footer order--table" role="grid">
                                                    <thead class="text-body">
                                                        <tr role="row">
                                                            <th class="sorting" tabindex="0" aria-controls="productaccountTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending"  @click="sorting('id')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'id'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'id' ? 'sorting_desc' : 'sorting'">
                                                                ID
                                                            </th>
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1">
                                                               Transaction Date
                                                            </th>
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1">
                                                                Transaction description
                                                            </th>
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1">
                                                                Account Name
                                                            </th>
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" >
                                                                User
                                                            </th>
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" >
                                                                Type
                                                            </th>
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" >
                                                                Dr
                                                            </th>
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" >
                                                                
                                                                Cr
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="kt-table-tbody text-dark">
                                                        <tr class="kt-table-row kt-table-row-level-0 odd" role="row" v-for="account in accounts" v-bind:key="account.id">
                                                            <td>
                                                                {{ account.id }}
                                                            </td>
                                                            <td>
                                                                {{ account.transaction.transaction_date }}
                                                            </td>
                                                            <td>
                                                                {{ account.transaction.description }}
                                                            </td>
                                                            <td class="sorting_1">
                                                                {{account.account_id.name ? account.account_id.name : ''}}
                                                            </td>
                                                            <td>
                                                                {{ account.user_id ? account.user_id.customer_first_name : '' }}
                                                            </td>
                                                            <td>{{ account.type }}</td>
                                                            <td>
                                                                {{ account.dr_amount }}
                                                            </td>
                                                            <td>
                                                                {{ account.cr_amount }}
                                                            </td>
                                                        </tr>
                                                        <tr v-if="accounts.length == 0" class="text-center font-size-16"><td colspan="8">No Order Found</td></tr>
                                                    </tbody>
                                                </table>
                                                <ul class="pagination pagination-sm mb-0 mt-3 justify-content-end align-items-center px-2"  v-if="accounts.length != 0">
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
</div>
</template>

<script>
import ErrorHandling from "../../ErrorHandling";
export default {
    data() {
        return {
            display_form: 0,
            searchParameter: '',
            sortBy: 'id',
            sortType: 'DESC',
            limit: 10,
            error_message: '',
            edit: false,
            pagination: {},
            request_method: "",
            accounts: [],
            account_dropdowns:[],
            token: [],
            errors: new ErrorHandling(),
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        };
    },

    methods: {
        fetchaccounts(page_url) {
            this.$parent.loading = true;
            let vm = this;
            page_url = page_url || "/api/admin/transaction";
            if(Number.isInteger(page_url)){
                page_url ="/api/admin/transaction?page="+page_url;
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
            page_url += '&sortBy='+this.sortBy+'&sortType='+this.sortType+'&getDetail=1';
            var responseData = {};

            axios.get(page_url, this.token).then(res => {
                this.accounts = res.data.data;
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

        sorting(sortBy){
            this.sortBy = sortBy;
            this.sortType = this.sortType == 'asc' || this.sortType == 'ASC' ? this.sortType='desc' : this.sortType = 'asc';
            this.fetchaccounts();
        }

    },
    mounted() {
        
        var token = localStorage.getItem('token');
        this.token = {
            headers: {
                Authorization: `Bearer ${token}`
            }
        };
        this.fetchaccounts();
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
</style>
