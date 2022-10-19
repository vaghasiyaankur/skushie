<template>
<div class="container-fluid h-100 bg-image" style="background-image: url(/assets/images/misc/bg-login.png);">
		<div class="d-flex justify-content-center align-items-center h-100">
			<div class="row w-100 justify-content-center">
				<div class="col-12 col-md-8 col-lg-6 col-xl-4">
					<div class="card card-custom login_card gutter-b bg-white border-0 mb-0 p-4 login-card">
						<div
							class="card-header align-items-center  justify-content-center border-0 h-100px flex-column">
							<div class="card-title mb-0">
								<h3 class="card-label font-weight-bold mb-0 text-body">
									<img src="/assets/images/misc/logo.png" alt="logo">
								</h3>

							</div>
							<h5 class="font-size-h5 mb-0 mt-3 text-dark">
								Please login to your account.
							</h5>

						</div>
						<div class="card-body p-0">
								<!-- <p class="help is-danger text-danger text-center">{{ error_message }}</p> -->
							<form id="myform" class="pb-5 pt-5" @submit.prevent="login">
								<div class="form-group  row">
									<!-- <div class="col-lg-2 col-3 ">
										<label for="email" class="mb-0 text-dark">
											<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-person"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd"
													d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
											</svg>
										</label>
									</div>									
									<div class="col-lg-10 col-9 pl-0">
										<input type="email" name="email"
											class="form-control bg-transparent text-dark border-0 p-0 h-20px font-size-h5"
											placeholder="example@mail.com" id="email" v-model="email"
											aria-describedby="emailHelp">
											<span class="help is-danger text-danger" v-if="errors.has('email')" v-text="errors.get('email')"></span>
									</div> -->
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
								<!-- <div class="form-group row ">
										<div class="col-lg-2 col-3 ">
											<label for="password" class="mb-0 text-dark">
												<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-lock"
													fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd"
														d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z" />
												</svg>
											</label>
										</div>
										<div class="col-lg-10 col-9 pl-0">
											<input type="password" name="password" placeholder="......."
												class="form-control text-dark bg-transparent font-size-h4 border-0 p-0 h-20px"
												id="password" v-model="password">
												<span class="help is-danger text-danger" v-if="errors.has('password')" v-text="errors.get('password')"></span>
												<span class="help is-danger text-danger" v-if="error_message">
													{{ error_message }}
												</span>
										</div>

								</div> -->
								<!-- <div class="form-group row align-items-center justify-content-between">
									<div class="col-6">
										<div class="form-check pl-4">
											<input type="checkbox" class="form-check-input ml--4" id="exampleCheck1">
											<label class="form-check-label text-dark" for="exampleCheck1">Remember
												me</label>
										</div>
									</div>

									<div class="col-6 text-right">
										<a href="#">Forgot Password?</a>
									</div>

								</div> -->

								<br /><br />
								<button type="submit" class="btn btn-primary text-white font-weight-bold w-100 py-2">
									Login
								</button>
							</form>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</template>

<script type="text/javascript">
import ErrorHandling from './../../ErrorHandling'
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
					console.log(res.data.user.warehouses);
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
.login_card .input-group-text {
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
}
.login_card	{
	width:100%;
	max-width: 400px !important;
	margin: 0 auto;
}
.input-group:hover .input-group-text,.input-group:hover .form-control-merge{
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

</style>