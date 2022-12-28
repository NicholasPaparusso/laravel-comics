@extends('layouts.main')

@section('content')

<div class="jumbo">
    <div class="btn">
        <h2>current series</h2>
    </div>
</div>

<div class="comics">

    <div class="container">
        @foreach ($dbcomics as $comic )

            <div class="np-card">
                <a href="{{ route('details', ['id' => $comic['id']] )}}">
                <div class="image">
                <img src="{{$comic['thumb']}}" alt="{{$comic['price']}}">
                <div class="info-hidden">
                    <p>Prezzo: {{$comic['price']}} </p>
                    <p>Tipologia: {{$comic['type']}}</p>
                </div>
                </div>
                </a>
                <div class="info">
                <h4>{{$comic['title']}}</h4>
                </div>
            </div>

        @endforeach




        <div class="btn">
          <h5>load more</h5>
        </div>

    </div>

</div>



@endsection
