<template>
<div class="form-group row">
        <div class="col-md-12">
            <fieldset class="form-group mb-3">
                <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="sociallite_login" id="sociallite_login"  @change="check($event)" v-bind:checked="loginCredential.sociallite_login == '1' ? 'checked':'' "><label class="custom-control-label" for="sociallite_login">SocialLite Allow</label></div>
            </fieldset>
        </div>
        <div class="col-md-6 mb-3">
            <label>Facebook Client Id</label>
            <fieldset class="form-group mb-3">
                <input type="text" class="form-control border-dark" placeholder="" v-model="loginCredential.facebook_client_id" ref="site_name">
            </fieldset>
        </div>
        <div class="col-md-6 mb-3">
            <label>Facebook Client Secret</label>
            <fieldset class="form-group mb-3">
                <input type="text" class="form-control border-dark" placeholder="" v-model="loginCredential.facebook_client_secret" ref="site_name">
            </fieldset>
        </div>
        <div class="col-md-6 mb-3">
            <label>Facebook Redirect</label>
            <fieldset class="form-group mb-3">
                <input type="text" class="form-control border-dark" placeholder="" v-model="loginCredential.facebook_redirect" ref="site_name">
            </fieldset>
        </div>
        <div class="col-md-6 mb-3">
            <label>Google Client Id</label>
            <fieldset class="form-group mb-3">
                <input type="text" class="form-control border-dark" placeholder="" v-model="loginCredential.google_client_id" ref="site_name">
            </fieldset>
        </div>
        <div class="col-md-6 mb-3">
            <label>Google Client Secret</label>
            <fieldset class="form-group mb-3">
                <input type="text" class="form-control border-dark" placeholder="" v-model="loginCredential.google_client_secret" ref="site_name">
            </fieldset>
        </div>
        <div class="col-md-6 mb-3">
            <label>Google Redirect</label>
            <fieldset class="form-group mb-3">
                <input type="text" class="form-control border-dark" placeholder="" v-model="loginCredential.google_redirect" ref="site_name">
            </fieldset>
        </div>
        <div class="col-md-12 d-flex justify-content-end submit_button">
            <br />
            <button @click="updateSetting()" type="submit" class="btn btn-primary">Submit</button>
        </div>

</div>
</template>

<script>
    import ErrorHandling from './../../../ErrorHandling'
    export default {
        data() {
            return {
                loginCredential: {
                    sociallite_login:'0',
                    facebook_client_id:'0',
                    facebook_client_secret:'0',
                    facebook_redirect:'0',
                    google_client_id:'0',
                    google_client_secret:'0',
                    google_redirect:'0'
                },
                errors: new ErrorHandling(),
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            };
        },

        methods: {
            check: function(e) {
                this.loginCredential[e.target.name] = this.loginCredential[e.target.name] == '1' ? '0' : '1';
            },
            fetchSetting() {
                this.$emit('updateLoadingState', true);
                var token = localStorage.getItem('token');
                const config = {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                };
                var responseData = {};

                axios.get('/api/admin/setting?type=login_credential', config)
                    .then(res => {
                        for (var i = 0; i < res.data.data.length; i++) {
                            Object.assign(responseData, {
                                [res.data.data[i].setting_key]: res.data.data[i].setting_value
                            });
                        }
                        console.log('response datass', responseData);
                        this.loginCredential = responseData;
                    })
                    .finally(() => (this.$emit('updateLoadingState', false)));
            },

            updateSetting() {
                this.$emit('updateLoadingState', true);
                var loginCredential = Object.entries(this.loginCredential);
                var key = [];
                var value = [];

                for (var i = 0; i < loginCredential.length; i++) {
                    key.push(loginCredential[i][0]);
                    value.push(loginCredential[i][1])
                }

                // console.log(key, value);

                var token = localStorage.getItem('token');
                const config = {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                };

                axios.post('/api/admin/setting/login_credential', {
                        _method: 'PUT',
                        key,
                        value
                    }, config)
                    .then(res => {
                        if (res.data.status == "Success") {
                            this.$toaster.success('Settings has been updated successfully')
                        } else if (res.data.status == 'Error') {
                            this.$toaster.error(res.data.message)
                        }

                    })
                    .catch(err => {
                        if (err.response.data.status == 'Error') {
                            this.$toaster.error(err.response.data.message)
                        }
                    })
                    .finally(() => (this.$emit('updateLoadingState', false)));

            }
        },
        mounted() {
            this.fetchSetting();
        }
    };
</script>
<style scoped>
@media screen and (max-width:575px) {
    .submit_button .btn{
        width: 100%;
    }
}
.custom-control-label{
    font-size: 16px;
    padding-left: 10px;
}
.custom-control{
    min-height: 2.5rem;
    padding-left: 2.5rem;
}
.custom-control-label::before {
    position: absolute;
    top: 0rem;
    left: -1.8rem;
    display: block;
    width: 1.5rem;
    height: 1.5rem;
    pointer-events: none;
    content: "";
    background-color: #fff;
    border: #adb5bd solid 1px;
    margin-bottom: 10px;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after{
    background-size: 105%;
}
.custom-control-input:checked ~ .custom-control-label::before{
    background-color: #7367f0;
    color: #fff;
    border-color: #7367f0;
    box-shadow: 0 2px 4px 0 rgb(115 103 240 / 40%);
}
/*.custom-control-input:not(:disabled):checked, .custom-control-input:not(:disabled):focus,.custom-control-input:not(:disabled):active{
      background-color: #7367f0;
    color: #fff;
    border-color: #7367f0;
    box-shadow: 0 2px 4px 0 rgb(115 103 240 / 40%);
}*/

</style>
