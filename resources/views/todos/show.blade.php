<x-layout>
    <x-slot:title>
        {{ $todo->content }}
    </x-slot:title>
    <h1>{{ $todo->content }}</h1>
    <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>
    <a method="POST" href="/todos/{{$todo->id}}/edit">Rediģēt</a>
    
    <form method="POST" action="/todos/{{$todo->id}}">
        @csrf
        @method("delete")
        <button>Dzest</button>
    </form>
    
</x-layout>