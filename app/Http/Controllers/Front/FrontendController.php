<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return view('frontend.pages.index');
    }

     public function About() {
        return view('frontend.pages.about');
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
