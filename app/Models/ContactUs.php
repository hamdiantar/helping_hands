<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'CONTACT_US';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
