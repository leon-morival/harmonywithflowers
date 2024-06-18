<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remedy;

class CartController extends Controller
{
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        $totalPrice = array_reduce($cart, function($carry, $bottle) {
            if (isset($bottle['remedies'])) {
                foreach ($bottle['remedies'] as $item) {
                    $carry += $item['remedy']->price * $item['quantity'];
                }
            }
            return $carry;
        }, 0);
    
        return view('cart.view', compact('cart', 'totalPrice'));
    }
    

    public function addBottle(Request $request)
    {
        $request->validate([
            'remedies' => 'required|array|min:1|max:7',
            'remedies.*' => 'exists:remedies,id',
        ]);

        $remedies = $request->input('remedies');

        // Check if the number of selected remedies is less than 2
        if (count($remedies) < 2) {
            return redirect()->back()->with('error', 'You must select at least 2 remedies to create a bottle.');
        }

        $cart = session()->get('cart', []);

        $bottle = [
            'remedies' => [],
            'totalPrice' => 0,
        ];

        foreach ($remedies as $remedyId) {
            $remedy = Remedy::find($remedyId);

            $bottle['remedies'][] = [
                'remedy' => $remedy,
                'quantity' => 1,  // Since quantity is no longer an option, default to 1
            ];

            $bottle['totalPrice'] += $remedy->price;
        }

        $cart[] = $bottle;
        session()->put('cart', $cart);

        return redirect()->route('cart.view')->with('success', 'Bottle created and added to cart successfully.');
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
}
