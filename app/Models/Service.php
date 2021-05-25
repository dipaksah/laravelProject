<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'tbl_services';

    protected $fillable=[
        'date',
        'time1From',
        'time2From',
        'location',
        'service',
        'NoFcleaner'
    ];
}
