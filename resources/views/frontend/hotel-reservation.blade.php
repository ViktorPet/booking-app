
@extends('layouts.frontend')


@section('content')


    <div class="padding-tb-40px background-light-grey">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-9">

                    <!-- Hotel -->
                    <div class="background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="hotel-img position-relative">
                                    <img src="http://placehold.it/400x300" alt="">
                                    <div class="hover-option background-main-color opacity-6">
                                        <h3 class="text-center text-white padding-top-n-25 "><i class="fa fa-building-o opacity-10"></i></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="padding-30px">
                                    <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark">Adel New Hotel</a></h3>
                                    <small class="text-uppercase text-extra-small">
                                        <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                                            <span class="text-third-color margin-right-5px">United Kingdom</span> London</a>
                                    </small>
                                    <div class="claerfix"></div>
                                    <a href="#" class="float-lg-right btn-sm btn-lg background-third-color text-white text-center font-weight-bold text-uppercase margin-top-0px">Change Hotel </a>

                                    <i class="d-block padding-tb-8px text-grey-2 ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </i>
                                    <div class="margin-bottom-8px text-uppercase text-extra-small">
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">$500</strong>Person
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Hotel -->

                    <!-- form -->
                    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Product Billing Detais</h3>
                        <div class="padding-top-10px">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Full Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Last Name </label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Email </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Mobile  </label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Country  </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">City   </label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Address</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <a href="#" class="btn-sm btn-lg text-dark text-center font-weight-bold text-uppercase rounded-0 padding-tb-10px padding-lr-30px background-grey-1 margin-right-20px">Go Home</a>
                                <a href="#" class="btn-sm btn-lg  background-main-color text-white text-center font-weight-bold text-uppercase rounded-0 padding-tb-10px padding-lr-30px">CONFIRM BOOKING</a>
                            </form>
                        </div>
                    </div>
                    <!-- form -->


                </div>
                <!-- // col-lg-8 -->

            </div>
            <!-- // row -->
        </div>
        <!-- // container -->
    </div>
    <!-- //  page output -->


    <div id="instgram-feed">
        <ul class="instagram-feed">
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
            <li><a href="#"><img src="http://placehold.it/400x400" alt=""></a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- // Instgram Feed -->


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row padding-tb-100px">
                <div class="col-lg-6">
                    <div class="about">
                        <div class="logo margin-bottom-20px"><a href="#"><img src="images/logo.png" alt=""></a></div>
                        <p class="text-grey-2">
                            Mauris fermentum porta sem, non hendrerit enim bibendum consectetur. Fusce diam est, porttitor vehicula gravida at, accumsan bibendum tincidunt imperdiet. Maecenas quis magna faucibus, varius ante sit amet, varius augue. Praesent aliquam, a imperdiet lacus libero ac tellus. Nunc fringilla ullamcorper quam at lacinia.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <ul class="footer-menu row margin-0px padding-0px list-unstyled">
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Home</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Featured</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Feedback</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Ask a Question</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Team</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Maintenance</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Get a Quote</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Contact Us</a></li>
                        <li class="col-lg-6 col-md-6 padding-tb-5px"><a href="#" class="text-main-color">Alerts messages</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <ul class="images-feed row no-gutters margin-0px padding-0px list-unstyled">
                        <li class="col-lg-4 col-md-4 padding-tb-5px"><a href="#" class="padding-lr-5px d-block"><img src="http://placehold.it/400x400" alt=""></a></li>
                        <li class="col-lg-4 col-md-4 padding-tb-5px"><a href="#" class="padding-lr-5px d-block"><img src="http://placehold.it/400x400" alt=""></a></li>
                        <li class="col-lg-4 col-md-4 padding-tb-5px"><a href="#" class="padding-lr-5px d-block"><img src="http://placehold.it/400x400" alt=""></a></li>
                        <li class="col-lg-4 col-md-4 padding-tb-5px"><a href="#" class="padding-lr-5px d-block"><img src="http://placehold.it/400x400" alt=""></a></li>
                        <li class="col-lg-4 col-md-4 padding-tb-5px"><a href="#" class="padding-lr-5px d-block"><img src="http://placehold.it/400x400" alt=""></a></li>
                        <li class="col-lg-4 col-md-4 padding-tb-5px"><a href="#" class="padding-lr-5px d-block"><img src="http://placehold.it/400x400" alt=""></a></li>
                    </ul>
                </div>
            </div>

            <div class="row padding-tb-30px border-top-1 border-grey-1">
                <div class="col-lg-4">
                    <p class="text-sm-center text-lg-left"><span class="text-third-color">Travelz</span> | @2017 All copy rights reserved</p>
                </div>
                <div class="col-lg-4 sm-mb-20px">
                    <div class="text-center"><img src="images/cards.png" alt=""></div>
                </div>
                <div class="col-lg-4">
                    <ul class="social_link list-inline text-sm-center text-lg-right">
                        <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                    </ul>
                    <!-- // Social -->
                </div>
            </div>

        </div>
@endsection