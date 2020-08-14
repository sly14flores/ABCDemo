import Swal from 'sweetalert2'

export default {
	
	data() {
		
		return {

		}
		
	},	
	
	methods: {

		fetchUsers() {
			
			axios.get('/api/users').then(response => {
				
				this.users = response.data.data
				
			}).catch(e => {
				
			})
			
		},
		
		fetchUser() {
			
			axios.get('/api/user/'+this.$root.user_id).then(response => {
				
				this.user = response.data.data
				
			}).catch(e => {
				
			})			
			
		},
		
		saveUser() {
			
			axios.post('/api/user',this.user).then(response => {
				
				Swal.fire('New User Added')
				this.$root.currentComponent = 'users-list'
				
			}).catch(e => {
				
			})
			
		},
		
		updateUser() {
			
			axios.put('/api/user/'+this.user.id, this.user).then(response => {
				
				Swal.fire('New User Update')
				// this.$root.currentComponent = 'users-list'
				
			}).catch(e => {
				
			})			
			
		},
		
		deleteUser(user) {
			
			axios.delete('/api/user/'+user.id).then(response => {
				
				Swal.fire('User successfully deleted')
				this.fetchUsers()
				
			}).catch(e => {
				
			})	
			
		}
	
	}
	
}