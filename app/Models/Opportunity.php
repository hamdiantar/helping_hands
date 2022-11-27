<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $table = 'OPPORTUNITY';

    protected $primaryKey = 'OPP_ID';

    public $timestamps = false;

    protected $fillable = [
        'OPP_NAME',
        'OPP_DESCRIPTION',
        'OPP_START_DATE',
        'OPP_FINISH_DATE',
        'OPP_START_TIME',
        'OPP_END_TIME',
        'OPP_TOTAL_HOUR',
        'OPP_CITY',
        'OPP_LOCATION',
        'OPP_CAPACITY',
        'OPP_STATUS',
        'ADMIN_ID',
        'VOL_ENTITY_ID',
    ];


    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {
            $model->VOL_ENTITY_ID =  getAuthVolEntity()->VOL_ENTITY_ID;
        });
    }


    public function chars()
    {
        return $this->hasMany(Characteristic::class, 'OPP_ID');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'OPP_ID');
    }

    public function attends()
    {
        return $this->hasMany(Attendence::class, 'OPP_ID');
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class, 'OPP_ID');
    }

    public function volEntity()
    {
        return $this->belongsTo(VolEntity::class, 'VOL_ENTITY_ID');
    }

    public function totalBooked()
    {
        $totalApplications = Request::where('OPP_ID', $this->OPP_ID)->count();
        return $totalApplications;
    }

    public function totalAvailable()
    {
        $totalApplications = Request::where('OPP_ID', $this->OPP_ID)->count();
        return $this->OPP_CAPACITY - $totalApplications;
    }

    public function getStartTimeAttribute()
    {
        return date('h:i A', strtotime($this->OPP_START_TIME));
    }

    public function getEndTimeAttribute()
    {
        return date('h:i A', strtotime($this->OPP_END_TIME));
    }
}
