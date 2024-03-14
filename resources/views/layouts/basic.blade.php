<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite('resources/js/app.js')

</head>

<body>
    <header>
        @include('components.header')
    </header>

        {{-- qui sarà trasportato il contenuto di ogni pagina, la quale partirà con un tag main --}}
            @yield('main')

            @vite(['resources/js/app.js'])
</body>

</html>
