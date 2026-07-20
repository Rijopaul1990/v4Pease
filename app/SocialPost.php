<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialPost extends Model
{
    protected $table = 'social_posts';

    protected $fillable = [
        'title',
        'platform',
        'image',
        'link',
    ];

    /**
     * Get the image URL - works both locally (symlinked) and on server.
     */
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            $isProduction = app()->environment('production') || config('app.env') === 'production';

            if ($isProduction) {
                return asset('storage/app/public/' . $this->image);
            }

            $symlinkPath = public_path('storage/' . $this->image);
            if (file_exists($symlinkPath) || is_link(public_path('storage'))) {
                return asset('storage/' . $this->image);
            }
            return asset('storage/app/public/' . $this->image);
        }
        return asset('images/image_1.jpg'); // Default fallback image
    }
}
