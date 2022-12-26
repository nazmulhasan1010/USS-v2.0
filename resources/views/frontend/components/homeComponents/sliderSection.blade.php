@push('onPageCss')
    <style>
        .carousel-indicators {
            margin: 0 0 10px 60px;
            justify-content: left;
        }

        .carousel-indicators .slider-indicator {
            background-color: green;
            height: 10px;
            width: 10px;
            border-radius: 50%;
        }

        .carousel-control-prev .carousel-prev-icon .fa-solid, .carousel-control-next .carousel-next-icon .fa-solid {
            color: green;
            font-size: 25px;
            font-weight: bold;
        }
    </style>
@endpush
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators" style="z-index:9999">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="slider-indicator active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="slider-indicator"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="slider-indicator"
                aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="slider-indicator"
                aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- slider item one -->
            <header class="style-6 ">
                <div class="content p-4">
                    <div class="container">
                        <div class="row center">
                            <div class="col-lg-8">
                                <div class="info">
                                    <h6>united software solution</h6>
                                    <h1>We Increase your Business<span> <small>Success</small> </span></h1>
                                    <h5>
                                        Using modern technology and <br>
                                        modern frameworks
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{asset('')}}assets/img/header/hand_megaphone.png" alt="" class="hand-mega slide_up_down">
                <img src="{{asset('')}}assets/img/header/target_3d.png" alt="" class="target-3d rotate-center">
                <img src="{{asset('')}}assets/img/header/head6_rating.png" alt="" class="head6-rating scale_up_down">
                <img src="{{asset('')}}assets/img/header/header5_linechart.png" alt=""
                     class="head6-charts scale_up_down">
                <img src="{{asset('')}}assets/img/header/rocket.png" alt="" class="head6-rocket">
            </header>
        </div>
        <div class="carousel-item">
            <!-- slider item tow -->
            <header class="style-6">
                <div class="content p-4 gradiant-3">
                    <div class="container">
                        <div class="row left ">
                            <div class="col-lg-8 ">
                                <div class="info ">
                                    <h1>SEO Analytics and Marketing for <span> <small>Startup</small> </span></h1>
                                    <div class="text">
                                        Ensuring the best return on investment for your bespoke SEO campaign
                                        requirement. <br>
                                        Get your free SEO Analysis
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{asset('')}}assets/img/about/about_15_img.svg" alt="" class="head6-png right">
                </div>
            </header>
        </div>
        <div class="carousel-item">
            <!-- slider item three -->
            <header class="style-6 ">
                <div class="content p-4 gradiant-2">
                    <div class="container">
                        <div class="row right">
                            <div class="col-lg-8">
                                <div class="info">
                                    <h6>united software solution</h6>
                                    <h1>Top-Notch software <span> <small>development</small> </span></h1>
                                    <h5>
                                        Using modern technology and <br>
                                        modern frameworks
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{asset('')}}assets/img/about/2mobiles.png" alt="" class="head6-png left">
                </div>
            </header>
        </div>
        <div class="carousel-item">
            <!-- slider item three -->
            <header class="style-6 ">
                <div class="content p-4 gradiant-1">
                    <div class="container">
                        <div class="row right">
                            <div class="col-lg-8">
                                <div class="info">
                                    <h6>united software solution</h6>
                                    <h1>Top-Notch software <span> <small>development</small> </span></h1>
                                    <h5>
                                        Using modern technology and <br>
                                        modern frameworks
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{asset('')}}assets/img/about/2mobiles.png" alt="" class="head6-png left">
                </div>
            </header>
        </div>
    </div>
    <button class="carousel-control-prev" style="z-index:9999" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <span class="carousel-prev-icon" aria-hidden="true"><i class="fa-solid fa-angle-left"></i></span>
        <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" style="z-index:9999" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <span class="carousel-next-icon" aria-hidden="true"><i class="fa-solid fa-angle-right"></i></span>
        <span class="visually-hidden"></span>
    </button>
</div>
