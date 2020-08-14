<template>
	<div>
		<div class="row">
			<div class="col-lg-12">
				<button type="button" class="btn btn-primary btn-md mb-2" @click="userList">Users List</button>
			</div>
		</div>		
	  <div class="card">
		<div class="card-header">
		  <h3 class="card-title">User Form</h3>

		  <div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
			  <i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
			  <i class="fas fa-times"></i></button>
		  </div>
		</div>
		<div class="card-body">
			<form role="form">
			  <div class="row">
				<div class="col-sm-6">
				  <!-- text input -->
				  <div class="form-group has-error">
					<label>First Name</label>
					<input type="text" class="form-control" v-model.trim="$v.user.firstname.$model" :class="{'is-invalid': $v.user.firstname.$error}">
					<div class="invalid-feedback">First name is required</div>
				  </div>
				</div>
				<div class="col-sm-6">
				  <!-- text input -->
				  <div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control"v-model.trim="$v.user.lastname.$model" :class="{'is-invalid': $v.user.lastname.$error}">
					<div class="invalid-feedback">Last name is required</div>
				  </div>
				</div>				
			  </div>
			  <div class="row">
				<div class="col-sm-6">
				  <!-- text input -->
				  <div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" v-model.trim="$v.user.email.$model" :class="{'is-invalid': $v.user.email.$error}">
					<div class="invalid-feedback">Valid email is required</div>
				  </div>
				</div>
				<div class="col-sm-6">
				  <!-- text input -->
				  <div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" v-model.trim="$v.user.username.$model" :class="{'is-invalid': $v.user.username.$error}">
					<div class="invalid-feedback">Username is required</div>
				  </div>
				</div>				
			  </div>			  
			</form>		
		</div>
		<!-- /.card-body -->
		<div class="card-footer">
			<button type="button" class="btn btn-info btn-md mb-2" @click="validateForm">{{(oldUser)?'Update':'Save'}}</button>
			<button type="button" class="btn btn-warning btn-md mb-2" @click="userList">{{(oldUser)?'Close':'Cancel'}}</button>
		</div>
		<!-- /.card-footer-->
	  </div>		
	</div>
</template>

<style>

</style>

<script>

	import { required, email, minLength, requiredIf, requiredUnless } from "vuelidate/lib/validators";
	import api from '../mixins/api.js'

	import Swal from 'sweetalert2'

	export default {
	
		mixins: [api],
		
		data() {
		
			return {
				user: {
					firstname: null,
					lastname: null,
					email: null,
					username: null
				}
			}
		
		},
		
		computed: {
		
			oldUser() {
			
				return this.$root.user_id != null
			
			}
		
		},
		
		validations: {
			user: {
				firstname: {required},
				lastname: {required},
				email: {required, email},
				username: {required}
			}
		},

		methods: {
		
			userList() {
				this.$root.currentComponent = 'users-list'			
			},
			
			validateForm() {
			
				this.$v.user.$touch()

				if (this.$v.user.$invalid) {
					
					Swal.fire({
					  title: 'Warning!',
					  text: 'Please fill up all required fields',
					  icon: 'warning',
					  confirmButtonText: 'Close'
					})
					
					return;
					
				}

				if (this.oldUser) this.updateUser()
				else this.saveUser()
			
			}
		
		},
	
		created() {
		
		},
		
		mounted() {
		
			if (this.oldUser) this.fetchUser()
		
		}
	
	}

</script>