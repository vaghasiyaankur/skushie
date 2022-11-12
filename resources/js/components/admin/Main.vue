<style>
html,body{
  font-family: 'Montserrat', sans-serif !important;
}
.tabslang {
  display: flex;
  cursor: pointer;
}

.tablang {
  padding: 5px;
}

.tablang.active {
  background: #ae69f5;
  color: white;
}
.btn-primary{
  color: #fff !important;
  background-color: #7367f0 !important;
  border-color: #7367f0 !important;
  border-radius: 10px !important;
  padding: 8px 30px;
}
.btn-primary:hover {
  box-shadow: 0 8px 16px -8px #7367f0;
}
.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-primary.dropdown-toggle:focus {
  box-shadow: none;
}
.btn-outline-secondary {
  border: 1px solid #82868b !important;
  background-color: transparent;
  color: #82868b;
}
.btn-outline-secondary:hover{
  background-color: rgba(130, 134, 139, 0.04) !important;
  color: #82868b !important;
  border-color:#82868b !important;
}
.btn.btn-outline-purple{
  border: 1px solid #ae69f5;
  color: #ae69f5;
}
.btn.btn-outline-purple:hover {
  background: #ae69f51a;
}
.border_radius_10{
  border-radius: 10px !important;
}
.border_radius_5{
  border-radius: 5.7px !important;
}
.form-control{
  display: block;
  width: 100%;
  padding: 8px 14px;
  font-size: 16px;
  font-weight: 400;
  line-height: 1.45;
  color: #6e6b7b;
  background-color: #fff;
  background-clip: padding-box;
  border:1px solid #e9ecef;
  appearance: none;
  border-radius: 0.357rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.form-control:hover {
  border-color: #7367f0 !important;
  box-shadow: 0 0 5px 0px rgb(115 103 240 / 51%) !important;
}
.form-control:focus{
  border-color: #7367f0;
}
.tablang.active{
  background: #ae69f5;
  padding: 5px 12px;
  border-radius: 10px;
  color: white;
  box-shadow: inset 0 -3px 0 0 rgb(34 41 47 / 20%);
}
.fontsize-16{
  font-size: 16px;
}
/*.order--table tbody tr:nth-of-type(odd) {
  background-color: #f3f2f7 !important;
}
.order--table tbody tr:nth-of-type(even) {
  background-color: #ffffff !important;
}*/
.order--table th, .order--table td {
 /* border: 1px solid #ebe9f1;*/
  font-size: 15px !important;
}
.order--table th{
  background-color: #f3f2f7;
}
.dataTables_length label{
  font-size: 15px !important;
}
.dataTables_filter label{
  font-size: 15px !important;
}
.dataTables_wrapper .dataTables_length select {
  border-radius: 5px;
  padding: 5px;
  padding: 8px 20px 8px 8px;
  margin: 0 5px;
}
.modal{
  background-color: rgba(0,0,0,0.5);
}
/*table.dataTable.no-footer{
  border-bottom: none;
}
table.dataTable thead th, table.dataTable thead td {
  border-bottom: 1px solid #ebe9f1;
}
table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td {
  border-top: none;
}
.order--table th:not(:last-child), .order--table td:not(:last-child){
  border-right: 0px;
}
.order--table tbody tr:hover{
  background-color:#fafafc !important ;
}*/
.dataTables_wrapper .dataTables_filter input {
  padding: 0.438rem 1rem;
  background-color: #fff !important;
  background-clip: padding-box;
  border: 1px solid #d8d6de;
  border-radius: 0.357rem;
}
.dataTables_wrapper .dataTables_filter button{
  outline: none;
  border: none;
  padding: 5px 15px;
  box-shadow: 0px 0px 10px #ea5455;
  background: rgb(234, 84, 85);
  color: #fff;
  border-radius: 10px;
  margin-left: 10px; 
  font-size: 15px;
}
.text-body {
  color: #636363 !important;
}
.aside .aside-menu .nav-item .nav-link:hover {
  color: #8f85f3;
}
.btn:focus, .btn.focus{
  box-shadow: none;
}
.aside .aside-menu .nav-item .nav-link .nav-text{
  font-size: 16px;
}
.icons .kt_notes_panel_toggle span{
  border: 1px solid rgb(174 105 245);
  border-radius: 5px;
  color: rgb(174 105 245);
  box-shadow: 0 0 10px rgb(174 105 245 / 22%) !important;
  transition: all 0.5s ease;
}
.icons .kt_notes_panel_toggle span:hover {
  background: #ae69f5 !important;
  color: #fff !important;
  box-shadow: 0 0 10px rgb(174 105 245 / 75%) !important;
  transition: all 0.5s ease;

}
.btn_outline_purple{
  background-color: transparent;
  border-color: #cfa5f9;
  color: #ae69f5 !important;
  border-radius: 10px;
}
.btn_outline_purple:hover{
  background-color: #efe1fd;
  border-color: #cfa5f9;
}
.btn-outline-primary{
  background-color: transparent;
  border-color: #7367f0 !important;
  color: #7367f0 !important;
  transition: all 0.3s ease;
}
.btn-outline-primary:hover{
  background-color: #7367f01f !important;
}
.btn-outline-danger:hover{
  
  background-color: rgba(234, 84, 85, 0.04) !important;
  color: #ea5455;
}
.card_custom_effect{
  transition: all 0.3s ease;
}
.card_custom_effect:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 25px 0 rgb(34 41 47 / 25%);
}
.btn-secondary:hover {
  box-shadow: 0 8px 25px -8px #ff9f43;
}

.form-text{
  font-size: 14px !important;
}
.white__nowrap{
  white-space:nowrap;
}
select {
  color: var(--artical-color-dark) !important;
  border: 1px solid;
  border-color: #e9ecef !important;
  background-color: transparent;
  padding: 8px 14px;
  outline: none;
  border-radius: 0.357rem;
}
select:hover,select:focus{
  border-color: #7367f0 !important;
  box-shadow: 0 0 5px 0px rgb(115 103 240 / 51%) !important;
}
.multiselect:hover, .multiselect:focus {
  border: 1px solid #7367f0 !important;
  box-shadow: 0 0 5px 0px rgb(115 103 240 / 51%) !important;
  border-radius: 5px;
}
.multiselect__option--highlight{
    background: #7367f0 !important;
    outline: none;
    color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #28c76f !important;
  border-color: #28c76f !important;
}
.btn-success:hover {
  box-shadow: 0 8px 25px -8px #28c76f;
}
.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #7367f0;
}

.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 8px 25px -8px #7367f0;
}
.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
  background-color: rgb(115 103 240) !important;
  border-color: rgb(115 103 240) !important;
}
.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .show > .btn-outline-primary.dropdown-toggle {
  background-color: #7367f01f !important;
  border-color: #7367f0 !important;
}
.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 8px 25px -8px #7367f0;
}
.btn-outline-primary:focus {
  background-color: #7367f01f !important;  
  border-color: #7367f0 !important;
}
.pagination .page-link.active {
  z-index: 2;
  color: #ae69f5;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}
@media screen and (max-width:991.98px){
  .offcanvas {
      width: 400px !important;
      padding: 24px !important;
  }
}
</style>
<template>
  <div>
    <div class="se-pre-con" v-if="loading">
      <div class="pre-loader">
        <img
          class="img-fluid"
          src="/assets/images/loadergif.gif"
          alt="loading"
        />
      </div>
    </div>
    <MobileHeader />
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
        <Sidebar :burgerMenu="burgerMenu" />

        <div id="aside-overlay" class="aside-overlay" :class="burgerMenu ? 'active' : ''" @click="removeOverlay()" ></div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="tc_wrapper">
          <Header @setBurgerMenu="setBurgerMenu" />
          <!--begin::Content-->
          <div
            class="content d-flex flex-column flex-column-fluid"
            id="tc_content"
          >
            <BreadCrumb />
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
              <!--begin::Container-->
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <router-view
                      :loading="1"
                      :permissions="permissions"
                      warehouse="warehouse"
                      globalSettings="globalSettings"
                      @showNotification="showNotification"
                    ></router-view>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <Footer /> -->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
    <!--end::Main-->
    <!-- <ToolBar /> -->
    <!-- <ColorPanel /> -->
  </div>
</template>

<script>
import MobileHeader from "./partials/MobileHeader";
import Header from "./partials/Header";
import Sidebar from "./partials/Sidebar";
import Footer from "./partials/Footer";
import ToolBar from "./partials/ToolBar";
import ColorPanel from "./partials/ColorPanel";
import BreadCrumb from "./partials/BreadCrumbs";
import useToast from "vue-toastification";
import Notification from './partials/Notification';

export default {
  name: "Main",
  components: {
    MobileHeader,
    ToolBar,
    ColorPanel,
    Sidebar,
    Header,
    Footer,
    BreadCrumb,
  },
  data() {
    return {
      loading: false,
      burgerMenu: false,
      permissions: [],
      warehouse: [],
      globalSettings: {},
      toast : useToast,
    };
  },
  methods: {
    removeOverlay() {
      
          document.body.classList.remove('aside-minimize');
					document.getElementById("tc_aside").classList.remove('aside-on');
					document.getElementById("aside-overlay").classList.remove('active');
        
    },

    showNotification(message,type) {
      const content = {
          component: Notification,
          props: {
              message: message,
              type : type
          },
      }
      if(type == 'success'){
          this.toast.success(content);
      }else{
          this.toast.error(content);
      }
    },

    setBurgerMenu() {
      this.burgerMenu = !this.burgerMenu;
    },
    fetchSetting() {
      var token = localStorage.getItem("token");
      const config = {
        headers: {
          Authorization: `Bearer ${token}`,
        },
      };
      var responseData = {};
      axios
        .get("/api/admin/setting", config)
        .then((res) => {
          for (var i = 0; i < res.data.data.length; i++) {
            Object.assign(responseData, {
              [res.data.data[i].setting_key]: res.data.data[i].setting_value,
            });
          }
          this.globalSettings = responseData;
          console.log(this.globalSettings,'from main');
        })
        .finally(() => console.log("working"));
    },
  },
  mounted() {
    this.fetchSetting();
    
  },
  created() {
    if (localStorage.getItem("permissions")) {
      this.permissions = localStorage.getItem("permissions").split(",");
        if (
            this.$route.name !== "dashboard" &&
            !this.permissions.includes(this.$route.name)
        ) {
            // this.$router.push("/admin/accessdenied");
        }
    }
  },
};
</script>


