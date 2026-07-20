<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    protected $table = 'tbl_counsellors'; // Ensure table name matches database

    protected $primaryKey = 'counsellor_id'; // Set correct primary key

    public $timestamps = false; // If no created_at & updated_at

    protected $fillable = [
        'counsellor_name',
        'counsellor_qualification',
        'designation',
        'bio',
        'email',
        'phone',
        'insta_link',
        'fb_link',
        'twitter_link',
        'google_link',
        'photo',
    ];

    /**
     * Get the photo URL - works both locally (symlinked) and on server.
     */
    public function getPhotoUrlAttribute()
    {
        if ($this->photo) {
            $isProduction = app()->environment('production') || config('app.env') === 'production';

            if ($isProduction) {
                return asset('storage/app/public/' . $this->photo);
            }

            $symlinkPath = public_path('storage/' . $this->photo);
            if (file_exists($symlinkPath) || is_link(public_path('storage'))) {
                return asset('storage/' . $this->photo);
            }
            return asset('storage/app/public/' . $this->photo);
        }
        return asset('images/staff-1.jpg'); // Default fallback image
    }
}
