<template>
<div>
  <div class="card card-custom gutter-b bg-white border-0">
    <div class="card-header border-0 align-items-center">
      <h3 class="card-label mb-0 font-weight-bold text-body">
        Seo
      </h3>
    </div>
    <div class="card-body" id="printableTable">
      <div class="row">
        <div class="col-md-6 col-12">
          <h6 class="text-body">Seo Meta Tags</h6>
          <fieldset class="form-group mb-3">
            <input type="text" v-on:input="setSeoMetaTag($event.target.value)" class="form-control bg-transparent text-dark" v-model="seo_meta_tag" placeholder="Seo meta tags" />
            <small class="form-text text-danger" v-if="errors.has('seo_meta_tag')" v-text="errors.get('seo_meta_tag')"></small>
          </fieldset>
        </div>
        <div class="col-md-6 col-12">
          <h6 class="text-body">Seo Description</h6>
          <fieldset class="form-group mb-3">
            <input type="text" v-on:input="setSeoDesc($event.target.value)" class="form-control bg-transparent text-dark" v-model="seo_desc" placeholder="Seo Description" />
            <small class="form-text text-danger" v-if="errors.has('seo_desc')" v-text="errors.get('seo_desc')"></small>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 d-flex justify-content-between">
      <a href="#" data-toggle="pill" @click.prevent="setActive('ad-info-tab')" :class="{ active: isActive('ad-info-tab') }" class="btn btn-outline-primary swipe-to-top cta border_radius_10 ">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        Back</a>
      <a href="#" data-toggle="pill" @click.prevent="addProduct()" class="btn btn-primary  ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
        Save
      </a>
    </div>
  </div>
</div>
</template>

<script>
export default {
  data() {
    return {
      'seo_meta_tag':'',
      'seo_desc':'',
    };
  },

  methods: {
    isActive(value) {
        this.$emit('isActiveInChild', value);
    },
    setActive(value) {
        this.$emit('setActiveInChild', value);
    },
    addProduct() {
        this.$emit('addProductInChild');
    },
    setSeoMetaTag(value) {
        this.$emit('setSeoMetaTagInChild', value);
    },
    setSeoDesc(value) {
        this.$emit('setSeoDescInChild', value);
    },
  },
  watch:{
    product(newVal, oldVal){
      this.seo_meta_tag = newVal.seo_meta_tag;
      this.seo_desc = newVal.seo_desc;
    }
  },
  props: ["product", "errors", 'edit'],
};
</script>
<style scoped> 
.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
  background-color: rgb(115 103 240) !important;
  border-color: rgb(115 103 240) !important;
}
.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .show > .btn-outline-primary.dropdown-toggle {
background-color: transparent !important;
color: #ae69f5 !important;
border-color: var(--artical-background-primary) !important;
}
#pills-tabContent .swipe-to-top.cta{
  padding: 8px 30px !important;
}
#pills-tabContent .tab-pane a.btn:hover{
  box-shadow: 0 8px 25px -8px #7367f0;

}
</style>