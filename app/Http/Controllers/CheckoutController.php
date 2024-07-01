<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Exception\ApiErrorException;

class CheckoutController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    public function showCheckoutForm(Request $request)
    {
        $user = Auth::user();
        $intent = $user->createSetupIntent();

        return view('checkout.form', [
            'clientSecret' => $intent->client_secret,
        ]);
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'paymentMethod' => 'required',
        ]);

        try {
            $user = $request->user();
            $paymentMethod = $request->input('paymentMethod');

            // Attach the payment method to the user
            $user->addPaymentMethod($paymentMethod);
            $user->updateDefaultPaymentMethod($paymentMethod);
            $totalPrice = session()->get('totalPrice', 0);

            // Create a PaymentIntent
            $paymentIntent = PaymentIntent::create([
                'amount' => $totalPrice * 100, // Example amount in cents
                'currency' => 'gbp',
                'customer' => $user->stripe_id,
                'payment_method' => $paymentMethod,
                'off_session' => true,
                'confirm' => true,
            ]);

            return redirect()->route('checkout.success')->with('success', 'Payment successful!');

        } catch (ApiErrorException $e) {
            return redirect()->route('checkout.form')->with('error', $e->getMessage());
        }
    }
    public function success(){
        return view('checkout.success');
    }
}
