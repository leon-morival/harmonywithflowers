@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-6">
        <div class="text-center mb-6">
            <h1 class="text-4xl font-bold text-gray-800">About Me</h1>
        </div>
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/3 mb-4 md:mb-0">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture" class="w-full h-auto rounded-full">
            </div>
            <div class="md:ml-6 w-full md:w-2/3">
                <p class="mt-4 text-gray-600 text-lg">Hello! My name is [Your Name], and I am passionate about backflowers and their benefits. I have spent years studying these incredible plants and how they can improve our lives. Through this website, I aim to share my knowledge and help others discover the amazing properties of backflowers.</p>
                <p class="mt-4 text-gray-600 text-lg">In my spare time, I enjoy gardening, reading, and spending time with my family. I believe in the power of nature and strive to incorporate natural remedies into my daily life.</p>
            </div>
        </div>
    </div>
</div>
@endsection
