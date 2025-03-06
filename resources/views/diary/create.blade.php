<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>
    <h1>Izveidot uzdevumu</h1>

    <form method="POST" action="/diary">
        @csrf
        <input name="title" />
        @error("title")
            <p>{{ $message }}</p>
        @enderror
        <textarea name="body"></textarea>
        @error("body")
            <p>{{ $message }}</p>
        @enderror
        <input name="date" type="date" />
        @error("date")
            <p>{{ $message }}</p>
        @enderror
        <button >Saglabāt</button>
    </form>
</x-layout>