@extends('layouts.app')

@section('content')
<div id="login" class="login-box">
  <div class="login-logo">
	{{ config('app.name', 'Laravel') }}
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="post" v-on:submit.prevent="login" autocomplete="off">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" v-model="auth.username" :class="{'is-invalid': validation.hasOwnProperty('username')}" autofocus>
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
          <input type="password" class="form-control" placeholder="Password" v-model="auth.password" :class="{'is-invalid': validation.hasOwnProperty('password')}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
			<span class="invalid-feedback" role="alert">
				<strong>@{{validation.hasOwnProperty('password')?validation.password[0]:''}}</strong>
			</span>		  
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection

@section('scripts')
<script type="text/javascript" src="{{ mix('js/login.js') }}"></script>
@endsection