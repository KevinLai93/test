<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('partials._head')
</head>
<body>
    <div class="wrapper">
        @include('partials._nav')
        @yield('content')
    </div>
</body>
</html>
