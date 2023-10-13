<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTable extends Model
{
    protected $table = 'package_table';

    protected $primaryKey = 'idpackage_table';

    protected $fillable = [
        'size_min',
        'size_max',
        'weight_min',
        'weight_max',
        'price',
        'price_city',
    ];
}
