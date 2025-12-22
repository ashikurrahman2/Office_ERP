<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
        use HasFactory;
         protected $fillable = ['cer_title', 'cer_subtitle', 'position','position_des',];

         public static function newCareer($request)
    {
        $career = new self();
        self::saveBasicInfo($career, $request);
    }

       public static function updateCareer($request, $career)
    {
        self::saveBasicInfo($career, $request);
    }

    private static function saveBasicInfo($career, $request)
    {
        $career->cer_title       = $request->cer_title;
        $career->cer_subtitle    = $request->cer_subtitle;
        $career->position        = $request->position;
        $career->position_des    = $request->position_des;
        $career->save();
    }

    public static function deleteCareer($career)
    {
        $career->delete();
    }
}
