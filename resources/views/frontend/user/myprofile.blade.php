
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
                                <li class="active">my profile</li>
                            </ol>

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
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputName">Facebook  </label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Twitter   </label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">About</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <a href="#" class="btn-sm btn-lg text-dark text-center font-weight-bold text-uppercase rounded-0 padding-tb-10px padding-lr-30px background-grey-1 margin-right-20px">Update profile</a>
                                </form>
                            </div>

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