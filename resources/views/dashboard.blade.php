<x-app-layout>
    <div class="py-12">
        @include('messages.partials.chat-frame', ['messages' => $messages])
    </div>
</x-app-layout>
