<?php

use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\Front\ReviewController;
use App\Http\Controllers\User\SellController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

// Route::get('/', function () {
//     return view('welcome');
// });
// Website route
//Frontend All Routs Here ------------
Route::group([], function () {
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/about', [FrontendController::class, 'About'])->name('abouts');
    Route::get('/service', [FrontendController::class, 'Service'])->name('ser');
    Route::get('/career', [FrontendController::class, 'Career'])->name('cer');
    Route::get('/Job-requirement', [FrontendController::class, 'Job'])->name('req');
    Route::get('/contact', [FrontendController::class, 'Commu'])->name('com');
    
});



Route::get('/generate-sitemap', function () {
    Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/about'))
        ->add(Url::create('/service'))
        ->add(Url::create('/team'))
        ->add(Url::create('/projects'))
        ->add(Url::create('/contact'))
        ->add(Url::create('/projects/{id}'))
        ->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap generated!';
});


require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';
require __DIR__.'/admin-dashboard.php';
require __DIR__.'/user.php';
