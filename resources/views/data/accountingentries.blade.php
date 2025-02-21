<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accounting Entries') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <div class="container mt-4">
        <h2 class="mb-4">Accounting Entries</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Rubric</th>
                    <th>Role </th>
                    <th>Description</th>
                    <th>Organisation</th>
                    <th>Account</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->rubric }}</td>
                        <td>{{ $data->role  }}</td>
                        <td>{{ $data->description }}</td>
                        <td>{{ $data->organisation }}</td>
                        <td>{{ $data->account }}</td>
                        <td> 
                            
                        <x-dropdown-link>
                        <div x-data="{ open: false, deleteUrl: '' }">
    <button @click="open = true; deleteUrl = '{{ route('data.edit.accountingentries', $data->id) }}'" class="btn btn-danger">
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
    <button @click="open = true; deleteUrl = '{{ route('data.delete.accountingentries', $data->id) }}'" class="btn btn-danger">
        Delete record
    </button>

    <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-50">
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <p>Are you sure delete this record?</p>
            <div class="flex justify-end space-x-2 mt-4">
                <button @click="open = false" class="btn btn-secondary">Cancel</button>
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
