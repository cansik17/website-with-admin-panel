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
                        <li class="active"><a href="{{route('about')}}">About us</a></li>
                        
                        <li><a href="{{route('gallery.index')}}">Gallery</a></li>
                        
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
                    <h2>About Us</h2>
                    <div class="breadcrumb-controls">
                        <a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                        <span>About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- Aboutus Section Begin -->
<section class="aboutus-section spad">
    <div class="container">
        <div class="aboutus-page-text">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 m-auto">
                    <div class="section-title">
                        <h2>Who we Are & What We Do</h2>
                        <p>CrossFit is a cutting-edge functional fitness system that can help everyday men. There is
                            a significant portion of the population here in North America, that actually want
                            and need success to be hard!</p>
                    </div>
                </div>
            </div>
            <img src="front/img/about-us.jpg" alt="">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us">
                        <h4>ABOUT US</h4>
                        <p>Having a baby can be a nerve wracking experience for new parents – not the nine
                            months of pregnancy, I’m talking about after the infant is brought home from the
                            hospital. It’s always the same thing, by the time they have their third child
                            they have it all figured out, but with number one it’s a learning thing.</p>
                        <p>Baby monitors help you hear your baby’s needs without you having to be in the
                            room with the baby. Some baby monitors are portable, or “mobile” and are small
                            enough that you can carry it in your pocket as you do your daily chores around
                            the house. Depending on your price range it’s best to have a base unit that
                            plugs into the wall. The receiving unit can be like your portable phone, you can
                            carry it around with you, and plug it back into the base unit to be recharged.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-quality">
                        <h4>OUR QUALITY</h4>
                        <p>Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna
                            at risus auctor purus unt pretium ligula rutrum integer sapien ultrice ligula
                            luctus undo magna risus </p>
                        <ul>
                            <li><i class="fa fa-check-circle-o"></i>Lorem ipsum dolor sitdoni amet,
                                consectetur dont adipis elite vivamus interdum.</li>
                            <li><i class="fa fa-check-circle-o"></i>Integer pulvinar ante nulla, ac
                                fermentum ex congue id vestibulum ensectetur.</li>
                            <li><i class="fa fa-check-circle-o"></i>Proin blandit nibh in quam semper
                                iaculis lorem ipsum dolor salama ender.</li>
                            <li><i class="fa fa-check-circle-o"></i>Quis ipsum suspendisse ultrices gravida.
                                Risus commodo viverra maecenas accumsan lacus vel facilisis. </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Aboutus Section End -->

 @endsection












