@section('title', 'Appointments')

<x-app-layout>
    <p class="text-4xl py-6 text-center font-bold text-gray-900">Zoom Bach Flower meeting</p>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-6">
            <div class="text-center ">
                <h1 class="text-3xl font-bold text-gray-800">Schedule an Appointment</h1>
            </div>
            <div>
                <!-- Calendly inline widget begin -->
                <div class="calendly-inline-widget"
                    data-url="https://calendly.com/harmony-with-flowers/back-flowers-therapy"
                    style="min-width:320px;height:700px;"></div>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                <!-- Calendly inline widget end -->
            </div>
        </div>
    </div>
</x-app-layout>
