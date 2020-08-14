require('./bootstrap');
import Vue from 'vue';

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

import Vuelidate from "vuelidate";
Vue.use(Vuelidate)

import ProfileDropDown from './components/ProfileDropDown'
import UsersList from './components/UsersList'
import UserForm from './components/UserForm'

import api from './mixins/api.js'

new Vue({
	el: '#users',
	mixins: [api],
	data: {
		user_id: null,
		oldUser: false,
		currentComponent: 'users-list'
	},
	components: {
		ProfileDropDown,
		UsersList,
		UserForm
	},
	created() {
		
	},
	mounted() {
		
	}
})