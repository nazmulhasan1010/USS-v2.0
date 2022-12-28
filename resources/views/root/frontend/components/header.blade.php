<!-- ====== start top navbar ====== -->
<div class="top-navbar style-1">
    <div class="container">
        <div class="content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="top-links">
                        <div class="text text-white">
                            <i class="fas fa-bullhorn"></i>
                            <strong>Now Hiring:</strong>
                            <span>Are you a driven and motivated <a href="#" class="p-0"><u>1st Line IT Support
                                            Engineer?</u></a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="r-side">
                        <div class="socail-icons">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="me-1" src="{{asset('')}}assets/img/lang.png" alt=""> English
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">French</a></li>
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== end top navbar ====== -->

<!-- ====== start navbar ====== -->
<nav class="navbar navbar-expand-lg navbar-light style-1 p-2" style="z-index: 99999">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('')}}assets/img/logo_cd.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link {{ Request::is('/')? 'active' : '' }} " href="{{url('/')}}" id="nav-link" data-toggle="tooltip" title="Home">
                        Home
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is('about')?'active':''}}" href="{{route('about')}}" data-toggle="tooltip" title="About">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is('team')?'active':''}}" href="{{route('teamMember')}}" data-toggle="tooltip" title="Team Members">
                        Team Members
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is('portfolio*')?'active':''}}" href="{{route('portfolio')}}" data-toggle="tooltip" title="Portfolio">
                        portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is('blog*')?'active':''}}" href="{{route('blog')}}" data-toggle="tooltip" title="Blog">
                        blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is('contact')?'active':''}}" href="{{route('contact')}}" data-toggle="tooltip" title="Contact">
                        contact
                    </a>
                </li>
            </ul>
            <div class="nav-side">
                <div class="hotline pe-4">
                    <div class="icon me-3">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <div class="cont">
                        <small class="text-muted m-0">hotline 24/7</small>
                        <h6>(+880) 1708169403-4</h6>
                    </div>
                </div>
                <div class="qoute-nav ps-4">
                    <a href="{{route('contact')}}" class="btn sm-butn butn-gard border-0 text-white" data-toggle="tooltip" title="To contact us click here">
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- ====== end navbar ====== -->

