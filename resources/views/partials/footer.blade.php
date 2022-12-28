<footer>

    <div class="top">

      <div class="container">
        <div class="row links">

            @foreach (config('db.links') as $link )
            <div class="col-4 link-elements">
                <h4>{{strtoupper($link['title']) }}</h4>
                <ul>
                    @foreach ( $link['linkList'] as $linkEl  )
                    <li><a href="#">{{$linkEl}}</a></li>
                     @endforeach
                </ul>
                </div>
            @endforeach

        </div>


        <div class="logo"></div>

      </div>
    </div>

    <div class="bot">
      <div class="container">

        <div class="btn">
          SIGN-UP NOW!
        </div>

        <div class="socials">
          <h3>FOLLOW US</h3>

          <ul>
            @foreach (config('db.socials') as $social )
            <li>
                <a href="{{$social['href']}}">
                    <img src="{{Vite::asset('resources/img/')}}{{$social['pic']}}" alt="{{$social['name']}}">
                </a>
            </li>
            @endforeach

          </ul>
        </div>

      </div>
    </div>

  </footer>
