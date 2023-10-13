<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OSC extends Model
{
    protected $table = 'osc';

    protected $primaryKey = 'idosc';

    protected $fillable = [
        'transport',
        'clearance',
        'insurance',
        'dai',
        'iva',
        'duca',
        'sed',
        'total',
        'status',
        'order_idorder',
    ];
}
