<template>
	<div>
		<div class="row">
			<div class="col-lg-12">
				<button type="button" class="btn btn-primary btn-md mb-2" @click="userForm(null)">New User</button>
			</div>
		</div>		
		  <div class="card">
			<div class="card-header">
			  <h3 class="card-title">Users</h3>

			  <div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				  <i class="fas fa-minus"></i></button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				  <i class="fas fa-times"></i></button>
			  </div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-4 offset-lg-8">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<button type="button" class="btn btn-default">Search</button>
							</div>
							<!-- /btn-group -->
							<input type="text" class="form-control" v-model="search">
						</div>				
					</div>			
				</div>			
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Id</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Username</th><th>Date Registered</th><th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(user,i) in filtered_users" :key="user.id">
							<td>{{ user.id }}</td>
							<td>{{ user.firstname }}</td>
							<td>{{ user.lastname }}</td>
							<td>{{ user.email }}</td>
							<td>{{ user.username  }}</td>
							<td>{{ user.created_at }}</td>
							<td>
								<button type="button" class="btn btn-primary btn-xs" @click="userForm(user)">Edit</button>
								<button type="button" class="btn btn-danger btn-xs" @click="confirmDelete(user)">Delete</button>
								  <b-modal :id="'confirm-delete-'+i" title="Confirmation" @ok="deleteUser(user)">
									Are you sure you want to delete this user?
								  </b-modal>								
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
			<div class="card-footer">

			</div>
			<!-- /.card-footer-->
		  </div>
	</div>
</template>

<style>

</style>

<script>

	import api from '../mixins/api.js'

	export default {
	
		mixins: [api],
	
		data() {
		
			return {
				search: '',
				users: []
			}
		
		},
		
		computed: {
		
			filtered_users() {
				
				return this.users.filter(user => {
				
					return user.firstname.toLowerCase().includes(this.search.toLowerCase()) ||
						   user.lastname.toLowerCase().includes(this.search.toLowerCase()) ||
						   user.email.toLowerCase().includes(this.search.toLowerCase())
				
				})
			
			},		
		
		},
	
		methods: {
		
			userForm(user) {

				if (user!=null) this.$root.user_id = user.id
				this.$root.currentComponent = 'user-form'
			
			},
			
			confirmDelete(user) {
			
				let index = this.users.indexOf(user)
				
				this.$bvModal.show('confirm-delete-'+index)
			
			}
		
		},
	
		created() {
		
		},
		
		mounted() {
		
			this.fetchUsers()
		
		}
	
	}

</script>