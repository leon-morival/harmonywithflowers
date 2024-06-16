@section('title', 'Contact Us')

<x-app-layout>
    <section class="py-12 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Contact Us</h2>
                @if (session('success'))
                    <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full mt-1 p-2 border border-gray-300 rounded" required>
                        @error('name')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full mt-1 p-2 border border-gray-300 rounded" required>
                        @error('email')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700">Message</label>
                        <textarea id="message" name="message" class="w-full mt-1 p-2 border border-gray-300 rounded" rows="6" required></textarea>
                        @error('message')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit"
                            class="px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
