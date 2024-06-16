@section('title', 'Reiki')

<x-app-layout>
    <section class="py-6 px-12">
        <div class="max-w-7xl mx-auto">
            <p class="text-4xl font-bold text-center pb-6">What is Reiki?</p>
            <!-- Reiki Information Section -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <div class="flex flex-col lg:flex-row">
                    <!-- Reiki Image -->
                    <div class="lg:w-1/2">
                        <img src="/reiki_img/reiki.jpg" alt="Reiki Session"
                            class="rounded-lg shadow-lg mb-6 lg:mb-0 lg:mr-6 ">
                    </div>
                    <!-- Reiki Content -->
                    <div class="lg:w-1/2 pl-4">
                        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Reiki</h2>
                        <p class="text-gray-700 mb-4">
                            Reiki is a Japanese technique for stress reduction and relaxation that also promotes
                            healing. It is administered by "laying on hands" and is based on the idea that an unseen
                            "life force energy" flows through us and is what causes us to be alive.
                        </p>
                        <p class="text-gray-700 mb-4">
                            The benefits of Reiki include stress reduction, relaxation, and promotion of healing. It can
                            help alleviate physical pain, improve mental clarity, and enhance emotional well-being. Many
                            people who receive Reiki report feeling more balanced, peaceful, and rejuvenated.
                        </p>
                        <p class="text-gray-700 mb-4">
                            I am a certified Reiki Master with a third-degree certification in Reiki. With years of
                            experience, I have helped numerous clients achieve better health and well-being through
                            Reiki sessions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row mb-8 bg-white rounded-lg shadow-lg px-40 py-6">
                <!-- Reiki Benefits Section -->
                <div class="lg:w-1/2 ">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Benefits of Reiki</h3>
                    <ul class="list-disc list-inside text-gray-700">
                        <li>Reduces stress and promotes relaxation</li>
                        <li>Enhances emotional well-being</li>
                        <li>Alleviates physical pain</li>
                        <li>Improves mental clarity</li>
                        <li>Promotes overall healing</li>
                    </ul>
                </div>


                <!-- Booking Section -->
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800 text-center mb-4">Book a Reiki Session Now</h3>
                    <div class="flex justify-center">
                        <a href="{{ route('appointments.reiki') }}"
                            class="inline-block px-6 py-2 text-center text-white bg-blue-600 hover:bg-blue-700 rounded-lg">
                            Book Reiki
                        </a>
                    </div>
                </div>

            </div>


            <!-- Qualification Section -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-2">
                <div class="flex flex-col lg:flex-row">
                    <!-- Qualification Image -->
                    <div class="lg:w-1/2">
                        <img src="/reiki_img/degree.png" alt="Reiki Master"
                            class="rounded-lg shadow-lg mb-2 lg:mb-0 lg:mr-6 h-3/4">
                    </div>
                    <!-- Qualification Content -->
                    <div class="lg:w-1/2">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-6">My Qualifications</h3>
                        <p class="text-gray-700 mb-4">
                            I hold a third-degree certification in Reiki, which is the highest level of mastery in the
                            practice. This certification allows me to offer advanced healing techniques and teach Reiki
                            to others. My journey in Reiki began over a decade ago, and since then, I have dedicated
                            myself to mastering this healing art.
                        </p>
                        <p class="text-gray-700 mb-4">
                            Over the years, I have conducted numerous sessions and workshops, helping people from
                            various walks of life to achieve better health and inner peace. My approach is
                            compassionate, client-focused, and tailored to meet individual needs.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </section>
</x-app-layout>
