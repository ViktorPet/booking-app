
@extends('layouts.frontend')


@section('content')



    <div class="padding-tb-40px background-light-grey">
        <div class="container">

            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-3 sticky-sidebar">
                    <!-- Hotels Search -->
                    <div class="widget">
                        <h4 class="widget-title clearfix"><span>Hotels Search</span></h4>
                        <div class="search-filter">
                            <div class="form-group margin-bottom-5px">
                                <label>Destination</label>
                                <div class="destination"><input type="text" class="input-text full-width" placeholder="Enter Destination"></div>
                            </div>
                            <div class="form-group margin-bottom-5px">
                                <label>Check Out</label>
                                <div class="date-input"><input type="text" class="input-text datepicker full-width hasDatepicker" placeholder="15 / 5 / 2017" id="dp1511378113210"></div>
                            </div>
                            <div class="form-group margin-bottom-5px">
                                <label>Check Out</label>
                                <div class="date-input"><input type="text" class="input-text datepicker full-width hasDatepicker" placeholder="15 / 5 / 2017" id="dp1511378113211"></div>
                            </div>
                            <div class="row margin-bottom-10px">
                                <div class="form-group col">
                                    <label>Rooms</label>
                                    <div class="rooms"><input type="text" class="input-text full-width" placeholder="1"></div>
                                </div>
                                <div class="form-group col">
                                    <label>Washington</label>
                                    <div class="children"><input type="text" class="input-text full-width" placeholder="0"></div>
                                </div>
                            </div>
                            <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> Hotel  Search</a>
                        </div>
                    </div>
                    <!-- //  Hotels Search -->

                    <!-- Price Search -->
                    <div class="widget">
                        <h4 class="widget-title clearfix"><span>Price</span></h4>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                $0 - $50
                            </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                $50 - $100
                            </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                $100 - $500
                            </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                $500 - $1000
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                $1000 - $10,000
                            </label>
                        </div>
                        <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> Refresh  Search</a>
                    </div>
                    <!-- Price Search -->

                    <!-- Price Search -->
                    <div class="widget">
                        <h4 class="widget-title clearfix"><span>Facility</span></h4>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">Accessibiliy
                            </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."> Breakfast
                            </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."> Fitness center
                            </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."> Free Wifi
                            </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."> Parking
                            </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."> Pet allowed
                            </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."> Plasma TV
                            </label>
                        </div>
                        <div class="form-check border-bottom-1 border-grey-1">
                            <label class="form-check-label">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="..."> Pool
                            </label>
                        </div>
                        <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center text-uppercase font-weight-600"><i class="fa fa-search"></i> Refresh  Search</a>
                    </div>
                </div>
                <!-- //  Sidebar -->

                <!-- Content -->
                <div class="col-lg-9">
                    <!-- hotel post -->

                    @foreach($hotels as $hotel)
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
                                    <h3 class="text-uppercase text-medium font-weight-600"><a href="#" class="text-dark">{{$hotel->name}}</a></h3>
                                    <small class="text-uppercase text-extra-small">
                                        <a href="#" class="text-grey-4"><i class="fa fa-map-marker margin-right-5px"></i>
                                            <span class="text-third-color margin-right-5px">United Kingdom</span> London</a>
                                    </small>
                                    <div class="claerfix"></div>
                                    <a href="#" class="float-lg-right btn-sm btn-lg background-second-color text-white text-center font-weight-bold text-uppercase margin-top-0px">Booking Now </a>

                                    <i class="d-block padding-tb-8px text-grey-2 ">{{$hotel->description}} </i>
                                    <div class="margin-bottom-8px text-uppercase text-extra-small">
                                        <strong class="text-medium text-third-color padding-right-5px font-weight-bold">$500</strong>Person
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- // hotel post -->


                    <ul class="pagination pagination-md ">
                        <li class="page-item disabled"><a class="page-link rounded-0" href="#" tabindex="-1">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link rounded-0" href="#">Next</a></li>
                    </ul>


                </div>
                <!-- // Content -->
            </div>
            <!-- //  row -->

        </div>
        <!-- //  container -->
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