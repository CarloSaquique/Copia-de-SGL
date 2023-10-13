<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $table = 'tracking';

    protected $primaryKey = 'idtracking';

    protected $fillable = [
        'tracking_number',
        'status_1',
        'status_2',
        'status_3',
        'status_4',
        'status_5',
        'status_6',
        'status_7',
        'order_idorder',
        'users_id',
    ];
}
