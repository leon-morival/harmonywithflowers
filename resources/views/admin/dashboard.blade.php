<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex flex-row">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200 w-1/3">
                    <a href="{{ route('users.index') }}">Manage Users</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
