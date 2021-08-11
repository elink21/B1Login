<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talent Program Login</title>

    <link rel="stylesheet" href={{ asset('styles/kendo.common.min.css') }} />
    <link rel="stylesheet" href={{ asset('styles/kendo.default.min.css') }} />
    <link rel="stylesheet" href={{ asset('styles/kendo.default.mobile.min.css') }} />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.js"
        integrity="sha512-E378bwaeZf1nwXeJGIwTB58A5gPt5jFU3u6aTGja4ZdRFJeo/N/REKnBgNZOZlH6JdnOPO98vg2AnSGaNfCMFQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src={{ asset('js/jquery.min.js') }}></script>

    <link rel="stylesheet" href="{{ asset('css/kendoVersionStyles.css') }}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    <script src={{ asset('js/kendo.all.min.js') }}></script>
</head>

<body>
    <div id="homeButton">
        <a href="/"> <i class="material-icons">home</i>
        </a>
    </div>

    <div class="container">
        @yield('page')
    </div>
</body>

<script src="{{ asset('js/handCrafted/loader.js') }}"></script>

</html>
