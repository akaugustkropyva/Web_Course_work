@extends('layouts.layout')

@section('title')Афіша подій @endsection

@section('content')
    <section class="links">
        <div class="container">
            <a href="{{route('landing')}}">На головну</a>
            <p>&nbsp|&nbsp</p>
            <a href="{{route('container')}}">Афіша</a>
        </div>
    </section>

    <section class="choice-maker">
        <div class="container">
            <h1>
                Афіша подій
            </h1>
            <hr>
            <div class="row">
                <div class="col-4 col-lg-3">
                    <div class="filter-caption">
                        <img src="../images/filter/filter.png" alt="">
                        <p>Фільтр:</p>
                    </div>
                </div>
                <div class="col-8 col-lg-3">
                    <label>
                        <select class="choicebox main-options">
                            <option value="popular" selected>Популярні</option>
                            <option value="close">Найближчі</option>
                        </select>
                    </label>
                </div>
                <div class="col-12 col-lg-3">
                    <label>
                        <select class="choicebox dates">
                            <option class="choice" value="all-dates" selected>Усі дати</option>
                            <option class="choice" value="today">Сьогодні</option>
                            <option class="choice" value="tomorrow">Завтра</option>
                            <option class="choice" value="two-weeks">Два тижні</option>
                            <option class="choice" value="month">Місяць</option>
                        </select>
                    </label>
                </div>
                <div class="col-12 col-lg-3">
                    <label>
                        <select class="choicebox hall">
                            <option value="all-halls" selected>Усі зали</option>
                            <option value="small-hall">Мала зала</option>
                            <option value="starry-hall">Зоряна зала</option>
                            <option value="big-hall">Велика зала</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
    </section>

    <section class="posters-block posters-block-container">
        <div class="container">
            <div class="row">
                @if($data)
                    @foreach($data as $poster)
                        <div class="col-6 col-xl-3">
                            <div class="poster">
                                <p class="name">{{$poster['name']}}</p>
                                <img src="../images/{{$poster['img']}}.jpg" alt="">
                                <div class="calendar">
                                    <img src="../images/poster/calendar.png" alt="">
                                    <div class="text">
                                        <p>Від {{$poster['from']}}</p>
                                        <p>До {{$poster['to']}}</p>
                                    </div>
                                </div>
                                <hr class="poster-hr">
                                <p class="price">{{$poster['price']}} ГРН.</p>
                                <a href="{{route('posterinfo', $poster['img'])}}">Придбати квиток</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h1>
                        На жаль, подій нема...
                    </h1>
                @endif
            </div>

            <div class="form">
                <div class="more-button">
                    <a class="more" href="">Більше</a>
                    <img src="../images/more/redo.png" alt="">
                </div>
            </div>
        </div>
    </section>

@endsection
