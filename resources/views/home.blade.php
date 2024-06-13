@extends('layouts.app')

@section('title', 'Backflowers and Their Benefits')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Introduction Section -->
    <section class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800">Backflowers and Their Benefits</h1>
        <p class="mt-4 text-lg text-gray-600">Discover the amazing properties and uses of backflowers. These flowers have been known for their therapeutic effects and have been used for centuries.</p>
    </section>

    <!-- Benefits Section -->
    <section class="mb-12">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Benefits of Backflowers</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800">Benefit 1</h3>
                <p class="mt-4 text-gray-600">Backflowers can help alleviate stress and anxiety, promoting a sense of calm and relaxation.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800">Benefit 2</h3>
                <p class="mt-4 text-gray-600">They are also known to improve mood and emotional well-being.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800">Benefit 3</h3>
                <p class="mt-4 text-gray-600">Backflowers can support better sleep patterns and help with insomnia.</p>
            </div>
        </div>
    </section>

    <!-- Types of Backflowers Section -->
    <section class="mb-12">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Types of Backflowers</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <img src="{{ asset('images/backflower1.jpg') }}" alt="Backflower 1" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-2xl font-semibold text-gray-800">Backflower 1</h3>
                <p class="mt-4 text-gray-600">Description and unique properties of Backflower 1.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <img src="{{ asset('images/backflower2.jpg') }}" alt="Backflower 2" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-2xl font-semibold text-gray-800">Backflower 2</h3>
                <p class="mt-4 text-gray-600">Description and unique properties of Backflower 2.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <img src="{{ asset('images/backflower3.jpg') }}" alt="Backflower 3" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-2xl font-semibold text-gray-800">Backflower 3</h3>
                <p class="mt-4 text-gray-600">Description and unique properties of Backflower 3.</p>
            </div>
            <!-- Add more blocks as needed -->
        </div>
    </section>
    
    <!-- More sections can be added here -->
</div>
@endsection
