<form
    hx-post="messages/{{ $id }}/generate"
    hx-target="#message_{{ $id }}"
    hx-trigger="load delay:1.5s"
    >
    @csrf
    <img src="https://assets-v2.lottiefiles.com/a/5d8bd102-1174-11ee-91ba-6fa0e8a2d782/kaIfJgZedI.gif" width="25" height="25">
</form>
