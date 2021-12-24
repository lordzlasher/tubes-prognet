@extends('layoutGuest')

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h6>Away from monotonous life</h6>
						<h2>THE SUNNY</h2>
						<p>Have a great holiday experience at our hotel </p>
						<a href="{{url('admin/booking')}}" class="btn theme_btn button_hover">BOOK NOW</a>
					</div>
				</div>
            </div>
        </section>
        <!--================Banner Area =================-->
        
        <!--================ ROOM Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Room Type</h2>
                </div>
                <div class="row mb_30 d-flex justify-content-center">
                    <!-- <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room1.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Double Deluxe Room</h4></a>
                            <h5>$250<small>/night</small></h5>
                        </div>
                    </div> -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room1.jpg" alt="">
                                <a href="{{url('admin/booking')}}" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                          <h4 class="sec_h4">Standard Room</h4></a>
                            <h5>Rp.850.000,-<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room2.jpg" alt="">
                                <a href="{{url('admin/booking')}}" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <h4 class="sec_h4">Deluxe Room</h4></a>
                            <h5>Rp.1.800.000,-<small>/night</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room3.jpg" alt="">
                                <a href="{{url('admin/booking')}}" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <h4 class="sec_h4">Suite Room</h4></a>
                            <h5>Rp.3.500.000,-<small>/night</small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->