<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='_order';
    protected $fillable=[
        'name',
        'contact',
        'address',
        'itemname',
        'price',
        'quantity',
        'total',

       
    ];
}

