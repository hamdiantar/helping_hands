<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compliant extends Model
{
    protected $table = 'COMPLIANT';

    protected $primaryKey = 'COMP_ID';

    public $timestamps = false;

    protected $fillable = [
        'COMP_TITLE',
        'COMP_DESCRIPTION',
        'COMP_AGAINST',
        'COMP_DATE',
        'COMP_REPLY',
        'COMP_STATUS',
        'VOL_ENTITY_ID',
        'VOL_ID',
        'ADMIN_ID',
        'type',
    ];


    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $model->VOL_ID =  getAuthVolunteer()->VOL_ID ?? $model->VOL_ID;
        });
    }

    public function volunteer()
    {
        return $this->belongsTo(User::class, 'VOL_ID');
    }

    public function against()
    {
        return $this->belongsTo(VolEntity::class, 'VOL_ENTITY_ID');
    }
}
