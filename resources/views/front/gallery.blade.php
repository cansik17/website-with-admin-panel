@extends('front.layouts.master')
@section('title')

@section('content')
     <!-- Page Preloder -->
     <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container-fluid">
          
            {{-- <div class="top-social">
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div> --}}
            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About us</a></li>
                        
                            <li class="active"><a href="{{route('gallery.index')}}">Gallery</a></li>
                     
                            <li><a href="{{route('contact')}}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg spad" data-setbg="front/img/about-bread.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Gallery</h2>
                        <div class="breadcrumb-controls">
                            <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                            <span>Gallery</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
           
            <div class="row gallery-filter">
                @foreach ($galleries as $gallery)
                    
                
                <div class="col-lg-4 col-sm-6 ">
                    <div class="gallery-item">
                        <img style=" height: 300px "
                         class="img-fluid" src="{{$gallery->image}}" >
                        <div class="gi-hover-warp">
                            <div class="gi-hover">
                                <a href="{{$gallery->image}}" class="image-popup"><i class="fa fa-search-plus"></i></a>
                                {{-- <a href="#"><i class="fa fa-chain"></i></a>
                                <h6>Time to Try a Bodyweight Workout <span>Run, Walk, Swimming</span></h6> --}}
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

               
            </div>
            {{ $galleries->links() }}
        </div>
    </section>
    <!-- Gallery Section End -->

@endsection