@extends('layouts.layout')

@section('title')
    Завершіть дії
@endsection

@section('content')
    <section class="links">
        <div class="container">
            <a href="{{route('landing')}}">На головну</a>
            <p>&nbsp|&nbsp</p>
            <a href="{{route('container')}}">Афіша</a>
        </div>
    </section>

    <section class="confirmation">
        <div class="container">
            @if($name && $email)
                <h1>Користувач {{$name}}</h1>
                <div class="message">
                    <img src="../images/submit/e-mail.png" alt="">
                    <p>На пошту {{$email}} було надіслано повідомлення із підтвердженням покупки. Будь ласка, введіть
                        код,
                        який було надіслано на вказаний номер телефону.</p>
                </div>
            @else
                <h1>Помилка!</h1>
                <div class="message">
                    <img src="../images/submit/e-mail.png" alt="">
                    <p>На жаль, дані не було знайдено!</p>
                </div>
            @endif
        </div>
    </section>

@endsection

