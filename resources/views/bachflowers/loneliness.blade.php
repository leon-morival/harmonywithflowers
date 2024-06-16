@section('title', 'Loneliness - Bach Flowers')

<x-app-layout>
    <section class="py-12 px-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Loneliness</h2>
                <p class="text-gray-700 mb-4">
                    The remedies in the Loneliness category are designed to help with various types of isolation and
                    feelings of being alone. These remedies aim to provide connection and companionship.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Heather -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/heather.png') }}" alt="Heather"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Heather</h4>
                        <p class="text-gray-700 mb-4">For those who are obsessed with themselves and need constant
                            attention.</p>
                    </div>
                    <!-- Impatiens -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/impatiens.png') }}" alt="Impatiens"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Impatiens</h4>
                        <p class="text-gray-700 mb-4">For those who are quick in thought and action and prefer to work
                            alone.</p>
                    </div>
                    <!-- Water Violet -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/water_violet.png') }}" alt="Water Violet"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Water Violet</h4>
                        <p class="text-gray-700 mb-4">For those who are proud and aloof and often appear to be superior.
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
