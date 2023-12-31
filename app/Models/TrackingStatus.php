<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingStatus extends Model
{
    protected $table = 'tracking_status';

    protected $primaryKey = 'idtracking_status';

    protected $fillable = [
        'state',
        'status',
        'tracking_idtracking',
    ];
}
