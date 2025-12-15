<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    protected $toastr;
    public function __construct(ToastrInterface $toastr)
    {
        // $this->middleware('auth');
        $this->toastr = $toastr;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $pages=page::all();
        $user = Auth::user();
        return view('user.profile.index', compact('user'));
    }
    /**
     * Display the user's profile form.
     */
    public function edit()
    {
        $user = Auth::user();
        return view('user.profile.edit', compact('user'));
    }

    /**
     * Update the user's profile information.
     */

    public function update(Request $request, User $profile)
    {
        User::updateUser($request, $profile->id);

        $this->toastr->success('Profile updated successfully!');
        return redirect()->route('profile.index'); // Redirect to the list of properties
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


// public function updateProfileImage(Request $request): RedirectResponse
// {
//     $request->validate([
//         'user_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
//     ]);

//     $user = Auth::user();

//     if ($request->hasFile('user_image')) {
//         // পুরানো ইমেজ ডিলিট করুন
//         if ($user->user_image && Storage::exists('public/' . $user->user_image)) {
//             Storage::delete('public/' . $user->user_image);
//         }

//         // নতুন ইমেজ আপলোড করুন
//         $path = $request->file('user_image')->store('users', 'public');
//         $user->user_image = $path;
//         $user->save();
//     }
//     // $abouts = About::get();
//     return Redirect::route('profile.edit')->with('status', 'profile-image-updated');
// }
}
