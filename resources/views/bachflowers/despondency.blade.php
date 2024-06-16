@section('title', 'Despondency - Bach Flowers')

<x-app-layout>
    <section class="py-12 px-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Despondency or Despair</h2>
                <p class="text-gray-700 mb-4">
                    The remedies in the Despondency or Despair category are designed to help with various types of
                    discouragement and hopelessness. These remedies aim to provide strength and optimism.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Larch -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/larch.png') }}" alt="Larch"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Larch</h4>
                        <p class="text-gray-700 mb-4">For those who lack confidence in their abilities.</p>
                    </div>
                    <!-- Pine -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/pine.png') }}" alt="Pine"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Pine</h4>
                        <p class="text-gray-700 mb-4">For those who feel guilt and self-reproach.</p>
                    </div>
                    <!-- Elm -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/elm.png') }}" alt="Elm"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Elm</h4>
                        <p class="text-gray-700 mb-4">For those who feel overwhelmed by their responsibilities.</p>
                    </div>
                    <!-- Sweet Chestnut -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/sweet_chestnut.png') }}" alt="Sweet Chestnut"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Sweet Chestnut</h4>
                        <p class="text-gray-700 mb-4">For those who feel they have reached the limits of their
                            endurance.</p>
                    </div>
                    <!-- Star of Bethlehem -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/star_of_bethlehem.png') }}" alt="Star of Bethlehem"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Star of Bethlehem</h4>
                        <p class="text-gray-700 mb-4">For those who need comfort from grief or shock.</p>
                    </div>
                    <!-- Willow -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/willow.png') }}" alt="Willow"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Willow</h4>
                        <p class="text-gray-700 mb-4">For those who feel bitterness and resentment.</p>
                    </div>
                    <!-- Oak -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/oak.png') }}" alt="Oak"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Oak</h4>
                        <p class="text-gray-700 mb-4">For those who keep going past the point of exhaustion.</p>
                    </div>
                    <!-- Crab Apple -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/crab_apple.png') }}" alt="Crab Apple"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Crab Apple</h4>
                        <p class="text-gray-700 mb-4">For those who feel a sense of uncleanliness and self-disgust.</p>
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
