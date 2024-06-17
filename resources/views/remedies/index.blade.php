<x-app-layout>
    <div class="container mx-auto p-4 lg:px-20">
        <h1 class="text-center text-2xl font-bold mb-6">Remedies</h1>

        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-2">
                {{ session('success') }}
            </div>
        @endif

        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($remedies as $remedy)
                <div class="border p-4 shadow-lg flex flex-col bg-gray-100 h-full">
                    <img src="{{ $remedy->image_url }}" alt="{{ $remedy->name }}"
                        class="w-full h-48 object-cover rounded mb-4">
                    <div class="flex flex-col flex-grow justify-end">
                        <h2 class="text-xl font-semibold">{{ $remedy->name }}</h2>
                        <p class="mt-2">{{ $remedy->description }}</p>
                        <form action="{{ route('remedies.addToCart') }}" method="POST" class="mt-4">
                            @csrf
                            <input type="hidden" name="remedy_id" value="{{ $remedy->id }}">
                            <button type="submit"
                                class="px-4 py-2 bg-blue-400 rounded-none text-white  hover:bg-blue-600">Add to
                                Cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
</x-app-layout>
