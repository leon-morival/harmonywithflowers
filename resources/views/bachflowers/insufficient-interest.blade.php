@section('title', 'Insufficient Interest - Bach Flowers')

<x-app-layout>
    <section class="py-12 px-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Insufficient Interest</h2>
                <p class="text-gray-700 mb-4">
                    The remedies in the Insufficient Interest category are designed to help with various types of
                    detachment and lack of engagement. These remedies aim to provide presence and vitality.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Clematis -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/clematis.png') }}" alt="Clematis"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Clematis</h4>
                        <p class="text-gray-700 mb-4">For those who live in their own world and are not really present.
                        </p>
                    </div>
                    <!-- Honeysuckle -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/honeysuckle.png') }}" alt="Honeysuckle"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Honeysuckle</h4>
                        <p class="text-gray-700 mb-4">For those who live in the past and cannot move forward.</p>
                    </div>
                    <!-- Wild Rose -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/wild_rose.png') }}" alt="Wild Rose"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Wild Rose</h4>
                        <p class="text-gray-700 mb-4">For those who have accepted all that life throws at them and have
                            given up the fight.</p>
                    </div>
                    <!-- Olive -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/olive.png') }}" alt="Olive"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Olive</h4>
                        <p class="text-gray-700 mb-4">For those who are exhausted in body and mind.</p>
                    </div>
                    <!-- White Chestnut -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/white_chestnut.png') }}" alt="White Chestnut"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">White Chestnut</h4>
                        <p class="text-gray-700 mb-4">For those who cannot stop repetitive thoughts.</p>
                    </div>
                    <!-- Mustard -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/mustard.png') }}" alt="Mustard"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Mustard</h4>
                        <p class="text-gray-700 mb-4">For those who feel suddenly depressed without any reason.</p>
                    </div>
                    <!-- Chestnut Bud -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/chestnut_bud.png') }}" alt="Chestnut Bud"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Chestnut Bud</h4>
                        <p class="text-gray-700 mb-4">For those who keep repeating the same mistakes.</p>
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
