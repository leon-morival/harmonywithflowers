@section('title', 'Bach Flowers')

<x-app-layout>
    <section class="py-12 px-12">
        <div class="max-w-7xl mx-auto">
            <!-- Bach Flowers Information Section -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <div class="flex flex-col lg:flex-row">
                    <!-- Bach Flowers Image -->
                    <div class="lg:w-1/2">
                        <img src="{{ asset('/bach_img/rescue_remedy.png') }}" alt="Bach Flowers"
                            class="w-full  object-cover rounded-lg shadow-lg mb-6 lg:mb-0 lg:mr-6">
                    </div>
                    <!-- Bach Flowers Content -->
                    <div class="lg:w-1/2">
                        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Bach Flowers</h2>
                        <p class="text-gray-700 mb-4">
                            Bach flower remedies are solutions of brandy and water—the water containing extreme
                            dilutions of flower material developed by Edward Bach, an English homeopath, in the 1930s.
                            These remedies are used primarily for emotional and spiritual conditions, including but not
                            limited to depression, anxiety, insomnia, and stress.
                        </p>
                        <p class="text-gray-700 mb-4">
                            The benefits of Bach Flowers include emotional balance, stress reduction, and overall
                            well-being. They are gentle, non-invasive, and can be used by anyone, including children and
                            pets.
                        </p>
                        <p class="text-gray-700 mb-4">
                            I am a certified Bach Flower practitioner with extensive experience in using these remedies
                            to help clients achieve emotional harmony and peace.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bach Flowers Categories Section -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Categories of Bach Flowers</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Fear -->
                    <div class="bg-gray-100 rounded-lg p-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4 text-center">Fear</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/aspen.png') }}" alt="Aspen"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Aspen</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/cherry_plum.png') }}" alt="Cherry Plum"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Cherry Plum</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/mimulus.png') }}" alt="Mimulus"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Mimulus</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/red_chestnut.png') }}" alt="Red Chestnut"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Red Chestnut</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/rock_rose.png') }}" alt="Rock Rose"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Rock Rose</span>
                            </div>
                        </div>
                    </div>
                    <!-- Uncertainty -->
                    <div class="bg-gray-100 rounded-lg p-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4 text-center">Uncertainty</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/cerato.png') }}" alt="Cerato"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Cerato</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/scleranthus.png') }}" alt="Scleranthus"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Scleranthus</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/gentian.png') }}" alt="Gentian"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Gentian</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/gorse.png') }}" alt="Gorse"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Gorse</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/hornbeam.png') }}" alt="Hornbeam"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Hornbeam</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/wild_oat.png') }}" alt="Wild Oat"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Wild Oat</span>
                            </div>
                        </div>
                    </div>
                    <!-- Insufficient interest in present circumstances -->
                    <div class="bg-gray-100 rounded-lg p-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4 text-center">Insufficient interest in
                            present circumstances</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/clematis.png') }}" alt="Clematis"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Clematis</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/honeysuckle.png') }}" alt="Honeysuckle"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Honeysuckle</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/wild_rose.png') }}" alt="Wild Rose"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Wild Rose</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/olive.png') }}" alt="Olive"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Olive</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/white_chestnut.png') }}" alt="White Chestnut"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">White Chestnut</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/mustard.png') }}" alt="Mustard"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Mustard</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/chestnut_bud.png') }}" alt="Chestnut Bud"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Chestnut Bud</span>
                            </div>
                        </div>
                    </div>
                    <!-- Loneliness -->
                    <div class="bg-gray-100 rounded-lg p-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4 text-center">Loneliness</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/heather.png') }}" alt="Heather"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Heather</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/impatiens.png') }}" alt="Impatiens"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Impatiens</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/water_violet.png') }}" alt="Water Violet"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Water Violet</span>
                            </div>
                        </div>
                    </div>
                    <!-- Over-sensitivity to influences and ideas -->
                    <div class="bg-gray-100 rounded-lg p-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4 text-center">Over-sensitivity to influences
                            and ideas</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/agrimony.png') }}" alt="Agrimony"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Agrimony</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/centaury.png') }}" alt="Centaury"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Centaury</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/holly.png') }}" alt="Holly"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Holly</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/walnut.png') }}" alt="Walnut"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Walnut</span>
                            </div>
                        </div>
                    </div>
                    <!-- Despondency or despair -->
                    <div class="bg-gray-100 rounded-lg p-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4 text-center">Despondency or despair</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/larch.png') }}" alt="Larch"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Larch</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/pine.png') }}" alt="Pine"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Pine</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/elm.png') }}" alt="Elm"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Elm</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/sweet_chestnut.png') }}" alt="Sweet Chestnut"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Sweet Chestnut</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/star_of_bethlehem.png') }}" alt="Star of Bethlehem"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Star of Bethlehem</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/willow.png') }}" alt="Willow"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Willow</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/oak.png') }}" alt="Oak"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Oak</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/crab_apple.png') }}" alt="Crab Apple"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Crab Apple</span>
                            </div>
                        </div>
                    </div>
                    <!-- Over-care for the welfare of others -->
                    <div class="bg-gray-100 rounded-lg p-4">
                        <h4 class="text-xl font-semibold text-gray-800 mb-4 text-center">Over-care for the welfare of
                            others</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/beech.png') }}" alt="Beech"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Beech</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/chicory.png') }}" alt="Chicory"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Chicory</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/vervain.png') }}" alt="Vervain"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Vervain</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/vine.png') }}" alt="Vine"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Vine</span>
                            </div>
                            <div class="flex items-center">
                                <img src="{{ asset('bach_img/rock_water.png') }}" alt="Rock Water"
                                    class="w-16 h-16 object-cover rounded-full shadow-lg">
                                <span class="ml-4 text-gray-700">Rock Water</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Qualification Section -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <div class="flex flex-col lg:flex-row">
                    <!-- Qualification Image -->
                    <div class="lg:w-1/2">
                        <img src="{{ asset('bach_imgation.png') }}" alt="Bach Flower Practitioner"
                            class="w-full h-64 object-cover rounded-lg shadow-lg mb-6 lg:mb-0 lg:mr-6">
                    </div>
                    <!-- Qualification Content -->
                    <div class="lg:w-1/2">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-6 text-center">My Qualifications</h3>
                        <p class="text-gray-700 mb-4">
                            I am a certified Bach Flower practitioner, having completed extensive training in the use of
                            these remedies. My certification allows me to provide personalized consultations and
                            remedies tailored to individual emotional and mental health needs.
                        </p>
                        <p class="text-gray-700 mb-4">
                            Over the years, I have helped numerous clients find balance and peace through the use of
                            Bach Flower remedies. My approach is compassionate and focused on holistic well-being.
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
