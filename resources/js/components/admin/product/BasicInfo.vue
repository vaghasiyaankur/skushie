<style scoped>
.slide {
  color: white;
  text-align: center;
  font-size: 6rem;
}

.button-container {
  padding-top: 10px;
  width: 50%;
  margin: 0 auto;
}
.anim {
  width: 50px;
  height: 50px;
}
#pills-tabContent .tab-pane a.cta:hover{
  box-shadow: 0 8px 25px -8px #7367f0;
}
#pills-tabContent .custom_select_box{
    font-size: 15px;
    border-radius: 5px;
    padding: 6.4px 14px !important;
  }
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
#pills-tabContent .card{
  box-shadow: none;
}
</style>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<template>
  <div>
    <div class="card card-custom gutter-b bg-transparent border-0">
      <div class="card-header border-0 align-items-center">
        <h3 class="card-label mb-0 font-weight-bold text-body">
          General Information
        </h3>
      </div>
      <div class="card-body" id="printableTable">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="slide-v" v-if="gallary_detail_path.length > 0">
              <div class="slide mb-3">
                <img
                  :src="gallary_detail_path[currentSelectedImg]"
                  style="width: 80%"
                  @click="toggleImageSelect(currentSelectedImg)"
                />
              </div>
            </div>

            <div class="row">
              <template
                v-for="(gallary_detail, index) in gallary_detail_path"
                v-key="index"
              >

                <div class="col-2 float-left mb-3" v-if="gallary_detail != ''">
                  <img
                    :src="gallary_detail"
                    alt="..."
                    class="img-thumbnail"
                    @click="toggleImageSelect(index)"
                    style="cursor:pointer;"
                  />
                 <button v-if="index != currentSelectedImg" class="btn btn-block btn-danger btn-xs py-0 remove_img_btn" @click="removeImage(index)">-</button>
                </div>
              </template>
            </div>

            <div class="row">
            <div class="col-12">
            <hr >
              <a
                data-toggle="pill"
                href="#"
                @click="toggleImageSelect()"
                class="btn btn-primary cta"
                >
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                  <line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Add Media
              </a
              >
            <hr >

            </div>
              
            </div>
          </div>
          <div class="col-md-6 col-12">
            <label>Categories</label>
            <multiselect v-model="category_id" 
            :options="categories" 
            :custom-label="nameWithLang" 
            placeholder="Select one" 
            label="name" 
            track-by="id"
            :multiple="true"
            :taggable="true"
            @input="setCat"
            @remove='removeCat'
            
            >
            
            </multiselect>
            <!-- <select
              class="single-select w-100 mb-3 categories-select ms-offscreen"
              multiple=""
              style=""
              @change="setCat($event.target.value)"
              v-model="category_id"
            >
              <option value="" selected>Select Category</option>
              <option v-for="category in categories" v-bind:value="category.id">
                {{ category.detail == null ? "" : (category.detail[0] ? category.detail[0].name : '') }}
              </option>
            </select> -->
            <small
              class="form-text text-danger"
              v-if="errors.has('category_id')"
              v-text="errors.get('category_id')"
            ></small>


            <br />
            <br />
            <ul class="nav nav-pills lang-tab mb-3" id="pills-tab1" role="tablist">
              <li
                class="nav-item"
                v-for="language in languages"
                @click="setSelectedLanguage(language.id)"
              >
                <a
                  class="nav-link btn-light shadow-none border_radius_10 "
                  :class="language.id == selectedLanguage ? 'show active' : ''"
                >
                  {{ language.language_name }}
                </a>
              </li>
            </ul>
            <div class="row">

              <div class="col-12">
                <div class="tab-content lang-content" id="v-pills-tabContent">
                  <div
                    class="tab-pane fade card_custom_effect"
                    v-for="(language, index) in languages"
                    :class="
                      language.id == selectedLanguage ? 'show active' : ''
                    "
                  >
                    <h6 class="text-body">
                      Product Name ( {{ language.language_name }} )
                    </h6>
                    <fieldset class="form-group mb-4">
                      <input
                        type="text"
                        :name="'name' + index"
                        v-on:input="setTitle($event.target.value, language.id)"
                        class="form-control bg-transparent text-dark"
                        id="basicInput"
                        v-model="title[language.id]"
                        placeholder="Product Name"
                      />
                      <small
                        class="form-text text-danger"
                        v-if="errors.has('title')"
                        v-text="errors.get('title')"
                      ></small>
                      <small
                        class="form-text text-danger"
                        v-if="errors.has('title.'+index)"
                        v-text="errors.get('title.'+index)"
                      ></small>
                    </fieldset>
                    <h6 class="text-body">
                      Description ( {{ language.language_name }} )
                    </h6>
                    <fieldset class="form-group mb-3">
                      <textarea
                        id="label-textarea"
                        :name="'desc' + index"
                        v-on:input="setDesc($event.target.value, language.id)"
                        rows="6"
                        name="notes"
                        v-model="desc[language.id]"
                        placeholder="Description"
                        spellcheck="false"
                        class="form-control"
                        style="height: 130px"
                      ></textarea>
                      <small
                        class="form-text text-danger"
                        v-if="errors.has('desc')"
                        v-text="errors.get('desc')"
                      ></small>
                      <small
                        class="form-text text-danger"
                        v-if="errors.has('desc.'+index)"
                        v-text="errors.get('desc.'+index)"
                      ></small>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-12 mt-4">
                <div class="form-group">
                  <label class="text-dark">Video URL</label>
                  <input
                    type="text"
                    v-on:input="setVideoUrl($event.target.value)"
                    class="form-control" v-model="video_url"
                  />
                  <small
                    class="form-text text-danger"
                    v-if="errors.has('video_url')"
                    v-text="errors.get('video_url')"
                  ></small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-end">
        <a
          data-toggle="pill"
          href="#ad-info"
          class="btn btn-primary cta"
          @click.prevent="setActive('ad-info-tab')"
          :class="{ active: isActive('ad-info-tab') }"
          >Continue
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a
        >
      </div>
    </div>
    <attach-image
      @toggleImageSelect="toggleImageSelect"
      :showModal="showModal"
      @setImage="setImage"
    />
  </div>
</template>

<script>
import Multiselect from 'vue-multiselect'
export default {
  components: { Multiselect },
  data() {
    return {
      categories: [],
      languages: [],
      selectedLanguage: "",
      showModal: false,
      gallary_path: "",
      gallary_detail_path: [],
      gallary_detail_id: [],
      currentSelectedIndex: -1,
      currentSelectedImg: 0,
      currentSelectedImgClass: "",
      video_url: "",
      category_id: [],
      title: [],
      desc: [],
    };
  },

  methods: {
    nameWithLang (option) {
      console.log(option, 'option');
      return option.detail ? `${option.detail[0].name}` : 'Hey';
    },
    fetchCategories() {
      this.$parent.$parent.loading = true;
      var token = localStorage.getItem("token");
      const config = {
        headers: {
          Authorization: `Bearer ${token}`,
        },
      };
      var responseData = {};

      axios
        .get("/api/admin/category?getAllData=1&getDetail=1", config)
        .then((res) => {
          if (res.data.status == "Success") {
            this.categories = res.data.data;
          }
        })
        .finally(() => (this.$parent.$parent.loading = false));
    },
    fetchLanguages() {
      this.$parent.$parent.loading = true;
      var token = localStorage.getItem("token");
      const config = {
        headers: {
          Authorization: `Bearer ${token}`,
        },
      };
      var responseData = {};

      axios
        .get("/api/admin/language?limit=500", config)
        .then((res) => {
          if (res.data.status == "Success") {
            this.languages = res.data.data;
            for (var i = 0; i < res.data.data.length; i++) {
              this.$parent.product.language_id.push(res.data.data[i].id);
              if (res.data.data[i].is_default) {
                this.selectedLanguage = res.data.data[i].id;
              }
            }
          }
        })
        .finally(() => (this.$parent.$parent.loading = false));
    },
    setCat(value,id) {
      this.$emit("setCategoryInChild",value[value.length-1].id,'push');
    },
    removeCat(removedOption, id){
      this.$emit("setCategoryInChild",removedOption.id,'remove');
    },
    setTitle(value, index) {
      this.$emit("setTitleInChild", value, index);
    },
    setDesc(value, index) {
      this.$emit("setDescInChild", value, index);
    },
    isActive(value) {
      this.$emit("isActiveInChild", value);
    },
    setActive(value) {
      this.$emit("setActiveInChild", value);
    },
    setVideoUrl(value) {
      this.$emit("setVideoUrlInChild", value);
    },

    setSelectedLanguage(selectedLanguage) {
      this.selectedLanguage = selectedLanguage;
    },
    toggleImageSelect(index = -1) {
      this.showModal = !this.showModal;
      if (index > -1) {
        this.currentSelectedIndex = index;
      }
    },
    setImage(gallary) {
      this.gallary_path = gallary.gallary_path;

      // if (this.gallary_detail_id.indexOf(gallary.gallary_id) > -1) {
      //   return;
      // }

      if (this.currentSelectedIndex > -1) {
        this.gallary_detail_path[this.currentSelectedIndex] =
          gallary.gallary_path;
        this.gallary_detail_id[this.currentSelectedIndex] = gallary.gallary_id;
        this.currentSelectedIndex = -1;
      } else {
        this.gallary_detail_path.push(gallary.gallary_path);
        this.gallary_detail_id.push(gallary.gallary_id);
      }
      this.$emit("setGallaryIdInChild", this.gallary_detail_id);
    },
    // setSelectedImage(index) {
    //     this.currentSelectedImg = index;
    //     this.currentSelectedIndex = index;
    // },
    removeImage(index){
      
        this.gallary_detail_path.splice(index,1);
        this.gallary_detail_id.splice(index,1);
        this.$emit("setGallaryIdInChild", this.gallary_detail_id);

    }
  },
  watch:{
    product(newVal, oldVal){
      this.video_url = newVal.video_url;
      newVal.cat_id.map((cId) => {
        this.category_id.push(cId);
      });
      newVal.languages.map((languageId) => {
        this.title[languageId] = newVal.title_lang[languageId];
        this.desc[languageId] = newVal.desc_lang[languageId];
      });

      newVal.gallary_detail_id.map((gallary_detail_id, index) => {
        this.gallary_detail_id.push(gallary_detail_id);
      });

      newVal.gallary_detail_path.map((gallary_detail_path_single, index) => {
        this.gallary_detail_path.push(gallary_detail_path_single);
      });
    }
  },
  mounted() {
    this.fetchCategories();
    this.fetchLanguages();
    
  },
  props: ["product", "errors", 'edit'],
};
</script>
<style scoped>
.nav .nav-link.active, .nav-pills .show > .nav-link{
  background: linear-gradient(118deg, #7367f0, rgba(115, 103, 240, 0.7)) !important;
  box-shadow: 0 0 10px 1px rgb(115 103 240 / 70%) !important;
  color: #fff !important;
}
.remove_img_btn{
  position: absolute;
    top: -4px;
    right: 9px;
    width: 20px;
    height: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
}
</style>
