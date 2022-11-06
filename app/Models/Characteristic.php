<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    protected $table = 'VOL_CHARACTERISTIC';

    protected $primaryKey = 'VOL_CH_ID';

    public $timestamps = false;

    protected $fillable = [
        'VOL_CH_NAME',
        'VOL_CH_DESCRIPTION',
        'OPP_ID',
    ];
}
