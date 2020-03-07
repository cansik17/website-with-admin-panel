<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Activitar Template">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{$settings->title}}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
    @toastr_css
    
</head>
<body>
    @yield('content')



<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-logo-item">
                    <div class="f-logo">
                        <a href="{{route('index')}}"><img src="front/img/logo.png" alt=""></a>
                    </div>
                    <p>Despite growth of the Internet over the past seven years, the use of toll-free phone numbers
                        in television advertising continues.</p>
                    <div class="social-links">
                        <h6>Follow us</h6>
                        <a href=" {{$settings->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href=" {{$settings->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href=" {{$settings->google}}" target="_blank"><i class="fa fa-google-plus"></i></a>
                        <a href=" {{$settings->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href=" {{$settings->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-3 offset-lg-1">
                <div class="footer-widget">
                    <h5>Our Blog</h5>
                    <div class="footer-blog">
                        <a href="#" class="fb-item">
                            <h6>Most people who work</h6>
                            <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                        </a>
                        <a href="#" class="fb-item">
                            <h6>Freelance Design Tricks How </h6>
                            <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                        </a>
                        <a href="#" class="fb-item">
                            <h6>have a computer at home have had </h6>
                            <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                        </a>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-lg-4">
                <div class="footer-widget">
                    <h5>Program</h5>
                    <ul class="workout-program">
                        <li><a href="#">Bodybuilding</a></li>
                        <li><a href="#">Running</a></li>
                        <li><a href="#">Streching</a></li>
                        <li><a href="#">Weight Loss</a></li>
                        <li><a href="#">Gym Fitness</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-6">
                <div class="footer-widget">
                    <h5>Get Info</h5>
                    <ul class="footer-info">
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>Phone:</span>
                            {{$settings->phone}}
                        </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <span>Email:</span>
                            {{$settings->email}}
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <span>Address</span>
                            {{$settings->address}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ct-inside"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <a href="{{route('index')}}">FitAndFurius</a>
This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="front/js/jquery-3.3.1.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery.magnific-popup.min.js"></script>
    <script src="front/js/mixitup.min.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/jquery.slicknav.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/masonry.pkgd.min.js"></script>
    <script src="front/js/main.js"></script>

</body>
    @jquery
    @toastr_js
    @toastr_render
</html>



  