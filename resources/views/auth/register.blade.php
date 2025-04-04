<x-layout>
    <h1>Reģistrēties</h1>
    <form method="POST">
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <label>Vārds: <input name="first_name" class="input" required></input></label>
        <label>Uzvārds: <input name="last_name" class="input" required></input></label>
        <label>E-pasts: <input name="email" type="email" class="input" required></input></label>
        <label>Parole: <input name="password" type="password" class="input" required></input></label>
        <label>Parole: <input name="password_confirmation" type="password" class="input" required></input></label>
        <button>Submit</button>
    </form>
    </x-layout>