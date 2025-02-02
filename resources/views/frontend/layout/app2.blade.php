<!DOCTYPE html>
<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <title>Construction</title>
    <meta name="author" content="themsflat.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/stylesheet/responsive.css')}}">
    <link href="{{asset('frontend/images/icon.png')}}" rel="shortcut icon">
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

<div class="top ">
    <div class="container">
        <div class="row">
         <div class="col-lg-8 col-sm-12">
                <div class="flat-custom-info style1">
                    <ul class="custom-info">
                        <li class="datetime"><a href="#">Monday - Friday: 08 AM - 06 PM</a></li>
                        <li class="phone"><a href="#">+88 01736952034</a></li>
                        <li class="mail"><a href="#">email@gmail.com</a></li>
                    </ul>
                </div><!-- /.flat-custom-info -->
            </div><!-- /.col-md-6 -->

            <div class="col-lg-4 col-sm-12">
                <div class="flat-user-section style1 text-right">

                        <ul class="user-section">
                          
                             
                              
                                <li class="login" ><a href=""onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>

                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                           

                        </ul>





                </div><!-- /.flat-user-section -->
            </div><!-- /.col-md-6 -->



            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenterLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('loginPassGateRoute')}}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="input-wrap-name wrap-input">
                                    <input type="text" class="name" name="email" required="" placeholder="Enter Email">
                                </div>
                                <div class="input-wrap-mail wrap-input">
                                    <input type="password" name="password" required="" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Registration</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('pages.store')}}" method="post">
                            @csrf
                        <div class="modal-body">
                            <div class="row-input-wrap">
                                <div class="input-wrap-name wrap-input">
                                    <input type="text" class="name" name="name" required="" placeholder="Your Name">
                                </div>
                                <div class="input-wrap-mail wrap-input">
                                    <input type="text" name="username" required="" placeholder="Username">
                                </div>

                                <div class="input-wrap-mail wrap-input">
                                    <input type="password" name="password" required="" placeholder="Enter Password">
                                </div>
                                <div class="input-wrap-mail wrap-input">
                                    <input type="email" name="email" class="mail" required="" placeholder="Your Email">
                                </div>
                                <div class="input-wrap-mail wrap-input">
                                    <input type="number" name="phone"  required="" placeholder="Phone Number">
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Register</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>















        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.Top -->

<header id="header" class="style1" >
    <div class="container container-header">
        <div class="row" >
            <div class="col-md-12" >
                <div class="header-wrap clearfix">
                  <div id="logo">
                        <a href="/"><span style="color: yellow; font-family: 'Playfair Display', serif; font-size: 25px">Design Artistry</span></a>
                    </div> <!-- /#logo -->

                    <div class="mobile-button">
                        <span></span>
                    </div>

            @guest
            @else
                        <div class="btn-quote btn btn-styl2">
                            <a href="{{route('customer.chatApps')}}">Live Chat</a>
                        </div>
                    @endguest

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