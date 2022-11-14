<template>
	<div class="login h-100">
		<div class="logo-img">
			<img src="/assets/images/misc/logo.png" alt="logo" class="img-fluid"> 
		</div>
		<div class="row h-100 ">
			<div class="col-lg-8 d-none d-lg-block">
				<div class="card-custom-img d-flex justify-content-center align-items-center h-100">
					<img src="/assets/images/misc/login-v2.svg" alt="logo" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="card card-custom login_card gutter-b bg-white border-0 mb-0 p-4 login-card">
					<div class="card-body p-0 d-flex justify-content-center align-items-center">
						<form id="myform" class="pb-5 pt-5 from" @submit.prevent="login">
							<div class="from-contact">
								<h2 class="card-title fw-bold mb-3">Welcome to Namal! 👋</h2>
								<p class="card-text mb-3">Please sign-in to your account and start the adventure</p>
							</div>
							<div class="form-group  row">
								
								<div class="mb-4 col-12">
									<label for="email" class="form-label">Email</label>
									<input type="email" name="email" class="form-control" id="email" v-model="email"  placeholder="example@mail.com"  tabindex="1" autofocus="">
									<span class="help is-danger text-danger" v-if="errors.has('email')" v-text="errors.get('email')"></span>
								</div>
								<div class="col-12">
									<div class="d-flex justify-content-between">
										<label class="form-label" for="login-password">Password</label>
									
									</div>
									<div class="input-group input-group-merge form-password-toggle">
										<input type="password" class="form-control form-control-merge" id="password" v-model="password" name="password" tabindex="2" placeholder="············" >
										<span class="input-group-text cursor-pointer">
											<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
										</span>
										<span class="help is-danger text-danger" v-if="errors.has('password')" v-text="errors.get('password')"></span>
											<span class="help is-danger text-danger" v-if="error_message">
												{{ error_message }}
											</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary text-white font-weight-bold w-100 py-2">
								Login
							</button>
						</form>
					</div>
                </div>
			</div>
		</div>
	</div>
</template>

<script type="text/javascript">
import ErrorHandling from './../../ErrorHandling'
import Notification from './partials/Notification';
	export default {
		methods: {
			login(){
				localStorage.removeItem('token');
				localStorage.removeItem('loggedIn');
				localStorage.removeItem('email');
				localStorage.removeItem('name');
				localStorage.removeItem('user_id');

				localStorage.removeItem('permissions');

				this.$parent.loading = true;
				axios.post('/api/login',{
					email: this.email,
					password: this.password
				})
				.then(res => {
					if (res.data.status == 'Success') {
						var warehouse = [];
						
						res.data.user.warehouses.forEach(w => {
							warehouse.push(w.id)
						});
						localStorage.setItem('token', res.data.token);
						localStorage.setItem('loggedIn', 1);
						localStorage.setItem('email',res.data.user.email);
						localStorage.setItem('user_id',res.data.user.id);

						localStorage.setItem('name',res.data.user.name);
						localStorage.setItem('permissions',res.data.user_permisions);

						const content = {
							component: Notification,
							props: {
								message: "I'm a toast!",
								type : 'success'
							},
						}
						this.$toast(content);

						this.$router.push('/admin/dashboard');
					}
					else if (res.data.status == 'Warning') {
						var warehouse = [];
						res.data.user.warehouses.forEach(w => {
							warehouse.push(w.id)
						});
						localStorage.setItem('token', res.data.token);
						localStorage.setItem('loggedIn', 1);
						localStorage.setItem('email',res.data.user.email);
						localStorage.setItem('user_id',res.data.user.id);

						localStorage.setItem('name',res.data.user.name);
						localStorage.setItem('permissions',res.data.user_permisions);
						

						this.$router.push('/admin/dashboard');
					}
					else if (res.data.status = 'Error') {
						this.error_message = res.data.message;
					}
				}).catch(error => {
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
			}
		},
		data(){
			return {
				email: "",
				password: "",
				error_message: "",
				errors: new ErrorHandling(),
			}
		}
	}
</script>
<style scoped>
/*.login_card .input-group-text {
    display: flex;
    align-items: center;
    padding: 0.571rem 1rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.45;
    color: #6e6b7b;
    text-align: center;
    white-space: nowrap;
    background-color: #fff;
    border: 1px solid #d8d6de;
    border-radius: 0.357rem;
}
.login_card .input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu), .login_card .input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n + 3) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.login_card .input-group-merge .form-control:not(:last-child) {
    padding-right: 0;
    border-right: 0;
}
.login_card .input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
    margin-left: -1px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}*/

/*.input-group:hover .input-group-text,.input-group:hover .form-control-merge{
	border-color: #7367f0 !important;
}
.form-control:hover{
	box-shadow: none !important;
}
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active  {
    -webkit-box-shadow: 0 0 0 30px white inset !important;
}
*/
.login_card	{
	width:100%;
	/*max-width: 400px !important;*/
	margin: 0 auto;
	height: 100%;
}
.login{
	position: relative;
	overflow: hidden;
	background-color: #f8f8f8;
}
.login .logo-img{
	position: absolute;
	top: 50px;
	left: 150px;
}
.login .from-contact{
	padding-bottom: 30px;
}
.login .card-custom{
	padding: 0 50px !important;
}
</style>