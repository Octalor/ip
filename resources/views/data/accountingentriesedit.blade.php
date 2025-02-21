<x-app-layout>
<x-slot name="header">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Edit Accounting Entries') }}
        </h2>

       
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
 
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <p class="mt-1 text-sm text-gray-600">
            {{ __("Edit Accounting Entries") }}
</p>
    <form method="POST" action="{{route('data.store.accountingentries', ['id' => $data->id]) }}" class="mt-6 space-y-6">
        @csrf
        @method('PUT')
    <div>
            <x-input-label for="rubric " :value="__('Rubric')" />
            <x-text-input id="rubric " name="rubric " type="text" class="mt-1 block w-full" :value="old('rubric ', $data->rubric)" required autofocus autocomplete="rubric " />
            <x-input-error class="mt-2" :messages="$errors->get('rubric ')" />
    </div>
    <div>
            <x-input-label for="role" :value="__('Role')" />
            <x-text-input id="role" name="role" type="role" class="mt-1 block w-full" :value="old('role', $data->role)" required autocomplete="role" />
            <x-input-error class="mt-2" :messages="$errors->get('role')" />
    </div>
    <div>
            <x-input-label for="description " :value="__('Description ')" />
            <x-text-input id="description " name="description " type="description" class="mt-1 block w-full" :value="old('description ', $data->description )" required autocomplete="description "/>
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
    </div>
    <div>
            <x-input-label for="organisation" :value="__('Organisation ')" />
            <x-text-input id="organisation" name="organisation" type="organisation" class="mt-1 block w-full" :value="old('organisation', $data->organisation)" required autocomplete="organisation "/>
            <x-input-error class="mt-2" :messages="$errors->get('organisation')" />
    </div>
    <div>
            <x-input-label for="account" :value="__('Account')" />
            <x-text-input id="account" name="account" type="account" class="mt-1 block w-full" :value="old('account', $data->account )" required autocomplete="account"/>
            <x-input-error class="mt-2" :messages="$errors->get('account')" />
    </div>
    <div>
            <x-input-label for="tranche" :value="__('Tranche')" />
            <x-text-input id="tranche" name="tranche" type="tranche" class="mt-1 block w-full" :value="old('tranche', $data->tranche )" required autocomplete="tranche"/>
            <x-input-error class="mt-2" :messages="$errors->get('tranche')" />
    </div>

            <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Change data') }}</x-primary-button>
</x-app-layout>