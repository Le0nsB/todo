<x-layout>
    <h1>Sveiks, Laravel!</h1>

    @auth
    <p>Sveiks, {{ Auth::user()->first_name}}</p>
    <form method="POST" action="/logout">
    @csrf
    
        <button>Logout</button>
    </form>
    @endauth

    @guest
        <p>Sveiks, viesi!</p>
        <a href="/login">Login</a>
    @endguest
</x-layout>
