@section('title', 'Uncertainty - Bach Flowers')

<x-app-layout>
    <section class="py-12 px-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Uncertainty</h2>
                <p class="text-gray-700 mb-4">
                    The remedies in the Uncertainty category are designed to help with various types of doubts and
                    indecisiveness. These remedies aim to provide clarity and confidence.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Cerato -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/cerato.png') }}" alt="Cerato"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Cerato</h4>
                        <p class="text-gray-700 mb-4">For those who lack faith in their own judgment.</p>
                    </div>
                    <!-- Scleranthus -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/scleranthus.png') }}" alt="Scleranthus"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Scleranthus</h4>
                        <p class="text-gray-700 mb-4">For those who find it difficult to choose between two options.</p>
                    </div>
                    <!-- Gentian -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/gentian.png') }}" alt="Gentian"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Gentian</h4>
                        <p class="text-gray-700 mb-4">For those who feel discouraged after a setback.</p>
                    </div>
                    <!-- Gorse -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/gorse.png') }}" alt="Gorse"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Gorse</h4>
                        <p class="text-gray-700 mb-4">For those who have lost hope and feel despondent.</p>
                    </div>
                    <!-- Hornbeam -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/hornbeam.png') }}" alt="Hornbeam"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Hornbeam</h4>
                        <p class="text-gray-700 mb-4">For those who feel mentally tired and lack energy.</p>
                    </div>
                    <!-- Wild Oat -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/wild_oat.png') }}" alt="Wild Oat"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Wild Oat</h4>
                        <p class="text-gray-700 mb-4">For those who feel uncertain about their path in life.</p>
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
