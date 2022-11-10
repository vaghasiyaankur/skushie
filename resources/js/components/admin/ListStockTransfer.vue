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
                                            Stock Transfer List 
                                        </h3>
                                    </div>
                                    <div class="icons d-flex">
                                        <router-link to="/admin/stock-transfer" class="btn ml-2 p-0 kt_notes_panel_toggle btn-outline-black" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos" v-if="$parent.permissions.includes('stock-transfer-manage')">
                                            <span class="h-30px font-size-h5 bg-white w-30px d-flex align-items-center justify-content-center shadow-sm  " v-on:click="
                                                display_form = !display_form
                                                ">
                                                <svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                                                </svg>
                                            </span>
                                        </router-link>
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
                                        
                                            <div id="sale_wrapper" class="dataTables_wrapper no-footer">

                                            <div class="dataTables_length mb-3" id="sale_length"><label>Show 
                                            <select name="sale_length" aria-controls="sale" class="" v-model="limit" v-on:change="fetchstock_transfers()">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="500">500</option>
                                            <option value="1000">1000</option>
                                            </select> entries</label></div>

                                            <div id="sale_filter" class="dataTables_filter">
                                                <!-- <label>Search:<input type="search" class="" placeholder="" aria-controls="sale" v-model="searchParameter" @keyup="fetchstock_transfers()"></label> -->
                                                </div>
                                                <table id="sale" class="display dataTable no-footer order--table" sale="grid">
                                                    <thead class="text-body">
                                                        <tr sale="row">
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 53.1891px;">
                                                               Product
                                                            </th>
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 53.1891px;">
                                                               Qty
                                                            </th>
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 53.1891px;">
                                                               WareHouse From
                                                            </th>
                                                             <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 53.1891px;">
                                                               WareHouse To
                                                            </th>
                                                            
                                                           
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 53.1891px;">
                                                                Notes
                                                            </th>
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 53.1891px;">
                                                                Transfer Date
                                                            </th>
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 53.1891px;">
                                                                Refrence No
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody class="kt-table-tbody text-dark">
                                                        <tr class="kt-table-row kt-table-row-level-0 odd" sale="row" v-for="stock_transfer in stock_transfers" v-bind:key="stock_transfer.stock_transfer_id">
                                                            <td>
                                                                {{ productNameBasedOnType(stock_transfer) }}
                                                            </td>
                                                             <td>
                                                                {{ stock_transfer.detail[0].quantity }}
                                                            </td>
                                                            <td>
                                                                {{ stock_transfer.warehouse_from != null ? stock_transfer.warehouse_from.warehouse_name :"" }}
                                                            </td>
                                                            <td>
                                                                {{ stock_transfer.warehouse_to != null ? stock_transfer.warehouse_to.warehouse_name :"" }}
                                                            </td>
                                                            <td>
                                                                {{ stock_transfer.notes }}0
                                                            </td>
                                                            <td>
                                                                {{ stock_transfer.trasfer_date }}
                                                            </td>
                                                            <td>
                                                                {{ stock_transfer.reference_no }}
                                                            </td>
                                                        </tr>
                                                        <tr v-if="stock_transfers.length == 0" class="text-center font-size-16"><td colspan="6">No Order Found</td></tr>
                                                    </tbody>
                                                </table>
                                                <ul class="pagination pagination-sm mb-0 mt-3 justify-content-end align-items-center px-2" v-if="stock_transfers.length != 0">
                                                    <li v-bind:class="[{disabled: !pagination.prev_page_url}]"><button class="page-link" href="#" @click="fetchstock_transfers(pagination.prev_page_url)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous
                                                        </button>
                                                    </li>

                                                    <li v-for="n in pagination.last_page" :key="n"><button class="page-link text-dark" :class="{ 'active' : pagination.current_page == n  }" href="#">{{ n }}</button></li>

                                                    <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><button class="page-link" href="#" @click="fetchstock_transfers(pagination.next_page_url)">
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
    </div> <div class="offcanvas_backdrop" v-if="display_form">
        <div class="offcanvas offcanvas-right kt-color-panel p-5 kt_notes_panel" v-if="display_form" :class="display_form ? 'offcanvas-on' : ''">
            <div class="offcanvas-header d-flex align-items-center justify-content-between pb-3">
                <h4 class="font-size-h4 font-weight-bold m-0">Add sale</h4>
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
                            <input type="text" name="text" v-model="stock_transfer.name" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('name')" v-text="errors.get('name')"></small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Direction </label>
                            <select v-model="stock_transfer.direction">
                                <option value="ltr">LTR</option>
                                <option value="rtl">RTL</option>
                            </select>
                            <small class="form-text text-danger" v-if="errors.has('direction')" v-text="errors.get('direction')"></small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Code </label>
                            <input type="text" name="text" v-model="stock_transfer.code" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('code')" v-text="errors.get('code')"></small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Directory </label>
                            <input type="text" name="text" v-model="stock_transfer.directory" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('directory')" v-text="errors.get('directory')"></small>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="text" v-model="stock_transfer.is_default" id="is_default" class="form-check-input" />
                            <label class="text-dark" for="is_default">Set as default </label>
                            <small class="form-text text-danger" v-if="errors.has('is_default')" v-text="errors.get('is_default')"></small>
                        </div>
                        
                    </div>
                </div>
                <button type="button" @click="addUpdatesale()" class="btn btn-primary">Submit</button>
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
            stock_transfers:[],
            searchParameter: '',
            sortBy: 'id',
            sortType: 'ASC',
            limit: 10,
            error_message: '',
            edit: false,
            actions: false,
            pagination: {},
            request_method: "",
            is_default: "0",
            token: [],
            errors: new ErrorHandling(),
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        };
    },

    methods: {
        fetchstock_transfers(page_url) {
            this.$parent.loading = true;
            let vm = this;
            page_url = page_url || "/api/admin/stock_transfer";
            if(Number.isInteger(page_url)){
                page_url ="/api/admin/stock_transfer?page="+page_url;
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
            page_url +='&getlocationFrom=1&getlocationTo=1&getDetail=1';

            var responseData = {};

            axios.get(page_url, this.token).then(res => {
                this.stock_transfers = res.data.data;
                vm.makePagination(res.data.meta, res.data.links);
            })
            .finally(() => (this.$parent.loading = false));
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
        productNameBasedOnType(stock_transfer){
            // console.log(stock_transfer);


            if(stock_transfer.detail[0].product.product_type === "simple"){
                return stock_transfer.detail[0].product.detail[0].title;
            }
            if(stock_transfer.detail[0].product.product_type === "variable"){
                var nameToReturn =stock_transfer.detail[0].product.detail[0].title+"(";

                stock_transfer.detail[0].product.combination_detail.forEach((element,i) => {
                    if(element.product_combination_id == stock_transfer.detail[0].product_combination.product_combination_id){
                        element.combination.forEach((result,j) => {
                            nameToReturn += result.variation.detail[0].name;
                            if(element.combination.length != j+1){
                                nameToReturn +=',';
                            }
                        })
                    }
                });
                nameToReturn +=")";
                return nameToReturn;
            } 

            // return "working";
        }
    },
    mounted() {
     
        var token = localStorage.getItem('token');
        this.token = {
            headers: {
                Authorization: `Bearer ${token}`
            }
        };
        this.fetchstock_transfers();
    },
    props: ['loading'],
};
</script>
<style scoped>
  table.dataTable.display tbody tr.odd>.sorting_1, table.dataTable.order-column.stripe tbody tr.odd>.sorting_1{
    background-color: transparent;
  }
  table.dataTable.display tbody tr:hover>.sorting_1, table.dataTable.order-column.hover tbody tr:hover>.sorting_1{
    background-color: transparent;
  }
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
</style>
