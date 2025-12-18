<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Team extends Model
{
      use HasFactory;
        private static $image, $imageName, $directory, $imageUrl;
         protected $fillable = ['mem_img', 'mem_name', 'mem_design', 'mem_social','mem_social_link',];

         // Upload and resize image
    private static function getImageUrl($request)
    {
        self::$image = $request->file('mem_img');
        if (self::$image) {
            self::$imageName = time() . '_' . self::$image->getClientOriginalName();
            self::$directory = 'upload/team/';
            self::$image->move(self::$directory, self::$imageName);

            $manager = new ImageManager(new Driver());
            $image = $manager->read(self::$directory . self::$imageName);
            $image->resize(800, 400)->save(self::$directory . self::$imageName);

            self::$imageUrl = self::$directory . self::$imageName;
            return self::$imageUrl;
        }
        return null;
    }

     // Create new Team record
    public static function newTeam($request)
    {
        self::$imageUrl = $request->file('mem_img') ? self::getImageUrl($request) : '';

        $team = new self();
        self::saveBasicInfo($team, $request, self::$imageUrl);
    }

    // Update Team record
    public static function updateTeam($request, $id)
    {
        $team = self::findOrFail($id);

        if ($request->file('mem_img')) {
            if (file_exists($team->mem_img)) {
                unlink($team->mem_img);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = $team->mem_img;
        }

        self::saveBasicInfo($team, $request, self::$imageUrl);
    }

    // Save or update data
    private static function saveBasicInfo($team, $request, $imageUrl)
    {
        $team->mem_img              = $imageUrl;
        $team->mem_name             = $request->mem_name;
        $team->mem_design           = $request->mem_design;
        $team->mem_social           = $request->mem_social;
        $team->mem_social_link      = $request->mem_social_link;
        $team->save();
    }

     // Delete Team record
    public static function deleteTeam($team)
    {
        if (file_exists($team->mem_img)) {
            unlink($team->mem_img);
        }
        $team->delete();
    }

}
