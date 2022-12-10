<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'SUBSCRIBTION';

    protected $primaryKey = 'SUB_ID';

    public $timestamps = false;

    protected $fillable = [
        'SUB_DATE',
        'VOL_ENTITY_ID',
        'PACKAGE_ID',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class, 'PACKAGE_ID');
    }

    public function volEntity()
    {
        return $this->belongsTo(VolEntity::class, 'VOL_ENTITY_ID');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'SUB_ID');
    }
}
