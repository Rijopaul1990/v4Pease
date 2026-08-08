<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table = 'quotations';

    protected $fillable = [
        'company_name',
        'contact_email',
        'mobile',
        'people',
        'additional_info',
    ];
}
