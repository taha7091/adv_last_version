<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Display the cart for the user
    public function index()
    {
        $cart = Cart::with('product')->where('user_id', auth()->id())->get();
        return response()->json($cart);
    }

    // Add a product to the cart
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);

        return response()->json($cart, 201);
    }

    // Update a product's quantity in the cart
    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);

        $cart->update([
            'quantity' => $request->quantity,
        ]);

        return response()->json($cart);
    }

    // Remove a product from the cart
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return response()->json(null, 204);
    }
}
