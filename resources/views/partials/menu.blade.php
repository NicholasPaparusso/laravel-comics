<div class="menu">
    <div class="container">
        @foreach (config('db.items') as $item )
        <div class="np-card">
            <img src="{{Vite::asset('resources/img')}}/{{$item['img']}}" alt="{{$item['text']}}">
            <a href="{{$item['href']}}">{{$item['text']}}</a>
          </div>
        @endforeach
      </div>
</div>
