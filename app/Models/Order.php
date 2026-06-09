<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','total','status'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public static function getOrders()
    {
        return self::where('user_id',auth()->id())->with('items')->latest()->get();

    }
}
