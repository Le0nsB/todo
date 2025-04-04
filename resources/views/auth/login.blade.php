<x-layout>
    <form method="POST">
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <label>E-pasts: <input name="email" type="email" class="input" required></input></label>
        <label>Parole: <input name="password" type="password" class="input" required></input></label>
        <button>Login</button>
    </form>
    </x-layout>