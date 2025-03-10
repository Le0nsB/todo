<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>
    <h1>Izveidot uzdevumu</h1>

    <form method="POST" action="/todos" class="create">
        @csrf
        <input name="content" class="input"/>
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        <button >Saglabāt</button>
    </form>
</x-layout>