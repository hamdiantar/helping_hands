<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'PACKAGE';

    protected $primaryKey = 'PACKAGE_ID';

    public $timestamps = false;

    protected $fillable = [
        'PACKAGE_PRICE',
        'PACKAGE_DURATION',
    ];

    public function subs()
    {
        return $this->hasMany(Subscription::class, 'PACKAGE_ID');
    }

}

