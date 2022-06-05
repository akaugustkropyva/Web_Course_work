@extends('layouts.layout')

@section('title')Планетарій Planetium @endsection

@section('content')
    <section class="first-block">
        <div class="container">
            <h1>Новий Київський<br>планетарій “Planetium”</h1>
            <h2>Запрошує на неймовірну подорож загадковим космосом.<br>До зірок - один крок!</h2>
            <a class="main-button" href="{{route('container')}}">Придбати квиток</a>
        </div>
    </section>

    <section class="circles-block">

        <div class="container">
            <h1>
                Чим ми пишаємося
            </h1>
            <hr>
            <div class="row">
                <div class="col-6 col-xl-3">
                    <div class="circle">
                        <img class="icon small" src="../images/circles/cinemapurple.png" alt="">
                    </div>
                    <p>Декілька залів</p>
                </div>
                <div class="col-6 col-xl-3">
                    <div class="circle">
                        <img class="icon" src="../images/circles/view.png" alt="">
                    </div>
                    <p>Купольна проекція</p>
                </div>
                <div class="col-6 col-xl-3">
                    <div class="circle">
                        <img class="icon" src="../images/circles/4k.png" alt="">
                    </div>
                    <p>Якісне зображення</p>
                </div>
                <div class="col-6 col-xl-3">
                    <div class="circle">
                        <img class="icon small" src="../images/circles/soundwave.png" alt="">
                    </div>
                    <p>Об'ємний звук</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sales-block">
        <div class="container">
            <h1>
                Знижки та пропозиції
            </h1>
            <hr>
            <div class="row">
                <div class="col-ld-12 col-xl-4">
                    <div class="square">
                        <img src="../images/sales/student.png" alt="">
                        <p>Для дітей та школярів</p>
                    </div>
                    <div class="block">
                        <ul>
                            <li>Для дітей до 12 років - знижка 35% на купівлю квитків<br><br></li>
                            <li>Для школярів, що мають студентський квиток - знижка 15%<br><br></li>
                            <li>Перша екскурсія малою залою за програмою для дітей до 12 років - безкоштовна</li>
                        </ul>
                    </div>
                </div>
                <div class="col-ld-12 col-xl-4">
                    <div class="square">
                        <img src="../images/sales/group.png" alt="">
                        <p>Для груп від 10 осіб</p>
                    </div>
                    <div class="block">
                        <ul>
                            <li>Для груп із 10-20 осіб - знижка 10% на купівлю квитків<br><br></li>
                            <li>Для груп із 20 та більше осіб - знижка 20% на купівлю квитків, а на бронювання - знижка
                                7%<br><br></li>
                            <li>Для груп із 50 та більше осіб знижка на бронювання 30-50% (в залежності від зали)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-ld-12 col-xl-4">
                    <div class="square">
                        <img src="../images/sales/teamwork.png" alt="">
                        <p>Для частих відвідувачів</p>
                    </div>
                    <div class="block">
                        <ul>
                            <li>Звичайний абонемент діє 12 місяців від моменту купівлі та дає знижку на будь-яке
                                замовлення 5%<br><br></li>
                            <li>Абонемент-люкс діє 36 місяців від моменту купівлі та дає знижку на будь-яке замовлення
                                20%<br><br></li>
                            <li>Спеціальний абонемент надається кожному лише на 24 години свого дня народження зі
                                знижкою 50% на будь-яку покупку
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="posters-block">
        <div class="container">
            <h1>
                Актуальні події
            </h1>
            <hr>
            <div class="row">
                @if($data)
                    @for($i = 0; $i < 4 ; $i++)
                        <div class="col-6 col-xl-3">
                            <div class="poster">
                                <p class="name">{{$data[$i]['name']}}</p>
                                <img src="../images/{{$data[$i]['img']}}.jpg" alt="">
                                <div class="calendar">
                                    <img src="../images/poster/calendar.png" alt="">
                                    <div class="text">
                                        <p>Від {{$data[$i]['from']}}</p>
                                        <p>До {{$data[$i]['to']}}</p>
                                    </div>
                                </div>
                                <hr class="poster-hr">
                                <p class="price">{{$data[$i]['price']}} ГРН.</p>
                                <a href="{{route('posterinfo', $data[$i]['img'])}}">Придбати квиток</a>
                            </div>
                        </div>
                    @endfor
                @else
                    <h1>
                        На жаль, подій нема...
                    </h1>
                @endif
            </div>
            <div class="form">
                <a class="all-events" href="{{route('container')}}">Всі івенти</a>
            </div>
        </div>
    </section>

    <section class="additional-info-block">
        <div class="container">
            <h1>
                Завітайте до нас
            </h1>
            <hr>
            <div class="block">
                <div class="spacing">
                    <p>
                        ► Отримайте неперевершені емоції від перегляду космічних подорожей очима комонавтів;<br><br>
                        ► Дізнайтеся нові факти та розгадайте багато таємниць близького та далекого всесвіту;<br><br>
                        ► Звіть друзів і рідних та насолоджуйтеся часом проведеним разом під космічним небом.
                    </p>
                    <img src="../images/planetarium.jpg" alt="">
                </div>
            </div>
            <div class="form">
                <button onclick=location.href="{{route('container')}}">Придбати квиток</button>
            </div>
        </div>
    </section>

@endsection
