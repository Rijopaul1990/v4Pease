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
        'insta_link',
        'fb_link',
        'twitter_link',
        'photo',
    ];
}
