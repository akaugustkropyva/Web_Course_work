@extends('layouts.layout')

@section('title'){{$poster['name']}} @endsection

@section('content')

    <section class="links links-info-page">
        <div class="container">
            <a href="{{route('landing')}}">На головну</a>
            <p>&nbsp|&nbsp</p>
            <a href="{{route('container')}}">Афіша</a>
            <p class="full-name">&nbsp|&nbsp</p>
            <a class="full-name" href="">{{$poster['name']}}</a>
            <p class="short-name">&nbsp|&nbsp</p>
            <a class="short-name" href="">{{$poster['short-name']}}</a>
        </div>
    </section>

    @if ($errors->any())
        <div class="alert alert-danger">
            <div class="container">
                <div class="warning">
                    @foreach ($errors->all() as $error)
                        <p class="message">{{ $error }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <section class="poster-main-info">
        <div class="container">
            <h1>
                {{$poster['name']}}
            </h1>
            <hr>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="block">
                        <img src="../images/{{$poster['img']}}.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="full-poster-info">
                        <div class="written-info">
                            <img src="../images/poster/calendar.png" alt="">
                            <p>Дата проведення:&nbsp <br> Від {{$poster['from']}} - До {{$poster['to']}}</p>
                        </div>
                        <div class="written-info">
                            <img src="../images/poster/theater.png" alt="">
                            <p>{{$poster['hall']}} зала</p>
                        </div>
                        <div class="written-info">
                            <img src="../images/poster/banknotes.png" alt="">
                            <p>Ціна:</p>
                            <p class="price">{{$poster['price']}} ГРН.</p>
                        </div>
                    </div>
                    <div class="button">
                        <button onclick="show('block')">Придбати квиток</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="additional-info-block additional-info-block-info-page">
        <div class="container">
            <h1>
                Про подію
            </h1>
            <hr>
            <div class="block">
                <div class="spacing">
                    <p>
                        {!! $poster['about'] !!}
                    </p>
                </div>
            </div>
            <div class="form">
                <button onclick="show('block')">Придбати квиток</button>
            </div>
        </div>
    </section>

    <div onclick="show('none')" id="bg-form" class="bg-gray"></div>

    @include('includes.form')

@endsection
