<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $table = 'CERTIFICATION';

    protected $primaryKey = 'CER_ID';

    public $timestamps = false;

    protected $fillable = [
        'CER_ISSUE_DATE',
        'CER_TYPE',
        'VOL_ID',
        'OPP_ID',
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
