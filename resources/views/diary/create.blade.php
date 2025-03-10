<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>
    <h1>Izveidot uzdevumu</h1>

    <form method="POST" action="/diary" class="create">
        @csrf
        <input name="title" placeholder="Tituls" class="input"/>
        @error("title")
            <p>{{ $message }}</p>
        @enderror
        <textarea name="body" placeholder="Saturs"></textarea>
        @error("body")
            <p>{{ $message }}</p>
        @enderror
        <input name="date" type="date" class="input"/>
        @error("date")
            <p>{{ $message }}</p>
        @enderror
        <button >Saglabāt</button>
    </form>
</x-layout>