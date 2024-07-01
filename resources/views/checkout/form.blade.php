<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Checkout') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-2">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-2">
                        {{ session('error') }}
                    </div>
                @endif

                <form id="payment-form" action="{{ route('checkout.process') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="card-element">Credit or debit card</label>
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <button type="submit"
                        class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit
                        Payment</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var stripe = Stripe('{{ config('services.stripe.key') }}');
            var elements = stripe.elements();

            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            var card = elements.create('card', {
                style: style
            });
            card.mount('#card-element');

            card.addEventListener('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            var form = document.getElementById('payment-form');
            form.addEventListener('submit', async function(event) {
                event.preventDefault();
                console.log('Form submitted');

                const {
                    setupIntent,
                    error
                } = await stripe.confirmCardSetup(
                    '{{ $clientSecret }}', {
                        payment_method: {
                            card: card,
                            billing_details: {
                                name: 'Customer Name'
                            }
                        }
                    }
                );

                if (error) {
                    console.log('Payment method error', error);
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;
                } else {
                    console.log('Payment method created', setupIntent.payment_method);
                    stripeTokenHandler(setupIntent.payment_method);
                }
            });

            function stripeTokenHandler(paymentMethodId) {
                console.log('Handling token', paymentMethodId);
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'paymentMethod');
                hiddenInput.setAttribute('value', paymentMethodId);
                form.appendChild(hiddenInput);
                form.submit();
            }
        });
    </script>
</x-app-layout>
