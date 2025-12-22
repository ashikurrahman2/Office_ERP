<?php

namespace App\Http\Controllers\Front;

use App\Models\Banner;
use App\Models\About;
use App\Models\Career;
use App\Models\Team;
use App\Models\Service;
use App\Models\Client;
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
        $testimonials= Client::all(); 
        return view('frontend.pages.service', compact('services','testimonials'));
    }

         public function Career() {
            $features = Career::all();
        return view('frontend.pages.career', compact('features'));
    }

         public function Job() {
        return view('frontend.pages.job_req');
    }

         public function Commu() {
        return view('frontend.pages.contact');
    }
}
