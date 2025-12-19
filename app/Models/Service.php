<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
         protected $fillable = ['service_title', 'service_subtitle', 'service_description'];

         public static function newService($request)
    {
        $service = new self();
        self::saveBasicInfo($service, $request);
    }

    public static function updateService($request, $service)
    {
        self::saveBasicInfo($service, $request);
    }

    private static function saveBasicInfo($service, $request)
    {
        $service->service_title           = $request->service_title;
        $service->service_subtitle        = $request->service_subtitle;
        $service->service_description     = $request->service_description;
        $service->save();
    }

    public static function deleteService($service)
    {
        $service->delete();
    }
}
