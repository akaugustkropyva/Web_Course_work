@extends('layouts.layout')

@section('title')
    Контакти
@endsection

@section('content')

    <section class="links">
        <div class="container">
            <a href="{{route('landing')}}">На головну</a>
            <p>&nbsp|&nbsp</p>
            <a href="{{route('contacts')}}">Контакти</a>
        </div>
    </section>

    <section class="poster-main-info contacts-info">
        <div class="container">
            <h1>
                Контакти
            </h1>
            <hr>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="block">
                        <img src="../images/contacts/map.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="full-poster-info">
                        <div class="written-info footer-info">
                            <img src="../images/contacts/placeholder.png" alt="">
                            <p>Адреса:<br>
                                вул. Політехнічна 6, Київ
                            </p>
                        </div>
                        <div class="written-info footer-info">
                            <img src="../images/contacts/phone-call.png" alt="">
                            <p>
                                <div class="phone phone-contacts">
                                    <div class="small">
                                        <div>098</div>
                                        <div>044</div>
                                    </div>
                                    456-12-30
                                </div>
                            </p>
                        </div>
                        <div class="written-info footer-info">
                            <img src="../images/contacts/email.png" alt="">
                            <p>Зворотній зв’язок:<br>
                                planetium_kyiv@gmail.com</p>
                        </div>
                        <div class="written-info footer-info">
                            <img class="hash-tag" src="../images/contacts/hashtag.png" alt="">
                            <p>Слідкуйте за нами з хештегом:<br>
                                #planetium_planetium_kyiv</p>
                        </div>
                        <div class="written-info social-media">
                            <p>
                                Наші соціальні мережі
                            </p>
                        </div>
                        <div class="written-info">
                            <div class="media">
                                <a class="media-icon youtube" href="https://www.youtube.com/">
                                    <img src="../images/media/youtube.png" alt="youtube">
                                </a>
                                <a class="media-icon instagram" href="https://www.instagram.com/">
                                    <img src="../images/media/instagram.png" alt="">
                                </a>
                                <a class="media-icon facebook" href="https://www.facebook.com/">
                                    <img src="../images/media/facebook.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
