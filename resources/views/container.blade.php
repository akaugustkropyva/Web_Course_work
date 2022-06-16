@extends('layouts.layout')

@section('title')
    Афіша подій
@endsection

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
            <form action="{{route('container')}}" method="get">
                <div class="row">
                    <div class="col-4 col-lg-3">
                        <div class="filter-caption">
                            <img src="../images/filter/filter.png" alt="">
                            <p>Фільтр:</p>
                        </div>
                    </div>
                    <div class="col-8 col-lg-3">
                        <label>
                            <select name="date_choice" class="choicebox dates">
                                @if($dates)
                                    @foreach($dates as $date)
                                        <option value="{{$date->value}}"
                                                @if(isset($_GET['date_choice'])) @if($_GET['date_choice'] == $date->value) selected @endif @endif >{{$date->name}}</option>
                                    @endforeach
                                @else
                                    <option value="no-date" selected>Нема дат</option>
                                @endif
                            </select>
                        </label>
                    </div>
                    <div class="col-12 col-lg-3">
                        <label>
                            <select name="hall_id" class="choicebox halls">
                                @if($halls)
                                    @foreach($halls as $hall)
                                        <option value="{{$hall->id}}"
                                                @if(isset($_GET['hall_id'])) @if($_GET['hall_id'] == $hall->id) selected @endif @endif >{{$hall->name}}</option>
                                    @endforeach
                                @else
                                    <option value="no-hall" selected>Нема залів</option>
                                @endif
                            </select>
                        </label>
                    </div>
                    <div class="col-12 col-lg-3">
                        <label>
                            <select name="orderBy" class="choicebox order">
                                @if($sortings)
                                    @foreach($sortings as $sorting)
                                        <option value="{{$sorting->value}}"
                                                @if(isset($_GET['orderBy'])) @if($_GET['orderBy'] == $sorting->value) selected @endif @endif >{{$sorting->name}}</option>
                                    @endforeach
                                @else
                                    <option value="no-sorting" selected>Нема сортувань</option>
                                @endif
                            </select>
                        </label>
                    </div>
                </div>
                <div class="form">
                    <button type="submit" class="search">Пошук</button>
                </div>
            </form>
        </div>
    </section>

    <section class="posters-block posters-block-container">
        <div class="container">
            <div class="row">
                @if($posters)
                    @foreach($posters as $poster)
                        <div class="col-6 col-xl-3">
                            <div class="poster">
                                <p class="name">{{$poster->name}}</p>
                                <img src="../images/events/{{$poster->img}}.jpg" alt="">
                                <div class="calendar">
                                    <img src="../images/poster/calendar.png" alt="">
                                    <div class="text">
                                        <p>Від {{date('d.m', strtotime($poster->from))}}</p>
                                        <p>До {{date('d.m', strtotime($poster->to))}}</p>
                                    </div>
                                </div>
                                <hr class="poster-hr">
                                <p class="price">{{$poster->price}} ГРН.</p>
                                <a href="{{route('posterinfo', $poster->id)}}">Придбати квиток</a>
                            </div>
                        </div>
                    @endforeach
                    <div class="form">
                        {{$posters->links()}}
                    </div>
                @else
                    <h1>
                        На жаль, подій нема...
                    </h1>
                @endif
            </div>
        </div>
    </section>

@endsection
