<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semillero</title>
    <link href="https://fonts.googleapis.com/css2?family=Martel:wght@300&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/normalize.css') }}>
    <link rel="stylesheet" href={{ asset('css/stylee.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>

<body>

    <a id="homeLink" href="/">Home</a>

    <main class="contenedor seccion contenido-centrado">
        <br>
        <h1 style="color: white; text-align:center;">Welcome back {{$name}}!</h1>

        <button class="botons" style="text-align: center"> 
        <a style="color: white; text-decoration:none;" href="logout">Logout</a></button>
        <br>
    </main>
</body>

</html>
