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
        <form action="passwordRecovery" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <fieldset class="formuDe form-register">
                <h2 class="centrar-texto">Recuperación de contraseña </h2>
                <h4 class="centrar-texto"> Ingresa tu correo electronico</h4>
                <br>
                <input type="email" name="email" id="email" placeholder="Tu email">

                <input class="boton" type="submit" value="Enviar">
            </fieldset>
        </form>
        <br>
    </main>
</body>

</html>
