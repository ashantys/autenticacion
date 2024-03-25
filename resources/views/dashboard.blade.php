<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-cyan-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-cyan-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-cyan-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
