<x-app-layout>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <p>  
          <div class="hidden sm:flex sm:items-center sm:ms-6  bg-slate-400 text-black dark:bg-gray-900 dark:text-white p-4 shadow-2xl">
                
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div >
                            @if (auth()->user()->role=='admin') 
                           Welcome administrator Project_ICMC
                           @else 
                           Project_ICMC
                           @endif
                            </div>
                            <div class="ms-1 bg-white text-black dark:bg-gray-900 dark:text-white p-4">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
            </div>
</p>
        </h2>
    </x-slot>
    <div id="content" x-init="loadPage('home')">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white text-black dark:bg-gray-900 dark:text-white p-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 bg-white text-black dark:bg-gray-900 dark:text-white p-4">
                    <p>You're logged in! {{ auth()->user()->name }} your country {{ auth()->user()->country }} </p>
                    
    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
