@extends('root.frontend.frontend')
@section('title','Portfolio')
@section('content')
    <!--Contents-->
    <main class="portfolio-page style-1">
        <!-- ====== start portfolio-projects ====== -->
        <section class="portfolio-projects section-padding pt-50 style-1">
            <div class="container">
                <div class="section-head text-center mb-60 style-5">
                    <h2 class="mb-20"> Our <span> Projects </span> </h2>
                    <p> We have an experienced team of production and inspection personnel to ensure quality. </p>
                </div>
                <div class="controls">
                    <button type="button" class="control" data-filter="all">All</button>
                    <button type="button" class="control" data-filter=".consultation">IT Consultation</button>
                    <button type="button" class="control" data-filter=".security">Data Security</button>
                    <button type="button" class="control" data-filter=".website">Website Development</button>
                    <button type="button" class="control" data-filter=".design">UI/UX Design</button>
                    <button type="button" class="control" data-filter=".cloud">Cloud Service</button>
                    <button type="button" class="control" data-filter=".development">Game Development</button>
                </div>
                <section class="portfolio style-1">
                    <div class="content">
                        <div class="row mix-container">
                            <div class="col-lg-4 mix security consultation">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{asset('')}}assets/img/projects/prog/1.jpg" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="{{route('project')}}"> Infrastructure Upgrade </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">IT Consultation</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">Consultation</a>
                                            <a href="#">Management</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix design security">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{asset('')}}assets/img/projects/prog/2.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> Criftocy Landing Page </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">Website Development, UI/UX Design</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">WordPress</a>
                                            <a href="#">PHP</a>
                                            <a href="#">HTML/CSS</a>
                                            <a href="#">Figma</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix website development">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{asset('')}}assets/img/projects/prog/3.jpeg" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> AR/VR War 1986 Game </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">Game Developemnt</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">VR/AR</a>
                                            <a href="#">iOS & Android</a>
                                            <a href="#">Unity 2D/3D</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix cloud design">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{asset('')}}assets/img/projects/4.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> Okpay E-Wallet Optimized </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">SEO analysis</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">SEO Analysis</a>
                                            <a href="#">Content Strategy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix website development cloud">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{asset('')}}assets/img/projects/5.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> e-Commerce Dashboard </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">website design & develoment</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">WordPress</a>
                                            <a href="#">PHP</a>
                                            <a href="#">HTML/CSS</a>
                                            <a href="#">Figma</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix design consultation">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{asset('')}}assets/img/projects/7.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> Crypto Blockchain </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">Data security</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">Security</a>
                                            <a href="#">Management</a>
                                            <a href="#">Backup & Recovery</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix cloud design">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{asset('')}}assets/img/projects/1.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> Car Rental Dashboard </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">UI/UX Design</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">HTML/CSS</a>
                                            <a href="#">Figma</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix security cloud">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{asset('')}}assets/img/projects/2.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> Encrypt Blockchain </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">Data security, it consultation</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">Data Security</a>
                                            <a href="#">Python</a>
                                            <a href="#">Data Backup</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix development consultation">
                                <div class="portfolio-card">
                                    <div class="img">
                                        <img src="{{asset('')}}assets/img/projects/6.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> Robotchat AI Development </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">machine learning</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">AI</a>
                                            <a href="#">Machine Learning</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="page-portfolio-5.html" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mt-30">
                            <span> Load More (24) </span>
                        </a>
                    </div>
                </section>
            </div>
        </section>
        <section class="download section-padding style-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="content text-center">
                            <h2>Access your business potentials today & find opportunity for
                                <span>
                                    bigger success
                                    <img src="{{asset('')}}assets/img/header/head5_line.png" alt="" class="head-line">
                                    <img src="{{asset('')}}assets/img/header/head5_pen.png" alt="" class="head-pen">
                                </span>
                            </h2>
                            <div class="butns mt-70">
                                <a href="{{route('contact')}}" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mx-1">
                                    <span> Start A Project Now </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{asset('')}}assets/img/contact_globe.svg" alt="" class="contact_globe">
        </section>
        <!-- ====== end portfolio-projects ====== -->
    </main>
    <!--End-Contents-->
@endsection
@push('onPageJs')
    <script src="{{asset('assets/js/lib/mixitup.min.js')}}"></script>
@endpush
