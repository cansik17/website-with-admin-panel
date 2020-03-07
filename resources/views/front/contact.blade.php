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
                           
                            <li><a href="{{route('gallery.index')}}">Gallery</a></li>
                         
                            <li class="active"><a href="{{route('contact')}}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Map Section Begin -->
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d188618.51311104256!2d-71.236572!3d42.381647!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1576756626784!5m2!1sen!2sbd"
            height="530" style="border: 0" allowfullscreen=""></iframe>
        <div class="map-hover">
            <h5>New York</h5>
            <ul>
                <li>Weekdays: 10.00 - 23.00</li>
                <li>Saturday: 10.00 - 23.00</li>
                <li>Sunday: Close</li>
            </ul>
            <i class="icon_pin"></i>
        </div>
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact-info">
                        <h4>Information</h4>
                        <ul>
                            <li><i class="fa fa-phone"></i> {{$settings->phone}}</li>
                            <li><i class="fa fa-envelope"></i> {{$settings->email}}</li>
                        </ul>
                    </div>
                    <div class="contact-address">
                        <h4>Address</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i>  {{$settings->address}}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="contact-form">
                        <h4>Get in touch</h4>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                        @endif
                       
                            
                       
                        <form action="{{route('contact.mail')}} " method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" value="{{old('name')}}" name="name" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" value="{{old('email')}}" name="email" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" value="{{old('message')}}" placeholder="Message"></textarea>
                                    <button type="submit" class="c-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection