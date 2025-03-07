<x-layout>
    <x-title>Rediģēt</x-title>
    <h1>Rediģēt</h1>

    <form method="POST" action="/todos/{{ $todo->id }}">
        @csrf
        @method('PUT')
        <label>Saturs:<input name="content"/></label>
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        <label>Izpildīts: <input name="completed" type="checkbox" value="{{ $todo->completed }}">   </label>
        <button>Saglabāt</button>
    </form>
</x-layout>