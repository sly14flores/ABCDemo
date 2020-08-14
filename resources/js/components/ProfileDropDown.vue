<template>
	<div>
        <a class="nav-link" href="javascript:;" @click="confirmLogout">
          <i class="fas fa-sign-out-alt"></i>
			<form id="logout-form" action="/logout" method="POST" style="display: none;">
				<input type="hidden" name="_token" :value="csrf">
			</form>		  
        </a>
		<b-modal ref="confirm-logout" title="Confirmation" @ok="logout">
			Are you sure you want to logout?
		</b-modal>
	</div>
</template>

<style>

</style>

<script>
	
	export default {
		
		computed: {

			csrf() {

				return  document.querySelector('meta[name=csrf-token]').content

			},
		
		},
		
		methods: {
			
			confirmLogout() {

				this.$refs['confirm-logout'].show();		
			
			},
			
			logout() {
				
				document.querySelector('#logout-form').submit()
			
			}
			
		},
		
		created() {
		
			
			
		},
		
		mounted() {
		
		}
	
	}
	
</script>