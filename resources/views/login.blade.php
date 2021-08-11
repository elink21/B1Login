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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <a id="homeLink" href="/">Home</a>

    <main class="contenedor seccion contenido-centrado">
        <br>
        <form action="login" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <fieldset class="formuDe form-register">
                <h1 class="centrar-texto">Login </h1>
                <h4 class="centrar-texto"> Ingresa los siguientes datos</h4>
                <label for="E-mail">E-mail:</label>
                <input name="email" type="email" id="email" placeholder="Tu email">
                <label for="Contraseña">Contraseña:</label>
                <input name="password" type="password" id="password" />
                <a href="passwordView" class="boton">¿Olvidaste tu contraseña?</a>
                <input class="botons" type="submit" value="Entrar">
            </fieldset>
        </form>
        <br>
    </main>
</body>

</html>
