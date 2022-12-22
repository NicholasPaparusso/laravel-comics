<header>

    <div class="topbar">
       <div class="container">
            <a href="#">DC POWER&#8480; VISA&REG;</a> <a href="#">ADDITIONAL DC SITES <i class="fa-solid fa-chevron-down"></i></a>
       </div>
    </div>
    <div class="container">

            <div class="logo">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
            </div>

            <div class="nav">
                <ul>
                    <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{route('home')}}">Home</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}" href="{{route('characters')}}">characters</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{route('comics')}}">comics</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{route('movies')}}">movies</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{route('tv')}}">tv</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{route('games')}}">games</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="{{route('collectibles')}}">collectibles</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="{{route('videos')}}">videos</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{route('fans')}}">fans</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{route('news')}}">news</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{route('shop')}}">shop <i class="fa-solid fa-caret-down"></i></a></li>

                </ul>
                <form action="">
                    <input type="text" placeholder="Search..">
                    <i type="submit" class="fa-solid fa-magnifying-glass"></i>
                </form>

            </div>




      </div>
</header>
