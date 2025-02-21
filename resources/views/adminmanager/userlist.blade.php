<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User list') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <div class="container mt-4 bg-white text-black dark:bg-gray-900 dark:text-white p-4">
        <h2 class="mb-4">User list</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Rola</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                        <x-dropdown-link>
                        <div x-data="{ open: false, deleteUrl: '' }">
    <button @click="open = true; deleteUrl = '{{ route('adminmanager.useredit', $user->id) }}'" class="btn btn-danger">
        Edit
    </button>

    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-50">
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <p>Are you sure edit this record?</p>
            <div class="flex justify-end space-x-2 mt-4">
                <button @click="open = false" class="btn btn-secondary">Anuluj</button>
                <form :action="deleteUrl" method="GET">
                    @csrf

                    <button type="submit" class="btn btn-danger">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-dropdown-link>    
                        
                        
</td>
                        <td>
                        <x-dropdown-link>
                        <div x-data="{ open: false, deleteUrl: '' }">
    <button @click="open = true; deleteUrl = '{{ route('adminmanager.userdelete', $user->id) }}'" class="btn btn-danger">
        Usuń
    </button>

    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-50">
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <p>Are you sure delete this record?</p>
            <div class="flex justify-end space-x-2 mt-4">
                <button @click="open = false" class="btn btn-secondary">Anuluj</button>
                <form :action="deleteUrl" method="GET">
                    @csrf

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-dropdown-link>
</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
