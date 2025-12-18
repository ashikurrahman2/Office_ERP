<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
         protected $fillable = ['banner_title', 'banner_subtitle',];

         public static function newBanner($request)
    {
        $banner = new self();
        self::saveBasicInfo($banner, $request);
    }

    public static function updateBanner($request, $banner)
    {
        self::saveBasicInfo($banner, $request);
    }

    private static function saveBasicInfo($banner, $request)
    {
        $banner->banner_title       = $request->banner_title;
        $banner->banner_subtitle    = $request->banner_subtitle;
        $banner->save();
    }

    public static function deleteBanner($banner)
    {
        $banner->delete();
    }
}
