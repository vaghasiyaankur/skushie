<template>
<div class="form-group row">
    <div class="col-12">
        <ul class="list-unstyled mb-0 login-forms">
            <li class="mr-2 mb-1">
                <fieldset>
                    <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="login_signup_form" id="webloginsignup1"  @change="check($event)" v-bind:checked="apploginsignup.login_signup_form == '1' ? 'checked':''"><label class="custom-control-label" for="webloginsignup1">Login/Signup Form</label></div>
                </fieldset>
            </li>
            <li class="mr-2 mb-1">
                <fieldset>
                    <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="authenticate_with_email_password" id="webloginsignup2"  @change="check($event)" v-bind:checked="apploginsignup.authenticate_with_email_password == '1' ? 'checked':'' "><label class="custom-control-label" for="webloginsignup2">Email</label></div>
                </fieldset>
            </li>
            <li class="mr-2 mb-1">
                <fieldset>
                    <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="authenticate_with_phone" id="webloginsignup3"  @change="check($event)" v-bind:checked="apploginsignup.authenticate_with_phone == '1' ? 'checked':''"><label class="custom-control-label" for="webloginsignup3">Phone</label></div>
                </fieldset>
            </li>
            <li class="mr-2 mb-1">
                <fieldset>
                    <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="authenticate_with_facebook" id="webloginsignup4"  @change="check($event)" v-bind:checked="apploginsignup.authenticate_with_facebook == '1' ? 'checked':''"><label class="custom-control-label" for="webloginsignup4">Facebook</label></div>
                </fieldset>
            </li>
            <li class="mr-2 mb-1">
                <fieldset>
                    <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="authenticate_with_google" id="webloginsignup5"  @change="check($event)" v-bind:checked="apploginsignup.authenticate_with_google == '1' ? 'checked':''"><label class="custom-control-label" for="webloginsignup5" >Google</label></div>
                </fieldset>
            </li>
            <li class="mr-2 mb-1">
                <fieldset>
                    <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" name="authenticate_with_guest_checkout" id="webloginsignup6" @change="check($event)" v-bind:checked="apploginsignup.authenticate_with_guest_checkout == '1' ? 'checked':''"><label class="custom-control-label" for="webloginsignup6" >Guest Checkout</label></div>
                </fieldset>
            </li>
          
        </ul>
        <div class="col-md-12 d-flex justify-content-end submit_button px-0 mt-3">
            <br />
            <button @click="updateSetting()" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</div>
</template>

<script>
import ErrorHandling from './../../../ErrorHandling'
export default {
    data() {
        return {
            apploginsignup: {
                login_signup_form: '0',
                authenticate_with_email_password: '0',
                authenticate_with_phone: '0',
                authenticate_with_facebook: '0',
                authenticate_with_google:'0',
                authenticate_with_guest_checkout:'0'
            },
            errors: new ErrorHandling(),
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        };
    },

    methods: {
        check: function(e) {
            this.apploginsignup[e.target.name] = this.apploginsignup[e.target.name] == '1' ? '0' : "1";
        },
        fetchSetting() {
            this.$emit('updateLoadingState', true)
            var token = localStorage.getItem('token');
            const config = {
                headers: {
                    Authorization: `Bearer ${token}`
                }
            };
            var responseData = {};

            axios.get('/api/admin/setting?type=app_login_signup', config)
                .then(res => {
                    for (var i = 0; i < res.data.data.length; i++) {
                        Object.assign(responseData, {
                            [res.data.data[i].setting_key]: res.data.data[i].setting_value
                        });
                    }
                    console.log('response datass', responseData);
                    this.apploginsignup = responseData;
                })
                .finally(() => (this.$emit('updateLoadingState', false)));
        },

        updateSetting() {
            this.$emit('updateLoadingState', true)
            var apploginsignup = Object.entries(this.apploginsignup);
            var key = [];
            var value = [];

            for (var i = 0; i < apploginsignup.length; i++) {
                key.push(apploginsignup[i][0]);
                value.push(apploginsignup[i][1])
            }

            // console.log(key, value);

            var token = localStorage.getItem('token');
            const config = {
                headers: {
                    Authorization: `Bearer ${token}`
                }
            };

            axios.post('/api/admin/setting/app_login_signup', {
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
.login-forms {
    border: 1px solid #ebe9f1 !important;
    padding: 10px;
    border-radius: 10px;
}
@media screen and (max-width:575px) {
    .submit_button .bnt {
        width: 100%;
    }
}
.custom-control-label{
    padding-left: 10px;
}
.custom-control-input:checked ~ .custom-control-label::before {
    background-color: #7367f0;
    color: #fff;
    border-color: #7367f0;
    box-shadow: 0 2px 4px 0 rgb(115 103 240 / 40%);
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
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
    background-size: 105%;
}
</style>
