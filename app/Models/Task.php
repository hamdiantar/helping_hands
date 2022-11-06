<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'OPP_TASK';

    protected $primaryKey = 'OPP_TASK_ID';

    public $timestamps = false;

    protected $fillable = [
        'OPP_TASK_NAME',
        'OPP_TASK_DESCRIPTION',
        'OPP_ID',
    ];
}
