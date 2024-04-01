<form
    hx-post="/messages/send"
    hx-target="#messages"
    hx-swap="beforeend"
    class="flex flex-row items-center h-16 rounded-xl bg-gray-700 w-full px-4">
    @csrf

    <div class="flex-grow">
        <div class="relative w-full">
            <input type="text" name="content" class="flex w-full border rounded-xl focus:outline-none pl-4 h-10" required>
        </div>
    </div>
    <div class="ml-4">
        <x-primary-button>
            Send
        </x-primary-button>
    </div>
</form>
