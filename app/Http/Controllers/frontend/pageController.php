<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
        return view('frontend.pages.homePage');
    }

    public function servicesPage()
    {
        return view('frontend.pages.servicesPage');
    }

    public function portfolioPage()
    {
        return view('frontend.pages.portfolio.portfolioPage');
    }

    public function singlePortfolio()
    {
        return view('frontend.pages.portfolio.portfolioSinglePage');
    }

    public function blogs()
    {
        return view('frontend.pages.blogs.blogsPage');
    }

    public function singlePost()
    {
        return view('frontend.pages.blogs.postsSinglePage');
    }

    public function contactPage()
    {
        return view('frontend.pages.contactPage');
    }

    public function aboutPage()
    {
        return view('frontend.pages.aboutPage');
    }

    public function pageNotFound()
    {
        return view('frontend.pages.404Page');
    }
}
