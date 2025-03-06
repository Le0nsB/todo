<x-layout>
    <x-slot:title>Dienasgramata</x-slot:title>
    <ul>
        @foreach ($diary as $diary2)
        <li><a class="list "href="/diaries/{{ $diary2->id }}">{{ $diary2->title }}</a></li>
        @endforeach 
    </ul>
</x-layout>