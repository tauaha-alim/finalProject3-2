<!DOCTYPE html>
<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <title>Construction</title>
    <meta name="author" content="themsflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/responsive.css')}}">
    <link href="{{asset('frontend/images/favicon.ico')}}" rel="shortcut icon">
</head>
<body>
<div id="loading-overlay">
    <div class="loader"></div>
</div> <!-- /.loading-overlay -->

<div class="top ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="flat-custom-info style1">
                    <ul class="custom-info">
                        <li class="datetime"><a href="#">Monday - Friday: 08 AM - 06 PM</a></li>
                        <li class="phone"><a href="#">+88 445 677 9999</a></li>
                        <li class="mail"><a href="#">support.buidup@gmail.com</a></li>
                    </ul>
                </div><!-- /.flat-custom-info -->
            </div><!-- /.col-md-6 -->

            <div class="col-lg-4 col-sm-12">
                <div class="flat-user-section style1 text-right">
                    <ul class="user-section">
                        <li class="login"><a href="#">Login</a></li>
                        <li class="cart"><a href="#">Cart (0)</a></li>
                    </ul>
                </div><!-- /.flat-user-section -->
            </div><!-- /.col-md-6 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.Top -->

<header id="header" class="style1" >
    <div class="container container-header">
        <div class="row" >
            <div class="col-md-12" >
                <div class="header-wrap clearfix">
                    <div id="logo">
                        <a href="index-2.html"><img src="{{asset('frontend/images/logo.png')}}" alt="logo" width="128" height="26" data-retina="images/logo-2x.png" data-width="128" data-height="26"></a>
                    </div> <!-- /#logo -->

                    <div class="mobile-button">
                        <span></span>
                    </div>

                    <div class="btn-quote btn btn-styl2">
                        <a href="#">GET A QUOTE</a>
                    </div>

                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="#" title="">HOME</a>
                                    <ul class="sub-menu">
                                        <li><a href="index-2.html" title="">HOME 01</a></li>
                                        <li><a href="index2.html" title="">HOME 02</a></li>
                                        <li><a href="index3.html" title="">HOME 03</a></li>
                                        <li><a href="index4.html" title="">HOME 04</a></li>
                                        <li><a href="index5.html" title="">HOME 05</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="about.html" title="">ABOUT US</a>
                                </li>
                                <li>
                                    <a href="#" title="">SERVICE</a>
                                    <ul class="sub-menu">
                                        <li><a href="service1.html" title="">SERVICE 01</a></li>
                                        <li><a href="service2.html" title="">SERVICE 02</a></li>
                                        <li><a href="service-detail.html" title="">SERVICE DETAIL</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="#" title="">PROJECTS</a>
                                    <ul class="sub-menu">
                                        <li><a href="projects1.html" title="">PROJECT (1)</a></li>
                                        <li><a href="projects2.html" title="">PROJECT (2)</a></li>

                                        <li><a href="project-detail.html" title="">PROJECT DETAIL</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="#" title="">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html" title="">BLOG</a></li>
                                        <li><a href="blog-detail.html" title="">BLOG DETAIL</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="#" title="">PAGE</a>
                                    <ul class="sub-menu">
                                        <li><a href="FAQs.html" title="">FAQS</a></li>
                                        <li><a href="error.html" title="">ERROR PAGE</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="shop.html" title="">SHOP</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html" title="">SHOP</a></li>
                                        <li><a href="shop-detail.html" title="">SHOP DETAIL</a></li>
                                        <li><a href="cart.html">SHOPPING CART</a></li>
                                        <li><a href="checkout.html">CHECKOUT CART</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="contact-us.html">CONTACT</a>
                                </li>
                            </ul><!-- /.menu -->
                        </nav> <!-- /#mainnav -->
                    </div> <!-- .nav-wrap -->

                </div> <!-- /.header-wrap -->
            </div>
        </div> <!-- /.row -->
    </div> <!-- container -->
</header> <!-- /#header -->

@include('frontend.inc.slider')

@yield('content')

@include('frontend.inc.footer')

<!-- Javascript -->
<script src="{{asset('frontend/javascript/jquery.min.js')}}"></script>
<script src="{{asset('frontend/javascript/plugins.js')}}"></script>
<script src="{{asset('frontend/javascript/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/javascript/equalize.min.js')}}"></script>
<script src="{{asset('frontend/javascript/jquery-countTo.js')}}"></script>
<script src="{{asset('frontend/javascript/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/javascript/jquery.validate.min.js')}}"></script>
<script src="{{asset('frontend/javascript/main.js')}}"></script>

<!-- Slider -->
<script src="{{asset('frontend/rev-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('frontend/javascript/rev-slider.js')}}"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src="{{asset('frontend/rev-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('frontend/rev-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('frontend/rev-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('frontend/rev-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('frontend/rev-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('frontend/rev-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('frontend/rev-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('frontend/rev-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('frontend/rev-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
</body>

</html>