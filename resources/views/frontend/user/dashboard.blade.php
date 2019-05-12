
@extends('layouts.frontend')


@section('content')



    <div class="background-light-grey">

        <div class="container padding-tb-50px">
            <!-- Navigation-->


            @include('frontend.partials.sidenav')


            <div class="content-wrapper">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-4 col-md-6 margin-bottom-30px">
                            <a class="d-block padding-20px background-orange">
                                <h6 class="text-white margin-0px font-weight-400">
                                    <i class="fa fa-building-o text-title-large margin-bottom-10px opacity-5 d-block"></i>
                                    <span class="font-3">150</span>
                                    <span class="margin-left-10px">Booking of hotels</span>
                                </h6>
                            </a>
                        </div>


                        <div class="col-lg-4 col-md-6 margin-bottom-30px">
                            <a class="d-block padding-20px background-second-color">
                                <h6 class="text-white margin-0px font-weight-400">
                                    <i class="fa fa-automobile text-title-large margin-bottom-10px opacity-5 d-block"></i>
                                    <span class="font-3">150</span>
                                    <span class="margin-left-10px">Car Rental</span>
                                </h6>
                            </a>
                        </div>


                        <div class="col-lg-4 col-md-6 margin-bottom-30px">
                            <a class="d-block padding-20px background-lime">
                                <h6 class="text-white margin-0px font-weight-400">
                                    <i class="fa fa-plane text-title-large margin-bottom-10px opacity-5 d-block"></i>
                                    <span class="font-3">150</span>
                                    <span class="margin-left-10px">Booking Flight</span>
                                </h6>
                            </a>
                        </div>


                        <div class="col-12">

                            <div class="alert alert-success">
                                <strong>Success!</strong> Indicates a successful or positive action.
                            </div>

                            <div class="alert alert-danger">
                                <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                            </div>

                            <!-- -->
                            <div class="background-white border-1 border-grey-1 margin-bottom-35px padding-30px">
                                <h4 class="table-title margin-bottom-30px"><span>Latest Activities</span></h4>
                                <ul class="commentlist padding-0px margin-0px list-unstyled text-grey-3">
                                    <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                                        <div class="padding-bottom-15px">
                                            <a class="d-block text-dark text-medium" href="#"><span class="text-red">Rabie Elkheir</span> Liked the last comment you </a>
                                            <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                                        </div>
                                    </li>
                                    <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                                        <div class="padding-bottom-15px">
                                            <a class="d-block text-dark text-medium" href="#"><span class="text-red">Adel Alsaeed</span> Liked the last comment you </a>
                                            <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                                        </div>
                                    </li>
                                    <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                                        <div class="padding-bottom-15px">
                                            <a class="d-block text-dark text-medium" href="#"><span class="text-red">Jamal Ali</span> Liked the last comment you </a>
                                            <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                                        </div>
                                    </li>
                                    <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                                        <div class="padding-bottom-15px">
                                            <a class="d-block text-dark text-medium" href="#"><span class="text-red">Rabie Elkheir</span> Liked the last comment you </a>
                                            <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- -->


                        </div>
                    </div>

                </div>
                <!-- /.container-fluid-->
                <!-- /.content-wrapper-->


                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fa fa-angle-up"></i>
                </a>
                <!-- Logout Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="login.html">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bootstrap core JavaScript-->
            </div>



        </div>
    </div>



@endsection