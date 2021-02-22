<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List of Crazy Messages
        </h2>
    </x-slot>
    @foreach ($messages as $message)
        <div>
            <x-message-card>
                <p>{{ $message->message }} -- <b> {{ $message->author->name }} </b></p>
            </x-message-card>
        </div>
    @endforeach

    {{ $messages->links() }}

</x-app-layout>
