<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
    <header class="header @if (!Request::is('/')) header-other-pages @endif ">
        @include('includes.header')
    </header>

@yield('content')
    @include('includes.footer')
</body>
</html>

