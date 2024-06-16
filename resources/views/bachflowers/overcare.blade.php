@section('title', 'Over-care - Bach Flowers')

<x-app-layout>
    <section class="py-12 px-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Over-care for the Welfare of Others</h2>
                <p class="text-gray-700 mb-4">
                    The remedies in the Over-care category are designed to help with various types of excessive concern
                    for others. These remedies aim to provide balance and perspective.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Beech -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/beech.png') }}" alt="Beech"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Beech</h4>
                        <p class="text-gray-700 mb-4">For those who are critical and intolerant of others.</p>
                    </div>
                    <!-- Chicory -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/chicory.png') }}" alt="Chicory"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Chicory</h4>
                        <p class="text-gray-700 mb-4">For those who are possessive and expect others to conform to their
                            standards.</p>
                    </div>
                    <!-- Vervain -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/vervain.png') }}" alt="Vervain"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Vervain</h4>
                        <p class="text-gray-700 mb-4">For those who are over-enthusiastic and try to convert others to
                            their way of thinking.</p>
                    </div>
                    <!-- Vine -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/vine.png') }}" alt="Vine"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Vine</h4>
                        <p class="text-gray-700 mb-4">For those who are domineering and want to control others.</p>
                    </div>
                    <!-- Rock Water -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/rock_water.png') }}" alt="Rock Water"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Rock Water</h4>
                        <p class="text-gray-700 mb-4">For those who are inflexible and set themselves high standards.
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
