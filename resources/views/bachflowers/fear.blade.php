@section('title', 'Fear - Bach Flowers')

<x-app-layout>
    <section class="py-12 px-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Fear</h2>
                <p class="text-gray-700 mb-4">
                    The remedies in the Fear category are designed to help with various types of fears and anxieties.
                    These remedies aim to provide emotional balance and calmness.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Aspen -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/aspen.png') }}" alt="Aspen"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Aspen</h4>
                        <p class="text-gray-700 mb-4">For fears and worries of unknown origin.</p>
                    </div>
                    <!-- Cherry Plum -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/cherry_plum.png') }}" alt="Cherry Plum"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Cherry Plum</h4>
                        <p class="text-gray-700 mb-4">For fear of losing control of one's mind.</p>
                    </div>
                    <!-- Mimulus -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/mimulus.png') }}" alt="Mimulus"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Mimulus</h4>
                        <p class="text-gray-700 mb-4">For fear of known things, such as illness, death, accidents, pain,
                            darkness, cold, poverty, and other worldly things.</p>
                    </div>
                    <!-- Red Chestnut -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/red_chestnut.png') }}" alt="Red Chestnut"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Red Chestnut</h4>
                        <p class="text-gray-700 mb-4">For those who find it difficult not to be anxious for other
                            people.</p>
                    </div>
                    <!-- Rock Rose -->
                    <div class="bg-gray-100 rounded-lg p-4 text-center">
                        <img src="{{ asset('bach_img/rock_rose.png') }}" alt="Rock Rose"
                            class="w-24 h-24 object-cover rounded-full mx-auto shadow-lg mb-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Rock Rose</h4>
                        <p class="text-gray-700 mb-4">For extreme fear, such as terror and panic.</p>
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
