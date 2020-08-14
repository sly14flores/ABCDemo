require('./bootstrap');
import Vue from 'vue';

import Swal from 'sweetalert2'

new Vue({
	el: '#register',
	components: {

	},
	data: {
		user: {
			firstname: null,
			lastname: null,
			email: null,
			username: null,
			password: null,
			password_confirmation: null
		},
		validation: {}
	},
	computed: {		
		
	},
	methods: {

		register() {
			
			axios.post('/register',this.user).then(response => {
				
				Swal.fire('Registration submitted...')
				setTimeout(() => {
					window.location.href = "/users"
				},500)
				
			}).catch(e => {
				
				this.show = false
				this.validation = e.response.data.errors
				
			})
			
		}

	},
	created() {
		
	},
	mounted() {
		
	}
})