<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'employeres',
        'company_name',
        'address',
        'phone',
        'user_image',
        'user_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }





    private static $image, $imageName, $directory, $imageUrl;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('user_image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "upload/user/";

        // Move the uploaded image
        self::$image->move(self::$directory, self::$imageName);

        // Resize the image using Intervention Image
        $imageManager = new ImageManager(new Driver());

        // Reading the uploaded image
        $imageUrl = $imageManager->read(self::$directory . self::$imageName);

        // Resize the image
        $imageUrl->resize(300, 300); // Adjust size as needed
        $imageUrl->save(self::$directory . self::$imageName);

        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }


    private static function saveBasicInfo($user, $request, $imageUrl)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phonenumber = $request->phonenumber;
        $user->user_image = $imageUrl;

        // Only update the password if it is provided
        if (!empty($request->password)) {
            $user->password = bcrypt($request->password); // Ensure password is hashed
        }

        // Set the user_id from the authenticated user
        $user->user_id = Auth::id();

        $user->save();
    }

    public static function updateUser($request, $id)
    {
        $user = self::findOrFail($id);

        if ($request->file('user_image')) {
            if (file_exists($user->user_image)) {
                unlink($user->user_image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = $user->user_image;
        }

        self::saveBasicInfo($user, $request, self::$imageUrl);
    }


}
