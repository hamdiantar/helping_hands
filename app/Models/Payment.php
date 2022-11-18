<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'PAYMENT';

    protected $primaryKey = 'PMT_ID';

    public $timestamps = false;

    protected $fillable = [
        'PMT_DESCRPTION',
        'PMT_DATE',
        'PMT_AMOUNT',
        'PMT_TAX_PERCENTAGE',
        'SUB_ID',
    ];
}
