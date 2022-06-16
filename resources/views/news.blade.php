@extends('layouts.layout')

@section('title')
    Новини
@endsection

@section('content')

    <section class="links">
        <div class="container">
            <a href="{{route('landing')}}">На головну</a>
            <p>&nbsp|&nbsp</p>
            <a href="{{route('news')}}">Новини</a>
        </div>
    </section>
    @if($news)
        <section class="additional-info-block news">
            <div class="container">
                @foreach($news as $data)
                    <h1>
                        {{$data->name}}
                    </h1>
                    <hr>
                    <div class="block">
                        <div class="spacing">
                            <p>
                                {!!$data->about!!}
                            </p>
                            <img src="../images/news/{{$data->img}}.jpg" alt="">
                        </div>
                    </div>
                    <div class="form">
                        <button onclick=location.href="{{$data->link}}">Детальніше</button>
                    </div>
                @endforeach
            </div>
        </section>
    @else
        <section class="additional-info-block news">
            <div class="container">
                <h1>
                    Нема новин...
                </h1>
            </div>
        </section>
    @endif

@endsection
