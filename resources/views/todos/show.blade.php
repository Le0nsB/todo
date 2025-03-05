<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daaaa</title>
    <link rel="stylesheet" href="{{ asset("style.css") }}">
</head>
<body>
    <x-layout>
        <x-slot:title>
            {{ $todo->content }}
        </x-slot:title>
        <h1>{{ $todo->content }}</h1>
    </x-layout>
    
    <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>

</body>
</html>