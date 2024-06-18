<x-app-layout>
    <div class="container mx-auto p-4 lg:px-20">
        <h1 class="text-center text-2xl font-bold mb-6">Remedies</h1>

        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-2">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-2">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('cart.addBottle') }}" method="POST">
            @csrf
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($remedies as $remedy)
                    <div class="border p-4 shadow-lg flex flex-col bg-gray-100 h-full">
                        <img src="{{ $remedy->image_url }}" alt="{{ $remedy->name }}"
                            class="h-full object-cover rounded mb-4">
                        <div class="flex flex-col flex-grow justify-end">
                            <h2 class="text-xl font-semibold">{{ $remedy->name }}</h2>
                            <p class="mt-2">{{ $remedy->description }}</p>
                            <div class="mt-4">
                                <input type="checkbox" name="remedies[]" value="{{ $remedy->id }}">
                                <label for="remedies[]">Select this remedy</label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>
            <div class="mt-6 text-center">
                <button type="submit" class="px-4 py-2 bg-blue-400 text-white rounded hover:bg-blue-600">Create Bottle
                    and Add to Cart</button>
            </div>
        </form>
    </div>
</x-app-layout>
