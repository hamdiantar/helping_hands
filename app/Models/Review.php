<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'FEEDBACK';

    protected $primaryKey = 'FEED_ID';

    public $timestamps = false;

    protected $fillable = [
        'FEED_DATE',
        'FEED_VOL_COMMENT',
        'FEED_VOL_RATE',
        'FEED_ENT_COMMENT',
        'FEED_ENT_RATE',
        'FEED_OPP_RATE',
        'VOL_ENTITY_ID',
        'VOL_ID',
        'OPP_ID',
    ];

    public function volunteer()
    {
        return $this->belongsTo(User::class, 'VOL_ID');
    }
}
