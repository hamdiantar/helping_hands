<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = "admin";

    protected $table = 'ADMIN';

    protected $primaryKey = 'ADMIN_ID';

    public $timestamps = false;

    protected $fillable = [
        'ADMIN_USERNAME',
        'password',
        'ADMIN_FNAME',
        'ADMIN_LNAME',
        'ADMIN_PHONE',
        'ADMIN_EMAIL',
        'ADMIN_POSITION',
        'ADMIN_ROLE',
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

    public function getFullNameAttribute(): string
    {
        return $this->ADMIN_FNAME . ' ' . $this->ADMIN_LNAME;
    }
}
