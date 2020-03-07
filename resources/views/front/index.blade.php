@extends('front.layouts.master')
@section('title')
    

@section('content')
    

     <!-- Page Preloder -->
     <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
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
                            <li class="active"><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About us</a></li>
                            
                            <li><a href="{{route('gallery.index')}}">Gallery</a></li>
                            
                              
                            
                            <li><a href="{{route('contact')}}">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            @foreach ($sliders as $slider)
                  <div class="single-hero-item set-bg" data-setbg="{{$slider->image}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-text">
                                <h2>{{$slider->firstTitle}}</h2>
                                <h1>{{$slider->secondTitle}}</h1>
                                <a href="{{route('contact')}}" class="primary-btn">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          
      
      
        </div>
    </section>
    <!-- Hero End -->

    <!-- Feature Section Begin -->
    <section class="feature-section">
        <div class="container-fluid">
            <div class="row">
                @foreach ($features as $feature)
                     <div class="col-md-4">
                        <div class="feature-item set-bg" data-setbg="{{$feature->image}}">
                            <h3>{{$feature->title}}</h3>
                            <p>{{$feature->text}}</p>
                            
                        </div>
                     </div>
                @endforeach
               
               
            </div>
        </div>
    </section>
    <!-- Feature Section End -->
<!-- Classes Section Begin -->
<section class="classes-section">
    <div class="class-title set-bg" data-setbg="front/img/classes-title-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                        <h2>Choose Your Program</h2>
                        <p>Our Crossfit experts can help you discover new training techniques and exercises that offer a dynamic and efficient full-body workout.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach ($programs as $program)
                
            
            <div class="col-lg-3 col-sm-6">
                <div class="classes-item set-bg" data-setbg="{{$program->image}}">
                    <h4>{{$program->title}}</h4>
                    <p>{{$program->text}}</p>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Classes Section End -->



@endsection



