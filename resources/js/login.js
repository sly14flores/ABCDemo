require('./bootstrap');
import Vue from 'vue';

new Vue({
	el: '#login',
	components: {

	},
	data: {
		auth: {
			username: null,
			password: null
		},
		validation: {}		
	},
	methods: {

		login() {
			
			axios.post('/login',this.auth).then(response => {
				
				window.location.href = "/users"
				
			}).catch(e => {
				
				this.validation = e.response.data.errors
				
			})
			
		}

	},
	created() {
		
	},
	mounted() {
		
	}
})