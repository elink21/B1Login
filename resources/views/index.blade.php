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
        <form action=" ">
            <fieldset class="formuDe form-register centrar-texto ">
                <h3>¿Ya tienes cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <a href="loginView" class="boton">Iniciar sesión</a>
                <br>
                <h3>¿Aún no tienes cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <a href="registerView" class="boton">Registrate</a>
            </fieldset>
        </form>
        <br>
    </main>
</body>

</html>
