<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notas</title>

    {{-- Wailwid css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
</head>
<script>
        if(!localStorage.getItem('logged') || localStorage.getItem('logged')==null){
            console.log('not logged')
            window.location.href = 'http://localhost:8000/login'
        }
</script>
<body class="bg-green-500">


    <div id="app">

        @yield('content')

    </div>

    <script src="{{ asset('js/app.js') }} "defer>

    </script>
</body>
</html>
