@extends('layoutGuest')

         <!--================Breadcrumb Area =================-->
         <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">Contact Us</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/welcome')}}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
                <div id="mapBox" class="mapBox" 
                    data-lat="-8.519268" 
                    data-lon="115.263298" 
                    data-zoom="15" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="-8.519268"
                    data-mlon="115.263298">
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Keramas</h6>
                                <p>Ubud, Bali, Indonesia</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">(+62) 8210011011101</a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">thesunny@gmail.com</a></h6>
                                <p>Send us your messege anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn theme_btn button_hover">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->

        
       <!--================Contact Success and Error message Area =================-->
       <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->

     <!--gmaps Js-->
     <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE')}}"></script>
     <script src="{{asset('js/gmaps.min.js')}}"></script>
     <!-- contact js -->
     <script src="{{asset('js/jquery.form.js')}}"></script>
     <script src="{{asset('js/jquery.validate.min.js')}}"></script>
     <script src="{{asset('js/contact.js')}}"></script>
     <script src="{{asset('js/custom.js')}}"></script>