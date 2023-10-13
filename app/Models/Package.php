<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'package';

    protected $primaryKey = 'idpackage';

    protected $fillable = [
        'type',
        'link',
        'bill',
        'weight',
        'size',
        'fragile',
        'dangerous',
        'perishable',
        'width',
        'height',
        'depth',
        'price',
        'shipping',
        'detail',
        'quotation_idquotation',
    ];
}

