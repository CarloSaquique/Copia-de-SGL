<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $table = 'billing';

    protected $primaryKey = 'idbilling';

    protected $fillable = [
        'billing_number',
        'total',
        'nit',
        'dpi',
        'name',
        'address',
        'comments',
        'order_idorder',
        'promo_idpromo',
    ];
}
