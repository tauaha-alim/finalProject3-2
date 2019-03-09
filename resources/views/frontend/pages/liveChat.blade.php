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
    <style>
        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 500px !important;
                margin: 7.75rem auto !important;
            }
        }
    </style>

</head>
<body>
<div id="loading-overlay">
    <div class="loader"></div>
</div> <!-- /.loading-overlay -->



<header id="header" class="style1" style="background-color: #211717;" >
    <div class="container container-header">
        <div class="row" >
            <div class="col-md-12" >
                <div class="header-wrap clearfix">
                    <div id="logo">
                        <a href="/"><img src="{{asset('frontend/images/logo.png')}}" alt="logo" width="128" height="26" data-retina="images/logo-2x.png" data-width="128" data-height="26"></a>
                    </div> <!-- /#logo -->

                    <div class="mobile-button">
                        <span></span>
                    </div>

                    @if(session('loggedMan'))
                        <div class="btn-quote btn btn-styl2">
                            <a href="{{route('destroyLoggedMan')}}">Logout</a>
                        </div>
                    @endif

                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="/" title="">HOME</a>
                                </li>
                                <li>
                                    <a href="" title="">ABOUT US</a>
                                </li>
                                <li>
                                    <a href="#" title="">SERVICE</a>
                                </li>
                                <li>
                                    <a href="#" title="">PROJECTS</a>
                                </li>
                                <li>
                                    <a href="#" title="">BLOG</a>
                                </li>
                                <li>
                                    <a href="#" title="">PAGE</a>
                                </li>
                            </ul><!-- /.menu -->
                        </nav> <!-- /#mainnav -->
                    </div> <!-- .nav-wrap -->

                </div> <!-- /.header-wrap -->
            </div>
        </div> <!-- /.row -->
    </div> <!-- container -->
</header> <!-- /#header -->


<br>
<br>
<br>




<section class="flat-row flat-introduce">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap-introduce">
                    <div class="content-introduce">
                        <h3 class="title"> <a href="#">We Are Always Ready To Help You</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less</p>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover</p>
                        <div class="flat-row flat-counter style1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 col-6">
                                        <div class="counter style1">
                                            <div class="content-counter">
                                                <div class="numb-count" data-from="0" data-to="90" data-speed="2000" data-inviewport="yes">90</div>
                                                <div class="name-count">Projects Completed</div>
                                            </div>
                                        </div><!-- /.flat-counter -->
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <div class="counter style1">
                                            <div class="content-counter">
                                                <div class="numb-count"  data-from="0" data-to="20" data-speed="2000" data-inviewport="yes">50</div>
                                                <div class="name-count">Happy Clients</div>
                                            </div>
                                        </div><!-- /.flat-counter -->
                                    </div><!-- /.col-md-3 -->

                                    <div class="col-md-3 col-6">
                                        <div class="counter style1">
                                            <div class="content-counter">
                                                <div class="numb-count" data-from="0" data-to="50" data-speed="2000" data-inviewport="yes">15</div>
                                                <div class="name-count">Won Awards</div>
                                            </div>
                                        </div><!-- /.flat-counter -->
                                    </div><!-- /.col-md-3 -->

                                    <div class="col-md-3 col-6">
                                        <div class="counter style1">
                                            <div class="content-counter ">
                                                <div class="numb-count percent" data-from="0" data-to="240" data-speed="2000" data-inviewport="yes">240</div>
                                                <div class="name-count">Engineer Employers</div>
                                            </div>
                                        </div><!-- /.flat-counter -->
                                    </div> <!-- /.col-md-3 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </div>
                    </div> <!-- /.content-introduce -->

                    <div class="wrap-experienced">
                        <img src="{{asset('frontend/images/style1/bg_introduce.png')}}" alt="image">
                        <div class="experienced text-center">
                            <div class="counter style1">
                                <div class="content-counter">
                                    <div class="numb-count numb-year font-rubik font-weight-700" data-from="0" data-to="20" data-speed="2000" data-inviewport="yes">20</div>
                                </div>
                            </div> <!-- /.counter -->
                            <div class="experienced-text mg-top-40">YEARS OF</div>
                            <div class="experienced-text">EXPERIENCE</div>
                            <div class="experienced-text">  IN THE INDUSTRY</div>
                        </div>
                    </div> <!-- /.wrap-experienced -->
                </div> <!-- /.wrap-introduce -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.flat-introduce -->



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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.2.6/dist/sweetalert2.all.min.js"></script>

<script>
    @if(session('PassSuccess'))
    Swal.fire({
        type: 'success',
        title: 'Success!',
        text: 'Successfully Logged in!',
    });
    @endif

    @if(session('msg'))
    Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: 'email or password does not match our records, try again!',
        footer: '<a href>or please register then try again.</a>'
    });
    @endif
</script>


</body>

</html>