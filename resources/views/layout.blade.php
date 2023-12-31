<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel</title>

    @vite('resources/css/app.css')

</head>

<body class="scroll-smooth">

    @include('navbar_user')

    <div class="mt-40">
        @yield('content')
    </div>

    @include('footer')

</body>

</html>