<x-app-layout>
    <div class="container mx-auto p-4 ">
        <h1 class="text-center text-2xl font-bold mb-6">Cart</h1>
        <ul class="space-y-4">
            @foreach ($cart as $item)
                <li class="border p-4 rounded-lg shadow bg-gray-100">
                    <h2 class="text-xl font-semibold">{{ $item['remedy']->name }}</h2>
                    <p class="mt-2">Quantity: {{ $item['quantity'] }}</p>
                    <p>Price: ${{ $item['remedy']->price }}</p>
                    <p>Total: ${{ $item['remedy']->price * $item['quantity'] }}</p>
                    <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" name="remedy_id" value="{{ $item['remedy']->id }}">
                        <button type="submit">Remove</button>
                    </form>
                </li>
            @endforeach
        </ul>
        <div class="mt-6 text-right">
            <p class="text-xl font-bold">Total Price: ${{ $totalPrice }}</p>
            <form action="{{ route('cart.checkout') }}" method="POST" class="mt-4">
                @csrf
                <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Checkout</button>
            </form>
        </div>
    </div>
</x-app-layout>
