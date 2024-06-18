<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remedy;
use App\Models\Cart;

class RemedyController extends Controller
{
    public function index()
    {
        $remedies = Remedy::all();
        return view('remedies.index', compact('remedies'));
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'remedies' => 'required|array|min:1|max:7',
            'remedies.*' => 'exists:remedies,id',
            'quantities' => 'required|array',
            'quantities.*' => 'required|integer|min:1|max:7',
        ]);

        $remedies = $request->input('remedies');
        $quantities = $request->input('quantities');

        foreach ($remedies as $remedyId) {
            $quantity = $quantities[$remedyId];

            // Add each selected remedy with its quantity to the cart
            // Assuming you have a Cart model and authenticated user
            Cart::create([
                'user_id' => auth()->id(),
                'remedy_id' => $remedyId,
                'quantity' => $quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Remedies added to cart successfully!');
    }
}
