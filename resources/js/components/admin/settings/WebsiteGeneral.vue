<template>
<div class="form-group row">
    <!-- <div class="col-md-6">
        <label>Show site_name_or_logo or Logo</label>
        <fieldset class="form-group mb-3">
            <input type="text" class="form-control border-dark" placeholder="" v-model="webgeneral.site_name_or_logo" ref="site_name_or_logo">
        </fieldset>
    </div> -->
    <div class="col-12 mb-3">
        <div class="col-md-6  pl-0">
            <label>Website Name</label>
            <fieldset class="form-group mb-3">
                <input type="text" class="form-control border-dark" placeholder="" v-model="webgeneral.site_name" ref="site_name">
            </fieldset>
        </div>
    </div>

	 <div class="col-md-6 mb-3">
        <label>Website Logo</label>
        <fieldset class="form-group mb-3">
            <div class="form-group row align-items-center">
                <div class="col-lg-5">
                    <button type="button" class="btn btn-outline-primary w-100" @click="toggleImageSelect()">Select Logo </button>
                    <!-- <small id="textHelp" class="form-text text-muted">Select Logo from gallary.</small> -->
                    <small class="form-text text-danger" v-if="errors.has('gallary_id')" v-text="errors.get('gallary_id')"></small>
                </div>
                <div class="col-lg-7">
                    <div class="website_logo_img">
                        <img v-if="webgeneral.site_logo != ''" :src="webgeneral.site_logo" style="width:100px;height:100px;"/>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>

	<div class="col-md-6 mb-3">
        <label>FavIcon Logo</label>
        <fieldset class="form-group mb-3">
        <div class="form-group row align-items-center">
            <div class="col-lg-5">
                <button type="button" class="btn  w-100 btn-outline-primary" @click="toggleImageSelectIcon()">Select Favicon </button>
                <!-- <small id="textHelp" class="form-text text-muted">Select Favicon from gallary.</small> -->
                <small class="form-text text-danger" v-if="errors.has('icon')" v-text="errors.get('icon')"></small>
            </div>
            <div class="col-lg-7">
                <div class="website_logo_img">
                    <img v-if="webgeneral.favicon != ''" :src="webgeneral.favicon" style="width:100px;height:100px;"/>
                </div>
            </div>
        </div>
        </fieldset>
    </div>
        <div class="col-md-6 mb-3">
            <label>Facebook URL</label>
            <fieldset class="form-group mb-3">
                <input type="text" class="form-control border-dark" placeholder="" v-model="webgeneral.facebook_url" ref="facebook_url">
            </fieldset>
        </div>

        <div class="col-md-6 mb-3">
            <label>Google URL</label>
            <fieldset class="form-group mb-3">
                <input type="text" class="form-control border-dark" placeholder="" v-model="webgeneral.google_url" ref="google_url">
            </fieldset>
        </div>

        <div class="col-md-6 mb-3">
            <label>Twitter URL</label>
            <fieldset class="form-group mb-3">
                <input type="email" class="form-control border-dark" placeholder="" v-model="webgeneral.twitter_url" ref="twitter_url">
            </fieldset>
        </div>

        <div class="col-md-6 mb-3">
            <label>Linked URL</label>
            <fieldset class="form-group mb-3">
                <input type="email" class="form-control border-dark" placeholder="" v-model="webgeneral.linkedin_url" ref="linkedin_url">
            </fieldset>
        </div>

        <div class="col-md-6 mb-3">
            <label>Instagram URL</label>
            <fieldset class="form-group mb-3">
                <input type="email" class="form-control border-dark" placeholder="" v-model="webgeneral.instagram_url" ref="instagram_url">
            </fieldset>
        </div>

        <div class="col-md-6 mb-3">
            <label>Allow Cookies</label>
            <fieldset class="form-group mb-3">
                <input type="email" class="form-control border-dark" placeholder="" v-model="webgeneral.allow_cookies" ref="allow_cookies">
            </fieldset>
        </div>
    <div class="col-md-12 d-flex justify-content-end submit_button">
		<br />
        <button @click="updateSetting()" type="submit" class="btn btn-primary ">Submit</button>
    </div>
    <attach-image @toggleImageSelect="toggleImageSelect" :showModal="showModal" @setImage="setImage"/>
    <attach-image @toggleImageSelect="toggleImageSelectIcon" :showModal="showModalIcon" @setImage="setIcon"/>

</div>
</template>

<script>
import ErrorHandling from './../../../ErrorHandling'
export default {
    data() {
        return {
            webgeneral: {
                site_name_or_logo: "",
                site_name: "",
                site_logo: "",
                favicon: "",
                facebook_url: "",
                google_url: "",
                twitter_url: "",
                linkedin_url: "",
                instagram_url: "",

                allow_cookies: ""
            },
            showModal:false,
            showModalIcon:false,
            errors: new ErrorHandling(),
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        };
    },

    methods: {
        fetchSetting() {
            this.$emit('updateLoadingState', true);

            var token = localStorage.getItem('token');
            const config = {
                headers: {
                    Authorization: `Bearer ${token}`
                }
            };
            var responseData = {};

            axios.get('/api/admin/setting?type=website_general', config)
                .then(res => {
                    for (var i = 0; i < res.data.data.length; i++) {
                        Object.assign(responseData, {
                            [res.data.data[i].setting_key]: res.data.data[i].setting_value
                        });
                    }
                    console.log('response datass', responseData);
                    this.webgeneral = responseData;
                })
                .finally(() => (this.$emit('updateLoadingState', false)));
        },

        updateSetting() {
            this.$emit('updateLoadingState', true);
            var webgeneral = Object.entries(this.webgeneral);
            var key = [];
            var value = [];

            for (var i = 0; i < webgeneral.length; i++) {
                key.push(webgeneral[i][0]);
                value.push(webgeneral[i][1])
            }
            

            // console.log(key, value);

            var token = localStorage.getItem('token');
            const config = {
                headers: {
                    Authorization: `Bearer ${token}`
                }
            };

            axios.post('/api/admin/setting/website_general', {
                    _method: 'PUT',
                    key,
                    value
                }, config)
                .then(res => {
                    if (res.data.status == "Success") {
						this.$toaster.success('Settings has been updated successfully')
                    }
                    else if(res.data.status == 'Error'){
                        this.$toaster.error(res.data.message)
                    }
                    
                })
                .catch(err => {
                    if(err.response.data.status == 'Error'){
                        this.$toaster.error(err.response.data.message)
                    }
                })
                .finally(() => (this.$emit('updateLoadingState', false)));

        },
        toggleImageSelect(){
            this.showModal = !this.showModal;
        },
        setImage(gallary){
           this.webgeneral.site_logo = gallary.gallary_path;
        },
        toggleImageSelectIcon(){
            this.showModalIcon = !this.showModalIcon;
        },
        setIcon(gallary){
            this.webgeneral.favicon = gallary.gallary_path;
        },
    },
    mounted() {
        this.fetchSetting();
    }
};
</script>
<style scoped>
.website_logo_img{
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
    padding: 20px;
    box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);
    border-radius: 10px;
    margin-top: 10px;
}
@media screen and (max-width:575px) {
    .submit_button .btn{
        width: 100%;
    }
}
</style>
