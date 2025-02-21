<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book list') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <div class="container mt-4">

                <nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}" class="text-xl font-bold">
                    Logo
                </a>
            </div>
@mobile
            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button onclick="toggleMenu()" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="menu-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path class="menu-close hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
@endmobile
            <!-- Desktop menu -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <a href="#" class="px-3 py-2 text-gray-700 hover:text-gray-900">Link 1</a>
                <a href="#" class="px-3 py-2 text-gray-700 hover:text-gray-900">Link 2</a>
                <a href="#" class="px-3 py-2 text-gray-700 hover:text-gray-900">Link 3</a>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
     @mobile
    <div id="mobile-menu" class="hidden sm:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-md">Link 1</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-md">Link 2</a>
            <a href="#" class="block px-3 py-2 text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-md">Link 3</a>
        </div>
    </div>
    @endmobile
</nav>

<script>
function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    const menuOpen = document.querySelector('.menu-open');
    const menuClose = document.querySelector('.menu-close');
    
    menu.classList.toggle('hidden');
    menuOpen.classList.toggle('hidden');
    menuClose.classList.toggle('hidden');
}
</script>
</x-app-layout>
