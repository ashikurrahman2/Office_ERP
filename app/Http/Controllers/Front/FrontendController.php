<?php

namespace App\Http\Controllers\Front;

use App\Models\Banner;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $banners=Banner::all();
        return view('frontend.pages.index', compact('banners'));
    }

     public function About() {
        $abouts= About::all();
        return view('frontend.pages.about', compact('abouts'));
    }

      public function Service() {
        return view('frontend.pages.service');
    }

         public function Career() {
        return view('frontend.pages.career');
    }

         public function Job() {
        return view('frontend.pages.job_req');
    }

         public function Commu() {
        return view('frontend.pages.contact');
    }
}
