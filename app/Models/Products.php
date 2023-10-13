<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'idproducts';

    protected $fillable = [
        'units',
        'comments',
        'score',
        'order_idorder',
        'product_idproduct'
    ];
}
