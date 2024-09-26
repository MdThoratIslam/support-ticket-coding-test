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
                    <table class="min-w-full divide-y divide-gray-200 border-collapse border border-slate-500">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">{{ $ticket->id }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">{{ $ticket->name }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">{{ $ticket->description }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    @if ($ticket->status == 'open')
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                        text-green-600">
                                            Open
                                        </span>
                                    @elseif ($ticket->status == 'closed')
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full text-rose-800">
                                            Closed
                                        </span>
                                    @endif
                                </td>
                               
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
