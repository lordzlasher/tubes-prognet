<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('image/favicon.png')}}" type="image/png">
    <title>The Sunny</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

</head>
<body> 
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{url('/welcome')}}"><img src="image/Logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{url('/welcome')}}">Home</a></li> 
                        <li class="nav-item "><a class="nav-link" href="{{url('/about')}}">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/gallery')}}">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
                        <li class="nav-item"><a class="btn theme_btn button_hover" href="login.html">Login</a></li>
                    </ul>
                </div> 
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->
    

      <!--================ start footer Area  =================-->	
      <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Copyright © The Sunny Hotel 2021</h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.js"></script')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('vendors/nice-select/js/jquery.nice-select.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/stellar.js')}}"></script>
    <script src="{{asset('vendors/lightbox/simpleLightbox.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
    