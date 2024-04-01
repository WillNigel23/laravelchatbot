<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-800 h-[80vh] p-4">
        <div class="flex flex-col h-full overflow-auto mb-4"
            x-data="{ scroll: () => { $el.scrollTo(0, $el.scrollHeight); }}"
            x-intersect="scroll()">
            <div class="flex flex-col h-full">
                <div class="grid grid-cols-12 gap-y-2">
                    @include('messages.partials.laravel-message', ['content' => view('messages.partials.help')])
                </div>
                <div id="messages" class="grid grid-cols-12 gap-y-2">
                    @if($messages->count() > 0)
                        @foreach($messages as $message)
                            @include('messages.partials.user-message', ['message' => $message])
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        @include('messages.partials.form')
    </div>
</div>
