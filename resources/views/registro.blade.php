<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
        integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>

<body>

    <a id="homeLink" href="/">Home</a>

    <section class="form-register">
        <h4>Registro Usuario</h4>

        <form id="registerForm" action="registerUser" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <input class="controls" type="text" name="name" id="name" placeholder="Ingrese su Nombre">
            <input class="controls" type="text" name="lastname" id="lastname" placeholder="Ingrese sus Apellidos">
            <input class="controls" type="email" name="email" id="email" placeholder="Ingrese su Correo">
            <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
            <input class="controls" type="password" name="retypedPassword" id="password"
                placeholder="Confirme su Contraseña">
            <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
            <button class="botons" type="submit">Registrar</button>
        </form>
        <p><a href="loginView">¿Ya tengo Cuenta?</a></p>
    </section>


    <script>
        $(document).ready(function() {
            $("#registerForm").validate({
                event: "blur",
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    retypedPassword: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password"
                    }
                },
                messages: {
                    name: "Introduce un nombre correcto",
                    lastName: "Please enter ur lastName",
                    email: "Introduce un correo valido",
                    password: {
                        required: "Se requiere una contraseña",
                        minlength: "La contraseña debe tener un minimo de 6 caracteres"
                    },
                    retypedPassword: "Las contraseñas no coinciden"
                },
                errorElement: "label",
                errorClass: "error",
            });
        });
    </script>

</body>

</html>
