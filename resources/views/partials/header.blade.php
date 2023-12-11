<header class="page-header">
<nav class="container">
    <a href="{{ route('home') }}">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
    </a>
    

    <ul class="menu">
        <li class="menu-item">
            <a href="{{ route('characters') }}">Characters</a>
            
        </li>
        <li class="menu-item">
            <a href="{{ route('comics') }}">Comics</a>
        </li>
    </ul>
</nav>
</header>