<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Client extends Model
{
       use HasFactory;
        private static $image, $imageName, $directory, $imageUrl;
         protected $fillable = ['client_img', 'client_name', 'client_qute'];

          // Upload and resize image
    private static function getImageUrl($request)
    {
        self::$image = $request->file('client_img');
        if (self::$image) {
            self::$imageName = time() . '_' . self::$image->getClientOriginalName();
            self::$directory = 'upload/client/';
            self::$image->move(self::$directory, self::$imageName);

            $manager = new ImageManager(new Driver());
            $image = $manager->read(self::$directory . self::$imageName);
            $image->resize(400, 400)->save(self::$directory . self::$imageName);

            self::$imageUrl = self::$directory . self::$imageName;
            return self::$imageUrl;
        }
        return null;
    }

    // Create new About record
    public static function newClient($request)
    {
        self::$imageUrl = $request->file('client_img') ? self::getImageUrl($request) : '';

        $client = new self();
        self::saveBasicInfo($client, $request, self::$imageUrl);
    }

    // Update About record
    public static function updateClient($request, $id)
    {
        $client = self::findOrFail($id);

        if ($request->file('client_img')) {
            if (file_exists($client->client_img)) {
                unlink($client->client_img);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = $client->client_img;
        }

        self::saveBasicInfo($client, $request, self::$imageUrl);
    }

    // Save or update data
    private static function saveBasicInfo($client, $request, $imageUrl)
    {
        $client->client_img        = $imageUrl;
        $client->client_name       = $request->client_name;
        $client->client_qute       = $request->client_qute;
        $client->save();
    }

    // Delete About record
    public static function deleteClient($client)
    {
        if (file_exists($client->client_img)) {
            unlink($client->client_img);
        }
        $client->delete();
    }
}
