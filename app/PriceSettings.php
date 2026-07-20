<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceSettings extends Model
{
    protected $table = 'tbl_price_settings'; // Link to your table
    protected $primaryKey = 'price_id';
    protected $fillable = [
        'councellor_id',
        'candidate_type',
        'child_age_limit',
        'price_per_hour',
    ];
    public $timestamps = false;
}
