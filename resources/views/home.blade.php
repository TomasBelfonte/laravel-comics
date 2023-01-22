<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel_Comics</title>
    @vite('resources/js/app.js')
</head>

<nav>
    {{-- navbar --}}

    @include('partials.nav')
</nav>

<body>

    <div class="tb-bg">

    </div>

    {{-- header --}}
    @include('partials.header')


    {{-- footer --}}
    @include('partials.footer')

</body>

</html>
