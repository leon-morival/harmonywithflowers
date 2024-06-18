<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Cart') }}
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

                @if (count($cart) > 0)
                    @foreach ($cart as $index => $bottle)
                        @if (isset($bottle['remedies']))
                            <div class="mb-6">
                                <h3 class="text-xl font-bold">Bottle {{ $index + 1 }}</h3>
                                <table class="table-auto w-full border-collapse border border-gray-200">
                                    <thead>
                                        <tr>
                                            <th class="border border-gray-300 px-4 py-2">Remedy Name</th>
                                            <th class="border border-gray-300 px-4 py-2">Price</th>
                                            <th class="border border-gray-300 px-4 py-2">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bottle['remedies'] as $item)
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">{{ $item['remedy']->name }}
                                                </td>
                                                <td class="border border-gray-300 px-4 py-2">
                                                    ${{ number_format($item['remedy']->price, 2) }}</td>
                                                <td class="border border-gray-300 px-4 py-2">
                                                    ${{ number_format($item['remedy']->price, 2) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-2">
                                    <strong>Bottle Total: ${{ number_format($bottle['totalPrice'], 2) }}</strong>
                                </div>
                                <div class="mt-2">
                                    <form action="{{ route('cart.removeFromCart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="index" value="{{ $index }}">
                                        <button type="submit" class="text-red-500">Remove Bottle</button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <p>Error: Bottle does not contain remedies.</p>
                        @endif
                    @endforeach
                    <div class="mt-4">
                        <strong>Cart Total: ${{ number_format($totalPrice, 2) }}</strong>
                    </div>
                    <div class="mt-4">
                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Checkout</button>
                        </form>
                    </div>
                @else
                    <p>Your cart is empty.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
