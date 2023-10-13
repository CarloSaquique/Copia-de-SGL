<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingStates extends Model
{
    protected $table = 'tracking_states';

    protected $primaryKey = 'idtracking_states';

    protected $fillable = [
        'tracking_number',
        'service',
        'status_1',
        'status_2',
        'status_3',
        'status_4',
        'status_5',
        'status_6',
        'status_7',
    ];
}
