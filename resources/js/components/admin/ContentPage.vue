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
                                            Content Pages
                                        </h3>
                                    </div>
                                    <div class="icons d-flex">
                                        <button class="btn ml-2 p-0 kt_notes_panel_toggle btn-outline-black" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos"  v-if="$parent.permissions.includes('content-page-manage')">
                                            <span class="h-30px font-size-h5 bg-white w-30px d-flex align-items-center justify-content-center shadow-sm" v-on:click="
                                                        display_form = !display_form
                                                    ">
                                                <svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
                                        
                                            <div id="productpagesTable_wrapper" class="dataTables_wrapper no-footer">

                                            <div class="dataTables_length mb-3" id="productpagesTable_length"><label>Show 
                                            <select name="productpagesTable_length"  class="" v-model="limit" v-on:change="fetchpagess()">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="500">500</option>
                                            <option value="1000">1000</option>
                                            </select> entries</label></div>

                                            <div id="productpagesTable_filter" class="dataTables_filter mb-3">
                                                <label>
                                                    Search:<input type="search" class="" placeholder=""  v-model="searchParameter" @keyup="fetchpagess()">
                                                </label>
                                                <button v-if="this.searchParameter != ''" @click="clearSearch">clear</button>
                                            </div>
                                                <table id="productpagesTable" class="display dataTable no-footer order--table" role="grid">
                                                    <thead class="text-body">
                                                        <tr role="row">
                                                            <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 31.25px;" @click="sorting('id')" :class="(this.$data.sortType == 'asc' || this.$data.sortType == 'ASC') && this.$data.sortBy == 'id'  ? 'sorting_asc' : (this.$data.sortType == 'desc' || this.$data.sortType == 'DESC') && this.$data.sortBy == 'id' ? 'sorting_desc' : 'sorting'">
                                                                ID
                                                            </th>
                                                            <th class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 53.1891px;">
                                                            Slug
                                                            </th>
                                                            <th  v-if="$parent.permissions.includes('content-page-manage')" class="no-sort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 53.1891px;">
                                                                Action
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="kt-table-tbody text-dark">
                                                        <tr class="kt-table-row kt-table-row-level-0 odd" role="row" v-for="pages in pagess" v-bind:key="pages.id">
                                                            <td class="sorting_1">
                                                                {{pages.id}}
                                                            </td>
                                                            <td>
                                                                {{ pages.slug }}
                                                            </td>
                                                            <td  v-if="$parent.permissions.includes('content-page-manage')" class="white__nowrap">
                                                                <a  href="javascript:void(0)" class=" click-edit btn btn-outline-primary text-nowrap  waves-effect p-2" id="click-edit1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos" @click="editpages(pages)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                                                    <span class="pl-2">Edit</span>
                                                                </a>
                                                                <a  v-if="pages.id > 5" class="btn btn-outline-danger text-nowrap  waves-effect p-2" href="#" @click="deletepages(pages.id)">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18">                                                                    
                                                                    </line><line x1="6" y1="6" x2="18" y2="18"></line>
                                                                    </svg>
                                                                    <span data-v-90508010="">Delete</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr v-if="pagess.length == 0" class="text-center font-size-16"><td colspan="3">No Order Found</td></tr>
                                                    </tbody>
                                                </table>
                                                <ul class="pagination pagination-sm mb-0 mt-3 justify-content-end align-items-center px-2">
                                                    <li v-bind:class="[{disabled: !pagination.prev_page_url}]"><button class="page-link" href="#" @click="fetchpagess(pagination.prev_page_url)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous
                                                        </button>
                                                    </li>

                                                    <li v-for="n in pagination.last_page" :key="n"><button class="page-link text-dark" :class="{ 'active' : pagination.current_page == n  }" href="#">{{ n }}</button></li>

                                                    <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><button class="page-link" href="#" @click="fetchpagess(pagination.next_page_url)">
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
        <div class="offcanvas offcanvas-right kt-color-panel p-5 kt_notes_panel"  :class="display_form ? 'offcanvas-on' : ''">
            <div class="offcanvas-header d-flex align-items-center justify-content-between pb-3">
                <h4 class="font-size-h4 font-weight-bold m-0">Add pages</h4>
                <a href="#" class="btn btn-sm btn-icon btn-light btn-hover-primary kt_notes_panel_close" v-on:click="display_form = 0">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </a>
            </div>
            <form id="myform">
                <div class="row">
                    <div class="col-12">
                        <div class="tabslang mb-3">
                        <div v-for="language in languages" class="tablang" :class="language.id == selectedLanguage ?'active':''" @click="setSelectedLanguage(language.id)">
                            {{ language.language_name }}
                        </div>
                        </div>
                    <div class="form-group " v-for="(language,index) in languages" v-if="language.id == selectedLanguage">
                            <label class="text-dark">Title ( {{ language.language_name }} ) </label>
                            <input type="text" :name="'title'+index" v-model="pages.title[index]" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('title')" v-text="errors.get('title')"></small>
                        </div>

                        <div class="form-group " v-for="(language,index) in languages" v-if="language.id == selectedLanguage">
                            <label class="text-dark">Description ( {{ language.language_name }} ) </label>
                            <vue-editor v-model="pages.description[index]"></vue-editor>
                            <small class="form-text text-danger" v-if="errors.has('description')" v-text="errors.get('description')"></small>
                        </div>



                        <div class="form-group ">
                            <label class="text-dark">Slug </label>
                            <input type="text" name="slug" v-model="pages.slug" class="form-control" />
                            <small class="form-text text-danger" v-if="errors.has('slug')" v-text="errors.get('slug')"></small>
                        </div>
                    </div>
                </div>
                <button type="button" @click="addUpdatepages()" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</div>
</template>

<script>
import ErrorHandling from "./../../ErrorHandling";
import { VueEditor } from "vue2-editor";

export default {
    components: {
        VueEditor
     },
    data() {
        return {
            display_form: 0,
            pages: {
                id: "",
                slug: "",
                title:[],
                description:[],
                language_id:[],
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
            countrySelected: "",
            stateSelected: "",
            pagess: [],
            languages: [],
            token: [],
            selectedLanguage:'',
            errors: new ErrorHandling(),
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        };
    },

    methods: {
        fetchLanguages() {
            this.$parent.loading = true;
            var token = localStorage.getItem('token');
            const config = {
                headers: {
                    Authorization: `Bearer ${token}`
                }
            };
            var responseData = {};

            axios.get('/api/admin/language?limit=500', config)
                .then(res => {
                    if (res.data.status == "Success") {
                        this.languages = res.data.data;
                        for(var i = 0 ; i < res.data.data.length; i++){
                            this.pages.language_id.push(res.data.data[i].id);
                            if(res.data.data[i].is_default){
                                this.selectedLanguage = res.data.data[i].id;   
                            }
                        }
                    }
                }).finally(() => (this.$parent.loading = false));
        },
        fetchpagess(page_url) {
            this.$parent.loading = true;
            let vm = this;
            page_url = page_url || "/api/admin/pages";
            if(Number.isInteger(page_url)){
                page_url ="/api/admin/pages?page="+page_url;
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
                this.pagess = res.data.data;
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
        deletepages(id) {
            if (confirm('Are You Sure?')) {
                this.$parent.loading = true;
                axios.delete(`/api/admin/pages/${id}`,this.token)
                    .then(res => {
                        if (res.data.status == "Success") {
                            this.$toaster.success('Settings has been updated successfully')
                            this.fetchpagess();
                        }

                    })
                    .catch(err => console.log(err))
                    .finally(() => (this.$parent.loading = false));
            }
        },
        addUpdatepages() {
            this.$parent.loading = true;
            var url = '/api/admin/pages';
            if (this.edit === false) {
                // Add
                this.request_method = 'post'
            } else {
                // Update
                var url = '/api/admin/pages/' + this.pages.id;
                this.request_method = 'put'
            }
            axios[this.request_method](url, this.pages, this.token)
                .then(res => {
                    if (res.data.status == "Success") {
                        this.display_form = 0;
                        this.$toaster.success('Settings has been updated successfully')
                        this.clearForm();
                        this.fetchpagess();
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
        editpages(pages) {
            this.edit = true;
            this.display_form = 1;
            this.errors = new ErrorHandling();
            this.pages.id = pages.id;
            this.pages.title = [];
            this.$parent.loading = true;
            axios.get(`/api/admin/pages/${pages.id}?getDetail=1`,this.token)
            .then(res => {
                if (res.data.status == "Success") {
                    res.data.data.detail.forEach(u => {
                         this.pages.title[ this.pages.language_id.indexOf(u.language.id)] = u.title;
                         this.pages.description[ this.pages.language_id.indexOf(u.language.id)] = u.description;
                    });


                     this.pages = Object.assign({}, this.pages, { slug: res.data.data.slug })


                    // res.data.data.detail.forEach(u => {
                    //     this.pages.title.push(u.title)
                    //     this.pages.description.push(u.description)
                    // });
                }

            })
            .catch(err => console.log(err))
            .finally(() => (this.$parent.loading = false));
            
            
        },
        clearForm() {
            this.edit = false;
            this.pages.id = null;
            this.pages.title = [];
            this.pages.description = [];
            
            },
        sorting(sortBy){
            this.sortBy = sortBy;
            this.sortType = this.sortType == 'asc' || this.sortType == 'ASC' ? this.sortType='desc' : this.sortType = 'asc';
            this.fetchpagess();
        },
        setSelectedLanguage(selectedLanguage){
            this.selectedLanguage = selectedLanguage;
            console.log("i am clicked",selectedLanguage)
        },
        clearSearch(){
            this.searchParameter = "",
            this.fetchpagess();
        }
    },
    mounted() {
        
        var token = localStorage.getItem('token');
        this.token = {
            headers: {
                Authorization: `Bearer ${token}`
            }
        };
        this.fetchpagess();
        this.fetchLanguages();
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
