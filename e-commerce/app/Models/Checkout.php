<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'address', 'payment_method', 'status'];

    /**
     * Get the order that owns the checkout.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
