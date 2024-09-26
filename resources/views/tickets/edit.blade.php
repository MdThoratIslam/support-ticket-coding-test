<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome, ') . Auth::user()->roles->pluck('name')->first() }} {{ __("You're logged in!") }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('tickets.update', $ticket->id) }}">
                        @method('PUT')
                        @csrf
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                          :value="old('name', $ticket->name)" autofocus autocomplete="name" readonly/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                                          :value="old('description', $ticket->description)" required autocomplete="description" readonly/>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="closed_reason" :value="__('Closed Reason')" />
                            <x-text-input id="closed_reason" class="block mt-1 w-full" type="text" name="closed_reason"
                                          :value="old('description')" required autocomplete="description"/>
                            <x-input-error :messages="$errors->get('closed_reason')" class="mt-2" />
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Close Ticket') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
