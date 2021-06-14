<header class="main-header">
    <div class="container flex ai-center">
        <!-- Logo -->
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/dc-logo.png') }}" alt="dc logo">
        </a>
        <nav>
            <ul class="nav-list">
                <li class="flex ai-center jc-center {{Route::currentRouteName() === 'home' ? 'active' : ''}}"><a href="{{ route('home') }}">Home</a></li>
                <li class="flex ai-center jc-center {{strpos(Route::currentRouteName(), 'comics') !== false ? 'active' : ''}}"><a href="{{ route('comics.index') }}">Comics</a></li>
            </ul>
        </nav>
    </div>
    
</header>