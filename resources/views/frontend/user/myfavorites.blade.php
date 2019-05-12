
@extends('layouts.frontend')


@section('content')



    <div class="background-light-grey">

        <div class="container padding-tb-50px">
            <!-- Navigation-->


            @include('frontend.partials.sidenav')


            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item "><a href="dashboard-home.html">Dashboard</a></li>
                                <li class="active">my favorites</li>
                            </ol>

                            <!-- item  -->
                            <div class="background-white border border-grey margin-bottom-35px">
                                <div class="float-sm-left margin-right-30px">
                                    <img src="http://placehold.it/150x130" alt="">
                                </div>
                                <div class="padding-20px">
                                    <a href="#" class="d-block text-dark text-capitalize text-up-small margin-bottom-15px font-weight-700">Long Established Fact That A Reader Will Be Distracted By The Readable Content </a>
                                    <span class="margin-right-20px text-extra-small">By : <a href="#" class="text-main-color">Rabie Elkheir</a></span>
                                    <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- //  item  -->

                            <!-- item  -->
                            <div class="background-white border border-grey margin-bottom-35px">
                                <div class="float-sm-left margin-right-30px">
                                    <img src="http://placehold.it/150x130" alt="">
                                </div>
                                <div class="padding-20px">
                                    <a href="#" class="d-block text-dark text-capitalize text-up-small margin-bottom-15px font-weight-700">Long Established Fact That A Reader Will Be Distracted By The Readable Content </a>
                                    <span class="margin-right-20px text-extra-small">By : <a href="#" class="text-main-color">Rabie Elkheir</a></span>
                                    <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- //  item  -->


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