@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<div class="wrapper">



    <!-- ============================================================== -->
    <!-- Start Main Content -->
    <!-- ============================================================== -->

    <div class="content-page">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <article class="card card-out-of-container border-top-0">
                       

                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-start align-items-center gap-3">
                                    <div class="avatar avatar-xxl">
                                        <img src="assets/images/users/user-2.jpg" alt="avatar-2" class="img-fluid img-thumbnail rounded-circle">
                                    </div>
                                    <div>
                                        <h4 class="text-nowrap fw-bold mb-1"> Damian D. </h4>
                                        <p class="text-muted mb-1">Product Designer</p>
                                        <span class="badge badge-soft-primary fw-medium ms-2 fs-xs ms-auto">Author</span>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-outline-primary" href="#!">Follow</a>
                                    <a class="btn btn-primary" href="#!">Message</a>
                                    <button class="btn btn-icon btn-dark" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots fs-24"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                        <li><a class="dropdown-item text-danger" href="#">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div> <!-- end col-->
            </div> <!-- end row-->

  

        </div>
        <!-- container -->

    

    </div>

    <!-- ============================================================== -->
    <!-- End of Main Content -->
    <!-- ============================================================== -->

</div>

@endsection