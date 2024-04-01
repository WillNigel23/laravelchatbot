<div class="col-start-6 col-end-13 p-3 rounded-lg">
    <div class="flex items-center justify-start flex-row-reverse">
        <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>
        <div class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
            {{ $message->content }}
        </div>
    </div>
</div>

@if($message->response === null)
    @include('messages.partials.laravel-message', ['content' => view('messages.partials.process-message', ['id' => $message->id]), 'id' => $message->id])
@else
    @include('messages.partials.laravel-message', ['content' => $message->response, 'id' => $message->id])
@endif
