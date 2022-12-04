<!doctype html>
<html lang="en">

<head>
    <link rel="icon" type="img/png"href="img/akatsuki.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">


    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ $title }}</title>
    <style>
        #loading{
            width: 50px;
            height: 50px;
            border: solid 5px #ccc;
            border-top-color:#00c3ff;
            border-radius:100%;
    
            position: fixed;
            left:0;
            top: 0;
            right: 0;
            bottom:0;
            margin:auto;
            animation: putar 2s linear infinite;
        }
        @keyframes putar{
            from{transform:rotate(0deg)}
            to{transform:rotate(360deg)}
        }
    </style>
</head>

<body>
    <div id="loading"></div>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script>
        var loading = document.getElementById('loading');
        window.addEventListener('load',function(){
            loading.style.display="none";
        });
    </script>

</body>

</html>
