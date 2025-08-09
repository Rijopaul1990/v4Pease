<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenTiming extends Model
{
    protected $table = 'tbl_gen_timing';
    protected $primaryKey = 'gen_time_id';

    public $timestamps = false;

    protected $fillable = [
        'counsellor_id',
        'gen_date',
        'gen_day_id',
        'gen_day_time',
    ];
}
