<x-layout>
    <x-slot:title>Rediģēt</x-slot:title>
    <h1>Rediģēt</h1>

    <form method="POST" action="/diaries/{{ $diary->id }}" class="create">
        @csrf
        @method('PUT')
        <label>Tituls:<input name="title" value="{{$diary->title}}" class="input"/></label>
        @error("title")
            <p>{{ $message }}</p>
        @enderror
        <label>Saturs:<textarea name="body" value="{{$diary->body}}" class="input"></textarea></label>
        @error("body")
            <p>{{ $message }}</p>
        @enderror
        <label>Datums:<input name="date" value="{{$diary->date}}" type="date" class="input"/></label>
        @error("date")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</x-layout>