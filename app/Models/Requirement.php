<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
     use HasFactory;
         protected $fillable = ['aditional_requirement', 'requirement', 'benifit'];

         public static function newReq($request)
    {
        $req = new self();
        self::saveBasicInfo($req, $request);
    }

    public static function updateReq($request, $req)
    {
        self::saveBasicInfo($req, $request);
    }

    private static function saveBasicInfo($req, $request)
    {
        $req->aditional_requirement           = $request->aditional_requirement;
        $req->requirement                     = $request->requirement;
        $req->benifit                         = $request->benifit;
        $req->save();
    }

    public static function deleteReq($req)
    {
        $req->delete();
    }
}
