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
                    @foreach ( config('db.navbar') as $navbarElement )
                    <li>
                        <a class="{{ Route::currentRouteName() === $navbarElement['name'] ? 'active' : '' }}" href="{{route($navbarElement['name'])}}">{{$navbarElement['name']}}</a>
                    </li>
                    @endforeach
                </ul>
                <form action="">
                    <input type="text" placeholder="Search..">
                    <i type="submit" class="fa-solid fa-magnifying-glass"></i>
                </form>

            </div>




      </div>
</header>
