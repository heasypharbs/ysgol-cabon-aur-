@extends('layouts.appHome')
@section('content')

<?php  
 // dd($event);
 //dd($event->title);
?>

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
                        <form method="POST"  enctype="multipart/form-data" action="/events/{{ $event->id}}" >
                           @csrf
                                @method('PUT')
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
                              <h1>Update News or Event</h1>
                              <p>Please add the information in the field below. </p>
                              <hr>
                             
                              <label for="title"><b>Title</b></label>
                              <input type="text" id="title" name="title"  value="{{ $event->title }}">

                              <label for="title"><b>Body</b></label>
                              <input type="text" id="body" name="body" value="{{ $event->body }}"  >

                                
                              <label for="title"><b>Image</b></label></br>
                              <input type="file" name="image" id="image" value="{{ $event->image }}" >
                              <hr>
                                                       
                              <button type="submit" class="registerbtn">Update</button>
                            </div>
                           </div>
                          </form>
                    </div>
                </div>
			</div>
 @endsection
