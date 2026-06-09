<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id','name', 'type', 'product_id', 'kiekis', 'price'];

}
