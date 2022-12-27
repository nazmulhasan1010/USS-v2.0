@extends('root.frontend.frontend')
@section('title','About')
@section('content')
    <!--Contents-->
    <main class="erorr-404-page style-5 ">
        <!-- ====== start careers-features ====== -->
        <section class="erorr-page style-5 p-0">
            <div class="container">
                <div class="content p-5">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="info">
                                <div class="icon">
                                    <img src="{{asset('assets/img/icons/rocket.png')}}" alt="">
                                </div>
                                <h2 class="mb-30"> Opps! Looks Like Here is Nothing. </h2>
                                <p class="color-777"> The page you’re looking for isn’t found. We suggest you back to
                                    home. It’s easy... </p>
                                <a href="#" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mt-40">
                                    <span> <i class="fas fa-long-arrow-left me-2"></i> Back To Home </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 text-lg-end">
                            <div class="img">
                                <img src="{{asset('assets/img/404_1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end timeline ====== -->

    </main>
    <!--End-Contents-->
@endsection
