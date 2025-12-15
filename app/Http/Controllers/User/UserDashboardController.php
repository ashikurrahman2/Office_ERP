<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Sell;
// use App\Models\page;
use Illuminate\Support\Facades\Auth;
use Flasher\Toastr\Prime\ToastrInterface;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    protected $toastr;
    public function __construct(ToastrInterface $toastr)
    {
        // $this->middleware('auth');
        $this->toastr = $toastr;
    }
    /**
     * Display a listing of the resource.
     */public function index()
    {
        $user = Auth::user();

        // Fetch count of published properties belonging to the logged-in user
        // $publishedPropertyCount = Sell::where('user_id', $user->id) // Filter by user ID
        //                             ->count();
        // $listings = Sell::where('user_id', $user->id)->get();

        return view('dashboard', compact('user'));
    }

}
