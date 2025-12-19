<?php

namespace App\Http\Controllers\Front;

use App\Models\Banner;
use App\Models\About;
use App\Models\Team;
use App\Models\Service;
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
        $teams= Team::all();
        return view('frontend.pages.about', compact('abouts', 'teams'));
    }

      public function Service() {
        $services = Service::all();
        return view('frontend.pages.service', compact('services'));
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
