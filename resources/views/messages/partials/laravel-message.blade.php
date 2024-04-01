<div class="col-start-1 col-end-8 p-3 rounded-lg">
    <div class="flex flex-row items-center">
        <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
            L
        </div>
        <div id="message_{{ isset($id) ? $id : '' }}" class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
            {!! $content !!}
        </div>
    </div>
</div>
