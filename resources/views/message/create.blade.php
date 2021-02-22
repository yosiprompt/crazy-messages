<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Crazy Message
        </h2>
    </x-slot>
    <x-card>
        <form method="POST" action="{{ route('message.store') }}">
            @csrf
            <div>
                <textarea name="message" id="message" cols="30" rows="5" placeholder="Write your message here" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    Send
                </x-button>
            </div>
        </form>
    </x-card>
</x-app-layout>
