@extends('layouts.appHome')
@section('content')



   <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3></h3>
				<p></p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form method="POST"   action="{{ route("Authenticate") }}" id="loginForm">
                            {{ csrf_field() }}
                            
                            <div class="row">
                                 
                           <div class="container">
                            <div class="col-md-6 offset-md-3">
                              <h1>Login</h1>
                              <p>Please supply your login details. </p>
                              @if(Session::has('error'))
                                  <div class="alert alert-danger">
                                       {{ Session::get('error') }}
                                       @php
                                           Session::forget('error');
                                       @endphp
                                       </div>
                                  @endif
                                       @if(Session::has('success'))
                                    <div class="alert alert-success">
                                       {{ Session::get('success') }}
                                       @php
                                           Session::forget('success');
                                       @endphp                                                                       
                                                                
                                                                        
                                      </div>

                               @endif 

                              <hr>

                              
                              <label for="email"><b>Email</b></label>
                              <input type="text" placeholder="Enter Email" name="email" id="email" required>

                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="password" id="password" required>
                          
                              
                              <hr>
                                                       
                              <button type="submit" class="registerbtn">Sign in</button>
                            </div>
                          
                            <div class="container signin">
                              <p>Register an account? <a href="/register">Register</a> | <a href="/">Reset Password</a></p> 
                           
                            </div>
                        </div>
                          </form>
                    </div>
                </div>
			</div>
			@endsection