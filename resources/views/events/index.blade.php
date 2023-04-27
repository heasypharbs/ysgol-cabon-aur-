<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css "/>
@extends('layouts.appHome')
@section('content')



<div class="all-title-box">
    <div class="container text-center">
        <h1>Blog</h1>
    </div>
</div>

<div id="overviews" class="section wb">
    <div class="container">
        
        <hr class="invis"> 


        @if (Auth::user())
            
   
            <div class="pt-20">
                <a
                    href="events/create"
                    class="border-b-2 pb-2 border-dotted italic text-grey-500">
                    Add News or Event &rarr;
                </a>

            </div>

            <div class="pt-80">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                    Logout
                </a>    
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            </div>
    @endif
        <div class="row"> 
            @foreach ( $events as $event )
            
            
        
            <div class="col-lg-4 col-md-6 col-12 mt-3">
                <div class="blog-item">
                    
                    <div class="image-blog">
                        <img src="{{ asset('uploads/'.$event->image_path) }}" alt="" class="img-fluid">
                    </div>
                    <div class="meta-info-blog">
                        <span><i class="fa fa-calendar"></i> <a href="#">{{ $event->created_at }}</a> </span>
             
                    </div>
                    <div class="blog-title">
                        <h2><a href="{{ route('events.shows', $event->id) }}" title="">{{ $event->title }}</a></h2>
                    </div>
                    <div class="blog-desc">
                        <p class="text-justify">{{ Str::limit($event->body, 150) }} </p>

                       
                    </div>
                    <div class="blog-button ">

                        <div class="blog-button mb-3">
							<a class="hover-btn-new orange" href="{{ route('events.shows', $event->id) }}"><span>Read More<span></a>
						</div>
                            
                        @if (isset(Auth::user()->id) && Auth::user()->id == $event->user_id)
                            
                      
                              <button class=" form-control">  <a class="border-b-2 pb-2 border-dotted italic text-green-500"
                                    href="{{ route('events.edits',$event->id) }}">
                                    Edit  &rarr;
                                </a></button>

                                <form class="pt-2" action="events/{{ $event->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class=" form-control  italic text-red-400" type="submit">
                                        Delete  &rarr;
                                    </button>

                                </form>
                        @endif
                        
                    </div>

                    
                </div>
            </div><!-- end col -->
            @endforeach
        </div><!-- end row -->

            <div class=" mt-5">
                {!! $events->withQueryString()->links('pagination::bootstrap-5') !!}
           </div>
    </div><!-- end container -->
   
</div><!-- end section -->

@endsection
  