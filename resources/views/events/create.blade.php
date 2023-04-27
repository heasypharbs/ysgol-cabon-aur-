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
                        <form method="POST"  enctype="multipart/form-data" action="/events" id="eventForm">
                            {{ csrf_field() }}
                            
                            {{-- <div class="row">
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

                               @endif --}}

                           <div class="container">
                            <div class="col-md-6 offset-md-3">
                              <h1>Add News or Event</h1>
                              <p>Please and the information in the field below. </p>
                              <hr>
                              @if ($errors->any())
                              <div class="w-4/8 m-auto text-center">
                                  @foreach ($errors as $error)
                                  <li class="text-red-500 list-none">
                                      {{ $error }}
                                  </li>
                                      
                                  @endforeach
                              </div>
                              
                          @endif    
                              <label for="title"><b>Title</b></label>
                              <input type="text" placeholder="Enter title" name="title" id="title" >

                              <label for="title"><b>Body</b></label>
                              <input type="text" placeholder="Enter news body" name="body" id="body" >

                              
                              <label for="title"><b>Image</b></label></br>
                              <input type="file" name="image" id="image" >

                              
                                              
                              <button type="submit " class="registerbtn">Submit</button>
                            </div>
                           </div>
                          </form>
                    </div>
                </div>


			</div>
			@endsection