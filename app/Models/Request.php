<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'REQUEST';

    protected $primaryKey = 'REQ_ID';

    public $timestamps = false;

    protected $fillable = [
        'REQ_TYPE',
        'REQ_DATE',
        'REQ_TIME',
        'REQ_STATUS',
        'REQ_DESCRIPTION',
        'ADMIN_ID',
        'VOL_ENTITY_ID',
        'VOL_ID',
        'OPP_ID',
    ];

    public function volEntity()
    {
        return $this->belongsTo(VolEntity::class, 'VOL_ENTITY_ID');
    }

    public function volunteer()
    {
        return $this->belongsTo(User::class, 'VOL_ID');
    }

    public function opp()
    {
        return $this->belongsTo(Opportunity::class, 'OPP_ID');
    }
}
