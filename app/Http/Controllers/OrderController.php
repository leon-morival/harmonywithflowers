<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Remedy;

class OrderController extends Controller
{
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        $totalPrice = array_reduce($cart, function($carry, $item) {
            return $carry + ($item['remedy']->price * $item['quantity']);
        }, 0);

        return view('cart.view', compact('cart', 'totalPrice'));
    }
    public function removeFromCart(Request $request)
    {
        $request->validate([
            'remedy_id' => 'required|exists:remedies,id',
        ]);

        $cart = session()->get('cart', []);
        $remedyId = $request->remedy_id;

        if (isset($cart[$remedyId])) {
            unset($cart[$remedyId]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.view')->with('success', 'Remedy removed from cart.');
    }

    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);
        if(empty($cart)) {
            return redirect()->route('remedies.index')->with('error', 'Your cart is empty.');
        }

        $totalPrice = array_reduce($cart, function($carry, $item) {
            return $carry + ($item['remedy']->price * $item['quantity']);
        }, 0);

        $order = Order::create([
            'user_id' => auth()->id(),
            'total_price' => $totalPrice
        ]);

        foreach ($cart as $item) {
            $order->remedies()->attach($item['remedy']->id, ['quantity' => $item['quantity']]);
        }

        session()->forget('cart');
        return redirect()->route('remedies.index')->with('success', 'Order placed successfully.');
    }
}
