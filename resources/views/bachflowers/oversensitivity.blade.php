@section('title', 'Oversensitivity - Bach Flowers')

<x-app-layout>
    <section class="py-12 px-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Oversensitivity</h2>
                <p class="text-gray-700 mb-4">
                    The remedies in the Oversensitivity category are designed to help with various types of emotional
                    vulnerability and sensitivity. These remedies aim to provide resilience and stability.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Agrimony -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/agrimony.png') }}" alt="Agrimony"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Agrimony</h4>
                        <p class="text-gray-700 mb-4">For those who hide their troubles behind a cheerful facade.</p>
                    </div>
                    <!-- Centaury -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/centaury.png') }}" alt="Centaury"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Centaury</h4>
                        <p class="text-gray-700 mb-4">For those who find it hard to say no and are often imposed upon.
                        </p>
                    </div>
                    <!-- Holly -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/holly.png') }}" alt="Holly"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Holly</h4>
                        <p class="text-gray-700 mb-4">For those who suffer from feelings of hatred, envy, and jealousy.
                        </p>
                    </div>
                    <!-- Walnut -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/walnut.png') }}" alt="Walnut"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Walnut</h4>
                        <p class="text-gray-700 mb-4">For those who need protection from outside influences and change.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Booking Section -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 text-center mb-4">Book a Bach Flower Session</h3>
                <div class="flex justify-center">
                    <a href="{{ route('appointments') }}"
                        class="inline-block px-6 py-2 text-center text-white bg-blue-600 hover:bg-blue-700 rounded-lg">
                        Book Bach Flowers
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
