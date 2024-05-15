<x-app-layout>
    <livewire:layout.header>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
            <div class="bg-white dark:bg-accent border border-stroke overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome, ".auth()->user()->name)."!" }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>