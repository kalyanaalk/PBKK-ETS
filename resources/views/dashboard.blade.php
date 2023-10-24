<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

                <div class="p-6 text-gray-900">
                    <button class="btn btn-dark"><a style="padding: 10px; text-decoration: none; color: white; background-color: black;" href="/result">List Barang</a></button>
                </div>

                <div class="p-6 text-gray-900">
                    <button class="btn btn-dark"><a style="padding: 10px; text-decoration: none; color: white; background-color: black;" href="/form">Tambah Barang</a></button>
                </div>
            </div>
        </div>
    </div>

           
</x-app-layout>
