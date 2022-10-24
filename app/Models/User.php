<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;

    protected $guard = "volunteer";

    protected $table = 'VOLUNTEER';

    protected $primaryKey = 'VOL_ID';

    public $timestamps = false;

    protected $fillable = [
        'VOL_USERNAME',
        'password',
        'VOL_FNAME',
        'VOL_LNAME',
        'VOL_EMAIL',
        'VOL_PHONE',
        'VOL_NATIONAL_ID',
        'VOL_SCHOOL_NAME',
        'VOL_GRADE_LEVEL',
        'VOL_CITY',
        'VOL_TARGET_HOUR',
        'VOL_COMPLETED_HOUR',
        'VOL_GENDER',
    ];

    protected $hidden = [
        'password',
    ];

    public function setPasswordAttribute($password)
    {
        if (!is_null($password)) {
            $this->attributes['password'] = Hash::make($password);
        }
    }

    public function getFullNameAttribute()
    {
        return $this->VOL_FNAME . ' '.$this->VOL_LNAME;
    }
}
