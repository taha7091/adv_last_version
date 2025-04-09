<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // Proceed to checkout
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'address' => 'required|string|max:255',
            'payment_method' => 'required|string',
        ]);

        $checkout = Checkout::create([
            'order_id' => $request->order_id,
            'address' => $request->address,
            'payment_method' => $request->payment_method,
            'status' => 'pending',
        ]);

        return response()->json($checkout, 201);
    }
}
