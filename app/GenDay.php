<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenDay extends Model
{
    protected $table = 'tbl_gen_day'; // Ensure table name matches database

    protected $primaryKey = 'gen_day_id '; // Set correct primary key

    public $timestamps = false; // If no created_at & updated_at

    protected $fillable = [
        'gen_day_name',
    ];

}
