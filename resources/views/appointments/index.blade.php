<x-app-layout>
    <section class="py-12 sm:mx-8 md:mx-8 lg:px-48">
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <h3 class="text-2xl font-semibold text-gray-800">Book a Reiki session</h3>
                <a href="{{ route('appointments.reiki') }}"
                    class="mt-4 inline-block px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg">
                    Book Reiki
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                <h3 class="text-2xl font-semibold text-gray-800">Book a Bach Flower Remedy session</h3>
                <div class="mt-4 flex flex-row ">
                    <div class="w-1/2">


                        <a href="{{ route('appointments.bachflowers.face-to-face') }}"
                            class="inline-block m-1 px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg">
                            Face-to-Face Session
                        </a>
                    </div>
                    <div class="w-1/2">

                        <a href="{{ route('appointments.bachflowers.zoom') }}"
                            class="inline-block m-1 px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg">
                            Zoom Meeting Session
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
