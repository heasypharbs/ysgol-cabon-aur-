@extends('layouts.appHome')
@section('content')


<?php
	  $events = DB::table('events')->orderby('created_at','desc')->get();
	 // dd($events);
     
	?>


<div id="overviews" class="section wb">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-9 blog-post-single">
                <div class="blog-item">
                    <div class="../image-blog">
                        <img src="{{ asset('uploads/'.$event->image_path) }}" alt="" class="img-fluid">
                    </div>
                    <div class="post-content">
                       
                        <div class="meta-info-blog">
                            <span><i class="fa fa-calendar"></i> <a href="#">{{ $event->created_at }}</a> </span>
                            
                        </div>
                        <div class="blog-title">
                            <h2><b><a href="#" title="">{{ $event->title }}</a></b></h2>
                        </div>
                        <div class="blog-desc">
                            <p>{{ $event->body }}</p>
                        </div>							
                    </div>


                    <div class="blog-button mb-3">
                        <a class="hover-btn-new orange" href="/events"><span>Back<span></a>
                    </div>
                

                </div>
                
              

        
                
            </div><!-- end col -->
            <div class="col-lg-3 col-12 right-single">
                <div class="widget-search">
                    <div class="site-search-area">
                        <form method="get" id="site-searchform" action="#">
                            <div>
                                <input class="input-text form-control" name="search-k" id="search-k" value="{{ request()->get('search') }}" type="text">
                                <input id="searchsubmit" value="Search" type="submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="widget-categories">
                    <h3 class="widget-title">Trending Topics</h3>
                    <ul>
                        <li><a href="{{ route('events.shows', $events[0]->id ) }}" title="">  {{ $events[0]->title }} </a> </li>
                        <li><a href="{{ route('events.shows', $events[1]->id ) }}" title="">  {{ $events[1]->title }} </a> </li>
                        <li><a href="{{ route('events.shows', $events[2]->id ) }}" title="">  {{ $events[2]->title }} </a> </li>
                        <li><a href="{{ route('events.shows', $events[3]->id ) }}" title="">  {{ $events[3]->title }} </a> </li>
                        <li><a href="{{ route('events.shows', $events[4]->id ) }}" title="">  {{ $events[4]->title }} </a> </li>
                        <li><a href="{{ route('events.shows', $events[5]->id ) }}" title="">  {{ $events[5]->title }} </a> </li>
                        <li><a href="{{ route('events.shows', $events[6]->id ) }}" title="">  {{ $events[6]->title }} </a> </li>
                        

                       
                    </ul>
                </div>
                
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
    </div><!-- end section -->
@endsection