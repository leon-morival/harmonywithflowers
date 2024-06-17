<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remedy;
use Illuminate\Support\Facades\Validator;


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
        'remedy_id' => 'required|exists:remedies,id',
        'quantity' => 'required|integer|min:1'
    ]);

    $cart = session()->get('cart', []);
    $remedyId = $request->remedy_id;

    if (isset($cart[$remedyId])) {
        $cart[$remedyId]['quantity'] += $request->quantity;
    } else {
        $remedy = Remedy::find($remedyId);
        $cart[$remedyId] = [
            'remedy' => $remedy,
            'quantity' => $request->quantity
        ];
    }

    session()->put('cart', $cart);
    return redirect()->route('remedies')->with('success', 'Remedy added to cart.');
    
}

}
