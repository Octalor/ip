<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Project_ICMC') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script>
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
        }

        // Load theme from localStorage

    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
   
   <!-- Przejście pomiędzy stronami-->
   <style>
        #loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.3s;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loader-hidden {
            opacity: 0;
            pointer-events: none;
        }
    </style>
   <!-- Koniec definicji przejścia pomiędzy stronami-->

    </head>
    <body class="bg-white text-black dark:bg-gray-900 dark:text-white">
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <div x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" 
     x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))"
     :class="{ 'dark': darkMode }">
     <div x-data="{ 
    currentPage: 'home',
    async loadPage(page) {
        this.currentPage = page;
        const response = await fetch(`/api/pages/${page}`);
        const html = await response.text();
        document.getElementById('content').innerHTML = html;
        history.pushState({page}, '', `/${page}`);
    }
}">
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ukryj loader po załadowaniu strony
            const loader = document.getElementById('loader');
            loader.classList.add('loader-hidden');
        });

        // Pokaż loader przy przejściach między stronami
        window.addEventListener('beforeunload', function() {
            const loader = document.getElementById('loader');
            loader.classList.remove('loader-hidden');
        });
    </script>


        <div class="min-h-screen bg-gray-100">
            @if (auth()->user()->role=='admin') 
            @include('layouts.navigation_admin')
            @else
            @include('layouts.navigation')
            @endif
            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>    
<script>
        // Check if the user prefers dark mode
        if (localStorage.getItem('darkMode') === 'true') {
            document.body.classList.add('dark');
        }
        
        // Toggle dark mode on button click
        function toggleDarkMode() {
            const isDarkMode = document.body.classList.toggle('dark');
            localStorage.setItem('darkMode', isDarkMode);
        }
</script>
                </header>
            @endisset
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
