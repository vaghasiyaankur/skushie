<template>
  <div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <div
            class="card card-custom bg-transparent shadow-none border-0 mb-0"
          >
            <div class="card-header align-items-center border-bottom-dark px-0">
              <div class="card-title mb-0">
                <h3 class="card-label mb-0 font-weight-bold text-body">
                  Manage Gallery
                </h3>
              </div>
            </div>
          </div>
          <br />
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="gallary-categories">
            <ul
              class="nav nav-pills justify-content-center mb-3"
              id="pills-tab"
              role="tablist"
            >
              <li class="nav-item mb-sm-2 mb-0">
                <a
                  class="nav-link btn-light-dark shadow-none"
                  :class="{ active: tag_id == '' }"
                  id="All-tab-center"
                  data-toggle="pill"
                  href="#All-center"
                  role="tab"
                  aria-controls="All-center"
                  aria-selected="true"
                  @click="gallaryByTagId('')"
                >
                  All
                </a>
              </li>
              <li class="nav-item" v-for="tag in tags">
                <a
                  class="nav-link btn-light-dark shadow-none"
                  :class="{ active: tag_id == tag.tag_id }"
                  id="general-tab-center"
                  data-toggle="pill"
                  :href="'#' + tag.tag_name"
                  role="tab"
                  aria-controls="general"
                  aria-selected="false"
                  @click="gallaryByTagId(tag.tag_id)"
                >
                  {{ tag.tag_name }}
                </a>
              </li>
            </ul>
          </div>
          <!-- <div class="small_screen_view d-none">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                Dropdown button
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div
            id="generalgallary"
            class="gallary0 linked card card-custom gutter-b bg-white border-0"
          >
            <div class="card-header border-0 align-items-center">
              <fieldset>
                <div class="checkbox d-flex align-items-center">
                  <input
                    type="checkbox"
                    class="checkbox-input"
                    id="checkbox1"
                    @change="check($event)"
                  />
                  <label for="checkbox1" class="mb-0 pl-2">
                    Select All
                    <small class="text-muted"
                      >({{ this.selectedImages.length }} Item Selected)</small
                    ></label
                  >
                </div>
              </fieldset>
              <div class="icons d-flex mt-sm-0 mt-3">
                <button
                  type="button"
                  class="btn btn-danger ml-2 border_radius_10"
                  title="Delete"
                  id="confirm-color"
                  @click="deletegallary()"
                >
                  Delete
                </button>

                <button
                  type="button"
                  title="Add New"
                  class="btn btn-primary white ml-2"
                  data-toggle="modal"
                  data-target="#imagepopup"
                  @click="toggleModal()"
                >
                  Add New
                </button>
                <!--Basic Modal -->
                <div
                  class="modal fade text-left"
                  :class="{ show: showModal }"
                  id="imagepopup"
                  tabindex="-1"
                  role="dialog"
                  aria-labelledby="myModalLabel1"
                  :style="[
                    showModal
                      ? { display: 'block !important' }
                      : { display: 'none' },
                  ]"
                >
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel1">
                          Add File Here
                        </h3>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close btn btn-sm btn-icon btn-light btn-hover-primary m-0" @click="toggleModal()">
                          <svg width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="bi bi-x"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path></svg>
                        </button>
                        <!-- <button
                          type="button"
                          class="
                            close
                            rounded-pill
                            btn btn-sm btn-icon btn-light btn-hover-primary
                            m-0
                          "
                          data-dismiss="modal"
                          aria-label="Close"
                          @click="toggleModal()"
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
                        </button> -->
                      </div>
                      <div class="modal-body">
                        <p>
                          Click in the box for upload images (we accept JPG, PNG
                          & GIF).
                        </p>
                        <div class="avatar-upload mb-3">
                          <div class="avatar-edit">
                            <input
                              type="file"
                              id="imageUpload"
                              accept=".png, .jpg, .jpeg"
                              @change="onFileChange"
                            />

                            <label for="imageUpload"> image upload </label>
                          </div>
                          <div class="avatar-preview">
                            <div id="imagePreview" class="rounded">
                              <img
                                :src="url"
                                style="height: 194px; width: 100%"
                              />
                            </div>
                          </div>
                          <small
                            class="form-text text-danger"
                            v-if="errors.has('file')"
                            v-text="errors.get('file')"
                          ></small>
                        </div>
                        <fieldset class="form-group">
                          <label for="tags">Tags</label>
                          <input-tag v-model="gallary_tags"></input-tag>
                        </fieldset>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button" 
                          class="btn btn-outline-dark border_radius_10"
                          data-dismiss="modal"  style="padding:8px 16px;"
                          @click="toggleModal()"
                        >
                          <span class="">Close</span>
                        </button>
                        <button
                          type="button"
                          class="btn btn-primary ml-1"
                          data-dismiss="modal"
                          @click="addUpdategallary()"
                        >
                          <span class="">Submit</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="All-center"
                role="tabpanel"
                aria-labelledby="All-tab-center"
              >
                <div class="card-body">
                  <div class="row">
                    <div
                      v-for="gallary in gallaries"
                      class="
                        col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3
                        loadingmore
                      "
                      style="display: block"
                      @click="setSelectedImages(gallary.id)"
                    >
                      <div
                        class="thumbnail text-center mb-4 card_custom_effect"
                        :class="{ active: selectedImages.includes(gallary.id) }"
                      >
                        <div class="detail-link">
                          <router-link
                            :to="'/admin/media/' + gallary.id"
                            class="
                              btn btn-link
                              d-flex
                              justify-content-center
                              align-items-center
                              flex-column
                            "
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              version="1.1"
                              x="0px"
                              y="0px"
                              width="512px"
                              height="512px"
                              viewBox="0 0 512 512"
                              enable-background="new 0 0 512 512"
                              xml:space="preserve"
                            >
                              <g>
                                <g>
                                  <g>
                                    <path
                                      d="M508.745,246.041c-4.574-6.257-113.558-153.206-252.748-153.206     c-139.191,0-248.179,146.949-252.748,153.2c-4.332,5.936-4.332,13.986,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206     c139.19,0,248.174-146.95,252.748-153.201C513.083,260.027,513.083,251.971,508.745,246.041z M255.997,385.406     c-102.529,0-191.33-97.533-217.617-129.418c26.253-31.913,114.868-129.395,217.617-129.395     c102.524,0,191.319,97.516,217.617,129.418C447.361,287.923,358.746,385.406,255.997,385.406z"
                                    ></path>
                                  </g>
                                </g>
                                <g>
                                  <g>
                                    <path
                                      d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275     c55.842,0,101.274-45.434,101.274-101.275S311.839,154.725,255.997,154.725z M255.997,323.516     c-37.23,0-67.516-30.287-67.516-67.516c0-37.229,30.287-67.516,67.516-67.516c37.229,0,67.516,30.287,67.516,67.516     C323.513,293.229,293.227,323.516,255.997,323.516z"
                                    ></path>
                                  </g>
                                </g>
                              </g>
                            </svg>
                            View Detail
                          </router-link>
                        </div>
                        <div class="thumbnail-imges">
                          <a
                            class="img-select d-block"
                            href="javascript:void(0);"
                          >
                            <img
                              class="img-fluid"
                              :src="'/gallary/' + gallary.gallary_name"
                              alt="image"
                            />
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <nav aria-label="navigation">
                        <div
                          class="
                            pagination
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="mr-2 text-dark">
                            (Showing result
                            <span id="numbering">{{ meta.to }}</span> out of
                            <span id="totalnumber">{{ meta.total }}</span> )
                          </div>
                          <a
                            class="btn btn-secondary white border_radius_10"
                            href="#"
                            id="loadMore"
                            @click="setLimit()"
                            >Load More</a
                          >
                        </div>
                      </nav>
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
import ErrorHandling from "./../../ErrorHandling";

export default {
  data() {
    return {
      meta: {},
      limit: 20,
      error_message: "",
      edit: false,
      actions: false,
      pagination: {},
      request_method: "",
      gallaries: [],
      tags: [],
      tag_id: "",
      token: [],
      selectedImages: [],
      supported_extension: [
        "jpg",
        "jpeg",
        "png",
        "JPEG",
        "PNG",
        "JPG",
        "gif",
        "GIF",
      ],
      file: [],
      gallary_tags: [],
      showModal: false,
      url: "/default.png",
      errors: new ErrorHandling(),
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },

  methods: {
    check: function (e) {
      if (e.target.checked) {
        this.selectedImages = [];
        for (var i = 0; i < this.gallaries.length; i++) {
          this.selectedImages.push(this.gallaries[i].id);
        }
      } else {
        this.selectedImages = [];
      }
    },
    setSelectedImages(gallary_id) {
      console.log(gallary_id);
      if (this.selectedImages.includes(gallary_id)) {
        const index = this.selectedImages.indexOf(gallary_id);
        if (index > -1) {
          this.selectedImages.splice(index, 1);
        }
      } else {
        this.selectedImages.push(gallary_id);
      }
    },
    fetchtags() {
      axios.get("/api/admin/tag", this.token).then((res) => {
        this.tags = res.data.data;
      });
    },
    gallaryByTagId(tag_id) {
      this.tag_id = tag_id;
      this.fetchgallaries();
    },
    fetchgallaries() {
      this.$parent.loading = true;
      let vm = this;
      var page_url = page_url || "/api/admin/gallary";
      var arr = page_url.split("?");

      if (arr.length > 1) {
        page_url += "&limit=" + this.limit;
      } else {
        page_url += "?limit=" + this.limit;
      }
      if (this.tag_id != null) {
        page_url += "&tag_id=" + this.tag_id;
      }
      page_url += "&getDetail=1&getGallaryTag=1&sortBy=id&sortType=DESC";
      var responseData = {};

      axios
        .get(page_url, this.token)
        .then((res) => {
          this.gallaries = res.data.data;
          this.meta = res.data.meta;
        })
        .finally(() => (this.$parent.loading = false));
    },
    deletegallary() {
      var token = localStorage.getItem("token");
      if (this.selectedImages.length > 0) {
        if (confirm("Are You Sure?")) {
          this.$parent.loading = true;
          axios
            .delete(`/api/admin/gallary`, {
              data: {
                id: this.selectedImages,
              },
              headers: {
                Authorization: `Bearer ${token}`,
              },
            })
            .then((res) => {
              if (res.data.status == "Success") {
                this.selectedImages = [];
                this.$toaster.success(res.data.message);
                this.fetchgallaries();
              } else {
                this.$toaster.error(res.data.message);
              }
            })
            .catch((error) => {
              if (error.response.status == 422) {
                if (error.response.data.status == "Error") {
                  this.$toaster.error(error.response.data.message);
                }
              }
            })
            .finally(() => (this.$parent.loading = false));
        }
      }else{
            this.$toaster.error("Please Select Atleast One Image To Delete");
        }
    },
    onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length) return;
      // this.createImage(files[0]);
      var fileName = files[0].name;
      var re = /(?:\.([^.]+))?$/;
      var ext = re.exec(fileName)[1];
      if (this.supported_extension.indexOf(ext) == -1) {
        this.$toaster.error("We accept only JPG, PNG and GIF files.");
        return;
      }
      this.file = files[0];

      this.url = URL.createObjectURL(files[0]);
    },
    addUpdategallary() {
      this.$parent.loading = true;
      var url = "/api/admin/gallary";
      this.request_method = "post";
      var formData = new FormData();
      formData.append("file", this.file);
      for (var i = 0; i < this.gallary_tags.length; i++) {
        formData.append("gallary_tags[]", this.gallary_tags[i]);
      }

      axios[this.request_method](url, formData, this.token)
        .then((res) => {
          if (res.data.status == "Success") {
            this.$toaster.success(res.data.message);
            this.clearForm();
            this.fetchgallaries();
          } else {
            this.$toaster.error(res.data.message);
          }
        })
        .catch((error) => {
          this.error_message = "";
          this.errors = new ErrorHandling();
          if (error.response.status == 422) {
            if (error.response.data.status == "Error") {
              this.error_message = error.response.data.message;
            } else {
              this.errors.record(error.response.data.errors);
            }
          }
        })
        .finally(() => (this.$parent.loading = false));
    },
    clearForm() {
      this.showModal = false;
      this.file = "";
      this.gallary_tags = [];
      this.selectedImages = [];
      this.url = "/default.png";
    },
    sorting(sortBy) {
      this.sortBy = sortBy;
      this.sortType =
        this.sortType == "asc" || this.sortType == "ASC"
          ? (this.sortType = "desc")
          : (this.sortType = "asc");
      this.fetchgallaries();
    },
    toggleModal() {
      this.showModal = !this.showModal;
    },
    setLimit() {
      var limit = this.limit;
      this.limit = limit + 10;
      this.fetchgallaries();
    },
  },
  mounted() {
    var token = localStorage.getItem("token");
    this.token = {
      headers: {
        Authorization: `Bearer ${token}`,
      },
    };
    this.fetchgallaries();
    this.fetchtags();
  },
};
</script>
<style scoped>
/*.gallary-categories ul li a {
  width: 100px;
  border-radius: 0px !important;
  text-align: center;
  background: #e9ecf1;
  border-right: 1px solid #c1c4c9;
  padding: 13px 15px !important;
  cursor: pointer;
  transition: all 0.2s ease;
}*/
/*.gallary-categories ul li:first-child a{
  border-top-left-radius: 0px !important;
    border-bottom-left-radius: 0px !important;
}
.gallary-categories ul li:last-child a {
  border-right: 0px;
  border-top-right-radius: 0px !important;
  border-bottom-right-radius: 0px !important;
}*/
.gallary-categories ul li a{
  width: 100px;
  /* border-radius: 0px !important; */
  text-align: center;
  background: transparent;
  border: 1px solid #8c83f2;
  padding: 8px 15px !important;
  cursor: pointer;
  transition: all 0.2s ease;
  margin: 10px;
  border-radius: 20px !important;
  color: #8c83f2 !important;
}
.thumbnail{
  box-shadow: 0 4px 24px 0 rgb(177 177 177 / 50%);
  border-color: rgb(177 177 177 / 50%)!important;
}
.thumbnail.active{
  /*box-shadow: 0 4px 24px 0 #ae69f58a;*/
  border-color: #ae69f5 !important;
}
.thumbnail:hover {
  box-shadow: 0 4px 24px 0 #ae69f58a;
  border-color: #ae69f5 !important;
}

.checkbox-input:checked {
  accent-color: #7367f0;
  border-color: #7367f0 !important;
}
.checkbox-input {
  width: 1.5rem;
  height: 1.5rem;
}
.nav .nav-link.active, .nav-pills .show > .nav-link{
  background: linear-gradient(118deg, #7367f0, rgba(115, 103, 240, 0.7)) !important;
  box-shadow:0 0 17px 1px rgb(115 103 240 / 39%) !important;
  color: #fff !important;
  border-color: #8c83f2 !important;
 
}
.icons .btn-danger:hover{
  box-shadow: 0 8px 25px -8px #ea5455;
}
.modal-dialog .modal-footer .btn-outline-dark:hover{
  background-color: rgba(75, 75, 75, 0.04) !important;
  color: #4b4b4b !important;
}
button.close.btn.btn-icon {
  transform: translate(18px, -10px);
  padding: 0.5rem;
  box-shadow: 0 5px 20px 0 rgb(34 41 47 / 10%);
  border-radius: 0.357rem;
  background-color: #fff;
  opacity: 1;
  transition: all 0.23s ease 0.1s;
  position: relative;
}
.btn.btn-hover-primary:hover:not(.btn-text):not(:disabled):not(.disabled), .btn.btn-hover-primary:focus:not(.btn-text), .btn.btn-hover-primary.focus:not(.btn-text) {
  color: #000 !important;
  background-color: #fff !important;
  border-color: transparent !important;
}
button.close.btn:hover {
  transform: translate(15px, -2px) !important;
  opacity: 1 !important;
}
/*.gallary-categories ul li{
  position: relative;
}
.gallary-categories ul li a{
  background-color: transparent;
  border-right: none;
  position: relative;
}*/

/*@media screen and (max-width:1180px) {
  .small_screen_view{
    display: block !important;
  }
  .gallary-categories{
    display: none;
  }  
}
.small_screen_view .dropdown{
  width: 100%;
  max-width:70%;
  margin: 0 auto;
} 
.small_screen_view .btn{
     width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 25px;
    background: linear-gradient(118deg, #7367f0, rgba(115, 103, 240, 0.7)) !important;
    box-shadow: 0 0 10px 1px rgb(115 103 240 / 70%) !important;
    color: #fff !important;
}
.small_screen_view .dropdown-menu.show{
  width: 100%;
  border-radius: 10px; 
}*/
@media screen and (max-width:575px) {
  .gallary-categories ul li{
    width: 100%;
  }
  .gallary-categories ul li:last-child a{
    border-top-right-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
  }
  .gallary-categories ul li a {
    width: 100%;
    border-radius: 0px !important;
    text-align: left;
    border-right:none;
    
  }
    .gallary-categories ul li:first-child a {
      border-top-left-radius: 0px !important;
      border-bottom-left-radius: 0px !important;
  }
}
</style>