<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-center text-2xl font-bold mb-6">Remedies</h1>

        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                class="alert alert-success bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-2">
                {{ session('success') }}
            </div>
        @endif

        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($remedies as $remedy)
                <li class="border p-4 rounded-lg shadow-lg flex flex-col bg-gray-100">
                    <img src="{{ $remedy->image_url }}" alt="{{ $remedy->name }}"
                        class="w-full h-48 object-cover rounded mb-4">
                    <h2 class="text-xl font-semibold">{{ $remedy->name }}</h2>
                    <p class="mt-2">{{ $remedy->description }}</p>
                    <p class="mt-2 font-bold">Price: ${{ $remedy->price }}</p>
                    <form action="{{ route('remedies.addToCart') }}" method="POST" class="mt-4 flex flex-col">
                        @csrf
                        <input type="hidden" name="remedy_id" value="{{ $remedy->id }}">
                        <label for="quantity" class="mb-2">Quantity:</label>
                        <input type="number" name="quantity" min="1" value="1"
                            class="p-2 border rounded mb-4">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add to
                            Cart</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
