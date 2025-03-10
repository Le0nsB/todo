<x-layout>
    <x-slot:title>Rediģēt</x-slot:title>
    <h1>Rediģēt</h1>

    <form method="POST" action="/todos/{{ $todo->id }}" class="create">
        @csrf
        @method('PUT')
        <label>Saturs:<input name="content" value="{{$todo->content}}" class="input"/></label>
        @error("completed")
            <p>{{ $message }}</p>
        @enderror
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        <label class="checkbox">
            Izpildīts:
            <input name="completed" type="hidden" value="0" >
            <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }}> 
        </label>
        @error("completed")
            <p>{{ $message }}</p>
        @enderror
        
        <button>Saglabāt</button>
    </form>
</x-layout>