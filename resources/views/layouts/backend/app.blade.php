<!DOCTYPE html>
<html lang="en" class="loading">
  
<!-- Mirrored from pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/demo-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 13:08:43 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>eCommerce Dashboard - Convex bootstrap 4 admin dashboard template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../backend/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="../backend/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="../backend/img/ico/apple-icon-152.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../backend/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/vendors/css/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/app.css')}}">

    @stack('css')
  </head>
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


      @include('layouts.backend.partial.sidebar')


      @include('layouts.backend.partial.topbar')

        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        @yield('content')
                       </div>
                </div>
            </div>


      @include('layouts.backend.partial.footer')

      </div>
    </div>
    @include('layouts.backend.partial.theam')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
   
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('backend/vendors/js/core/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('backend/vendors/js/core/popper.min.js')}}"></script>
    <script src="{{asset('backend/vendors/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/vendors/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendors/js/prism.min.js')}}"></script>
    <script src="{{asset('backend/vendors/js/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('backend/vendors/js/screenfull.min.js')}}"></script>
    <script src="{{asset('backend/vendors/js/pace/pace.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('backend/vendors/js/chartist.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="{{asset('backend/js/app-sidebar.js')}}"></script>
    <script src="{{asset('backend/js/notification-sidebar.js')}}"></script>
    <script src="{{asset('backend/js/customizer.js')}}"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('backend/js/dashboard-ecommerce.js')}}"></script>
    <!-- END PAGE LEVEL JS-->


    <script src="{{asset('backend/js/sweetalert.js')}}"></script>
    @if(Session::has('ttitle'))
        <script>
            swal({
                title: "{{session('ttitle')}}",
                text: "{{session('tmsg')}}",
                icon: "{{session('ticon')}}",
                button: "Ok!",
            }).then((value) => {
                window.location.reload();
            })
        </script>
    @endif


    <script>
        $(document).on('click', '.DeleteContent', function() {
            var sname=$(this).data('name');
            var urlEx=$(this).data('url');
            swal({
                title: "Delete "+sname+"?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "error",
                buttons: true,
                dangerMode: true,
            })

                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: 'post',
                            url: urlEx,
                            data: {
                                '_token': $('input[name=_token]').val(),
                                'id': $(this).data('id'),
                                'picture': $(this).data('pic'),
                            },

                            success: function(data) {
                                swal("Poof! This data has been deleted!")
                                    .then((value) => {
                                        location.reload();
                                    });

                            }
                        });


                    } else {
                        swal("This data is safe!");
                    }
                });
        });
    </script>


    <script>


        $(document).on('click', '.showDescription', function() {
            var desc=$(this).data('description');
            swal({
                title: "Description",
                text: desc,
                icon: "warning",
            })

        });

    </script>






    <script>
        $('#ButtonRefresh').click(function(){
            location.reload();

        });
    </script>


    @stack('js')
  </body>




<!-- Mirrored from pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/demo-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jan 2019 13:09:19 GMT -->
</html>