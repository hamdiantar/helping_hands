<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class VolEntity extends Authenticatable
{
    use Notifiable;

    protected $guard = "volEntity";

    protected $table = 'VOLUNTEERING_ENTITY';

    protected $primaryKey = 'VOL_ENTITY_ID';

    public $timestamps = false;

    protected $fillable = [
        'VOL_ENTITY_USERNAME',
        'VOL_ENTITY_EMAIL',
        'password',
        'VOL_ENTITY_NAME',
        'VOL_ENTITY_CR_NO',
        'VOL_ENTITY_SECTOR',
        'VOL_ENTITY_LOGO',
        'VOL_ENTITY_STATUS',
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

    public function getLogoPathAttribute(): string
    {
        return asset('uploads/'.$this->VOL_ENTITY_LOGO);
    }

    public function opps()
    {
        return $this->hasMany(Opportunity::class, 'VOL_ENTITY_ID');
    }
}







