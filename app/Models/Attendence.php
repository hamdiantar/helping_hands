<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $table = 'ATTENDENCE';

    protected $primaryKey = 'ATT_ID';

    public $timestamps = false;

    protected $fillable = [
        'ATT_DATE',
        'ATT_STATUS',
        'OPP_ID',
        'VOL_ID',
    ];

    public function volunteer()
    {
        return $this->belongsTo(User::class, 'VOL_ID');
    }

    public function oppo()
    {
        return $this->belongsTo(Opportunity::class, 'OPP_ID');
    }
}
