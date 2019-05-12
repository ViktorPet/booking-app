
@extends('layouts.frontend')


@section('content')


    <div class="padding-tb-40px background-light-grey">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 sticky-content">

                    <div class="background-white border border-grey-1">
                        <ul class="slider-1 margin-0px padding-0px list-unstyled">
                            <li><img src="http://placehold.it/800x480" alt=""></li>
                            <li><img src="http://placehold.it/800x480" alt=""></li>
                            <li><img src="http://placehold.it/800x480" alt=""></li>
                            <li><img src="http://placehold.it/800x480" alt=""></li>
                        </ul>
                    </div>
                    <!-- // slider -->

                    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">Description</h3>
                        <div class="padding-top-10px">
                            <p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque. Ultrices proin mi urna nibh ut, aenean sollicitudin etiam libero nisl, ultrices ridiculus in magna purus consequuntur, ipsum donec orci ad vitae pede, id odio. Turpis venenatis at laoreet. Etiam commodo fusce in diam feugiat, nullam suscipit tortor per! Orci in, eleifend venenatis lacus tincidunt nisl malesuada tristique, cum egestas vel ac dapibus euismod suspendisse. Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque. Ultrices proin mi urna nibh ut, aenean sollicitudin etiam libero nisl, ultrices ridiculus in magna purus consequuntur. </p>
                        </div>
                    </div>
                    <!-- // Description -->

                    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color padding-bottom-8px">
                            Map Location</h3>
                        <div class="padding-top-10px">
                            <div class="map-distributors-in" style="height:300px">
                                <div id="map-distributors">

                                    <script type="text/javascript">
                                        $(function() {
                                            $("#map-distributors").goMap({
                                                zoom: 6,
                                                maptype: 'ROADMAP',
                                                markers: [

                                                    {
                                                        address: '39.605247,-104.615413',
                                                        icon: 'images/icon_marker_1.png'
                                                    },

                                                ],
                                                hideByClick: true
                                            });
                                            $("#default").click(function() {
                                                $("#dump").html($.dump($.goMap.getMarkers()));
                                            });
                                            $("#clearall").click(function() {
                                                $.goMap.clearMarkers();
                                            });
                                            $("#json").click(function() {
                                                $("#dump").html($.goMap.getMarkers("json"));
                                            });
                                            $("#data").click(function() {
                                                $("#dump").html($.goMap.getMarkers("data"));
                                            });

                                            $('.gm-style-iw').parent().css('width', 'auto');


                                        });

                                    </script>

                                </div>
                            </div>
                            <!-- // map distributors -->
                        </div>
                    </div>
                    <!-- // Map Location -->

                    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color padding-bottom-8px">
                            Reviews</h3>
                        <div class="padding-top-20px">
                            <ul class="commentlist padding-0px margin-0px list-unstyled text-grey-3">
                                <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                                    <img src="http://placehold.it/60x60" class="float-left margin-right-20px margin-bottom-20px" alt="">
                                    <div class="margin-left-85px">
                                        <a class="d-block text-dark text-uppercase text-medium font-weight-700" href="#">Rabie Elkheir </a>
                                        <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                                        <p class="margin-top-15px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                    </div>
                                </li>
                                <li class="border-bottom-1 border-grey-1 margin-bottom-20px margin-left-55px">
                                    <img src="http://placehold.it/60x60" class="float-left margin-right-20px margin-bottom-20px" alt="">
                                    <div class="margin-left-85px">
                                        <a class="d-block text-dark text-uppercase text-medium font-weight-700" href="#">Rabie Elkheir </a>
                                        <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                                        <p class="margin-top-15px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                </li>
                                <li class="margin-bottom-20px">
                                    <img src="http://placehold.it/60x60" class="float-left margin-right-20px margin-bottom-20px" alt="">
                                    <div class="margin-left-85px">
                                        <a class="d-block text-dark text-uppercase text-medium font-weight-700" href="#">Rabie Elkheir </a>
                                        <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                                        <p class="margin-top-15px">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- // Reviews -->

                    <div class="background-white border border-grey-1 padding-30px margin-tb-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color padding-bottom-8px">
                            Add Review</h3>
                        <div class="padding-top-10px">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Full Name</label>
                                        <input type="text" class="form-control" id="inputName4" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Website :</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Website">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Comment :</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment"></textarea>
                                </div>
                                <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase rounded-0 padding-10px">Send</a>
                            </form>
                        </div>
                    </div>
                    <!-- // Add Review -->

                </div>
                <!-- // col-lg-9 -->
                <div class="col-lg-4 sticky-sidebar">

                    <!-- detailed -->
                    <div class="background-white border border-grey-1 padding-30px margin-bottom-30px">
                        <h5 class="font-weight-700">ADEL NEW HOTEL</h5>
                        <small class="text-uppercase text-extra-small">
                            <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                                <span class="text-third-color margin-right-5px">United Kingdom</span> London</a>
                        </small>
                        <div class="alert alert-success margin-tb-15px border-radius-0" role="alert">
                            Available for booking
                        </div>
                        <i class="d-block padding-tb-8px text-grey-2 ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. the industry's standard dummy text ever since the 1500s</i>
                        <div class="margin-bottom-8px text-uppercase text-extra-small">
                            <strong class="text-medium text-third-color padding-right-5px font-weight-bold">$500</strong>Person
                        </div>
                        <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase">Booking Now </a>
                    </div>
                    <!-- // detailed -->

                    <!-- Amenities  -->
                    <div class="background-white border border-grey-1 padding-30px margin-bottom-30px">
                        <ul class="row padding-0px margin-0px list-unstyled no-gutters">
                            <li class="col-lg-6 margin-bottom-20px">
                                <i class="fa fa-television text-second-color text-extra-large margin-right-10px"></i> <span>Plasma TV</span>
                            </li>
                            <li class="col-lg-6 margin-bottom-20px">
                                <i class="fa fa-wifi text-second-color text-extra-large margin-right-10px"></i> <span>Free Wifi</span>
                            </li>
                            <li class="col-lg-6 margin-bottom-20px">
                                <i class="fa fa-volume-up text-second-color text-extra-large margin-right-10px"></i> <span>Entertainment</span>
                            </li>
                            <li class="col-lg-6 margin-bottom-20px">
                                <i class="fa fa-television text-second-color text-extra-large margin-right-10px"></i> <span>Breakfast</span>
                            </li>
                            <li class="col-lg-6">
                                <i class="fa fa-wheelchair text-second-color text-extra-large margin-right-10px"></i> <span>Accessibiliy</span>
                            </li>
                            <li class="col-lg-6">
                                <i class="fa fa-automobile text-second-color text-extra-large margin-right-10px"></i> <span>Parking</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Amenities  -->

                    <!-- Need help ? -->
                    <div class="background-second-color border border-grey-1 padding-30px margin-bottom-30px">
                        <h3 class="text-uppercase text-medium font-weight-700 padding-bottom-8px">NEED HELP?</h3>
                        <div class="text-uppercase text-extra-large text-white font-weight-700 padding-bottom-8px">+222 370 447 17</div>
                        <div class="text-uppercase text-medium">Sunday to Friday 9.00am - 7.30pm</div>
                    </div>
                    <!-- // Need help  -->


                </div>
                <!-- // col-lg-3 -->
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




@endsection