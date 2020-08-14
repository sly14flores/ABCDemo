@extends('layouts.app')

@section('content')
<div id="register" class="register-box">
  <div class="register-logo">
	{{ config('app.name', 'Laravel') }}
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form class="mb-1" method="post" autocomplete="off">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="First Name" v-model="user.firstname" :class="{'is-invalid': validation.hasOwnProperty('firstname')}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
		<span class="invalid-feedback" role="alert">
			<strong>@{{validation.hasOwnProperty('firstname')?validation.firstname[0]:''}}</strong>
		</span>			  
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Last Name" v-model="user.lastname" :class="{'is-invalid': validation.hasOwnProperty('lastname')}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
		<span class="invalid-feedback" role="alert">
			<strong>@{{validation.hasOwnProperty('lastname')?validation.lastname[0]:''}}</strong>
		</span>			  
        </div>		
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" v-model="user.email" :class="{'is-invalid': validation.hasOwnProperty('email')}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
		<span class="invalid-feedback" role="alert">
			<strong>@{{validation.hasOwnProperty('email')?validation.email[0]:''}}</strong>
		</span>		  
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" v-model="user.username" :class="{'is-invalid': validation.hasOwnProperty('username')}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
		<span class="invalid-feedback" role="alert">
			<strong>@{{validation.hasOwnProperty('username')?validation.username[0]:''}}</strong>
		</span>			  
        </div>			
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" v-model="user.password" :class="{'is-invalid': validation.hasOwnProperty('password')}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
		<span class="invalid-feedback" role="alert">
			<strong>@{{validation.hasOwnProperty('password')?validation.password[0]:''}}</strong>
		</span>			  
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" v-model="user.password_confirmation" :class="{'is-invalid': validation.hasOwnProperty('password_confirmation')}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
		<span class="invalid-feedback" role="alert">
			<strong>@{{validation.hasOwnProperty('password_confirmation')?validation.password_confirmation[0]:''}}</strong>
		</span>			  
        </div>
        <div class="row">
          <div class="col-12">
            <button type="button" class="btn btn-primary btn-block" @click="register">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
@endsection

@section('scripts')
<script type="text/javascript" src="{{ mix('js/register.js') }}"></script>
@endsection
