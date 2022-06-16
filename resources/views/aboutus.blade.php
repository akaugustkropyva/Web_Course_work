@extends('layouts.layout')

@section('title')
    Про нас
@endsection

@section('content')

    <section class="links">
        <div class="container">
            <a href="{{route('landing')}}">На головну</a>
            <p>&nbsp|&nbsp</p>
            <a href="{{route('aboutus')}}">Про нас</a>
        </div>
    </section>

    <section class="poster-main-info about-us-picture-block">
        <div class="container">
            <h1>
                Про планетарій
            </h1>
            <hr>
            <div class="row">
                <div class="col-12">
                    <div class="block">
                        <img src="../images/planetarium/planetarium.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="additional-info-block additional-info-block-info-page info-about-us">
        <div class="container">
            <div class="block">
                <div class="spacing">
                    <p>
                        Київський планетарій відкрився в січні 1952 року. Відкриття планетарію в Києві стало можливим
                        завдяки ініціативі видатного астронома Сергія Костянтиновича Всехсвятського.<br><br>
                        Для роботи Київського планетарію пристосували будівлю колишнього костьолу св. Олександра на
                        вулиці Челюскінців (нині — вул. Костьольна). В лекційному залі було натягнуто купол – екран
                        сферичної форми діаметром 14,5 метрів. Зал вміщував до 180 відвідувачів.<br><br>
                        Вигляд зоряного неба, рух Сонця, Місяця та планет демонструвалися за допомогою апарату
                        «Планетарій» фірми Цейс. Устаткування планетарію доповнювалося різноманітним проекційним
                        обладнанням — проектором затемнень, слайдовими проекторами, ліхтарем «море-сніг» тощо.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sales-block hall-blocks">
        <div class="container">
            <h1>
                Наші зали
            </h1>
            <hr>
            <div class="row">
                <div class="col-ld-12 col-xl-4">
                    <div class="square">
                        <img src="../images/planetarium/small_cinema.jpg" alt="">
                        <p>Мала зала</p>
                    </div>
                    <div class="block">
                        <ul>
                            <li>Діаметр куполу — 17 метри</li>
                            <li>Висота куполу — 7 метрів</li>
                            <li>Кількість місць — 169</li>
                            <li>Астрономічні ефекти — метеорний дощ, рух комети, зміна фаз Місяця, затемнення Сонця,
                                болід, полярні сяйва.
                            </li>
                            <li>оптико-механічна система Zeiss Mark IV, виробництва компанії Carl Zeiss, встановлена у
                                1988 році;
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-ld-12 col-xl-4">
                    <div class="square">
                        <img src="../images/planetarium/starry_cinema.jpg" alt="">
                        <p>Зоряна зала</p>
                    </div>
                    <div class="block">
                        <ul>
                            <li>Діаметр куполу — 20 метри</li>
                            <li>Висота куполу — 9,5 метрів</li>
                            <li>Кількість місць — 200</li>
                            <li>Астрономічні ефекти — метеорний дощ, рух комети, болід, полярні сяйва.</li>
                            <li>оптико-механічна система Zeiss Mark IV, виробництва компанії Carl Zeiss, встановлена у
                                1988 році;
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-ld-12 col-xl-4">
                    <div class="square">
                        <img src="../images/planetarium/big_cinema.jpg" alt="">
                        <p>Велика зала</p>
                    </div>
                    <div class="block">
                        <ul>
                            <li>Діаметр куполу — 23 метри</li>
                            <li>Висота куполу — 11,5 метрів</li>
                            <li>Кількість місць — 296</li>
                            <li>Астрономічні ефекти — метеорний дощ, рух комети, зміна фаз Місяця, затемнення Сонця,
                                болід, полярні сяйва.
                            </li>
                            <li>надсучасна цифрова проекційна система DX12 виробництва компанії Front Pictures,
                                встановлена в 2016 році.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="circles-block partners">
        <div class="container">
            <h1>
                Наші партнери
            </h1>
            <hr>
            <div class="row">
                <div class="col-6 col-xl-3">
                    <img class="circle" src="../images/partrers/nasa.jpg" alt="">
                    <p>NASA</p>
                </div>
                <div class="col-6 col-xl-3">
                    <img class="circle" src="../images/partrers/imax.jpg" alt="">
                    <p>IMAX</p>
                </div>
                <div class="col-6 col-xl-3">
                    <img class="circle" src="../images/partrers/spacex.jpg" alt="">
                    <p>SpaceX</p>
                </div>
                <div class="col-6 col-xl-3">
                    <img class="circle" src="../images/partrers/kyiv_cinema.jpg" alt="">
                    <p>Київський планетарій</p>
                </div>
            </div>
        </div>
    </section>

@endsection
