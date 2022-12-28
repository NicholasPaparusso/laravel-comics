@extends('layouts.main')

@section('content')
<div class="jumbo">
    <div class="image-container">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
</div>
<div class="separator"></div>
<div class="details container">

   <div class="row top">
    <div class="col-9">
        <h2>{{$comic['title']}}</h2>
        <span>U.S. Price: {{$comic['price']}} </span>
        <span>
            @if ($comic['isAvailable'])Available
            @else Is not Available

            @endif
        </span>
        <span>Check Availability <i class="fa-solid fa-caret-down"></i> </span>
        <p>
        {!! $comic['description'] !!}
        </p>
    </div>

    <div class="col-3">
        <h6></h6>
        <div class="img-container">
            <a href="#">
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
            </a>
        </div>
    </div>
   </div>

   <div class="row bottom">
    <div class="col-6">
        <h5>Talent</h5>
        <div class="row">
            <p>Art by: <span> {{ implode(',', $comic['artists']) }}</span></p>
            <p>Written by: <span> {{ implode(',', $comic['writers']) }}</span></p>
        </div>

    </div>

    <div class="col-6">
        <h5>Specs</h5>
        <p>Series: <span>{{$comic['series']}}</span></p>
        <p>U.S. Price: <span>{{$comic['price']}}</span></p>
        <p>On Sale Date: <span>{{$comic['sale_date']}}</span></p>
    </div>
   </div>

</div>
@endsection
