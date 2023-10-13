<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyTable extends Model
{
    protected $table = 'agency_table';

    protected $primaryKey = 'idagency_table';

    protected $fillable = [
        'type',
        'name',
        'departamento',
        'municipio',
        'address',
    ];
}


