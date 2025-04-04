<header>
@auth
    <nav class="navbar">
        <ul class="route">
            <li><a href="/" >Sākums</a></li>
            <li><a href="/todos">Visi uzdevumi</a></li>
            <li><a href="/diaries">Dienasgrāmata</a></li>
            <li><a href="/todos/create">Izveidot</a></li>
            <li><a href="/diary/create">Izveidot dg</a></li>
            <div class="left">
                <li><a href="/register" class="left_element">Register</a></li>
                <li><a href="/login">Login</a></li>
            </div>
        </ul>
    </nav>
@endauth

@guest
    <nav class="navbar">
        <ul class="route">
            <li><a href="/" >Sākums</a></li>
            <div class="left">
                <li><a href="/register" class="left_element">Register</a></li>
                <li><a href="/login">Login</a></li>
            </div>
        </ul>
    </nav>
@endguest
</header>