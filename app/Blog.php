<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'post_date',
        'workplace',
        'image',
        'display_text',
        'content',
        'slug',
    ];

    protected $casts = [
        'post_date' => 'date',
    ];

    /**
     * Get the image URL - Works both locally and on server
     */
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            // Check environment - use full path on production/server, symlink path locally
            $isProduction = app()->environment('production') || config('app.env') === 'production';
            
            if ($isProduction) {
                // Server/Production: Use full path (storage/app/public/blogs/...)
                return asset('storage/app/public/' . $this->image);
            } else {
                // Local/Development: Try symlink path first (storage/blogs/...)
                $symlinkPath = public_path('storage/' . $this->image);
                if (file_exists($symlinkPath) || is_link(public_path('storage'))) {
                    return asset('storage/' . $this->image);
                }
                // If symlink doesn't exist locally, use full path
                return asset('storage/app/public/' . $this->image);
            }
        }
        return asset('images/staff-1.jpg'); // Default fallback image
    }
}

