<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="styles1.css"> <!-- Reutiliza tus estilos existentes -->
    <link rel="icon" href="logo.png">

    <style>
        /* Añadimos un estilo inline para asegurar que el botón esté en bloque */
        .form-box .btn {
            display: block;
            width: 100%;
            margin: 10px 0;
        }

        .create-account {
            text-align: center;
        }

        .create-account .btn {
            margin-top: 10px;
            background-color: #4CAF50; /* Ajustar el color si es necesario */
            color: white;
            border: none;
            padding: 10px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        /* Ajustamos el margen superior para mover "Inicio de Sesión" hacia abajo */
        .form-box.login h2 {
            margin-top: 60px; /* Ajusta este valor según lo necesario */
        }
    </style>

</head>
<body>
  
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <div class="text-item">
                <h2>Veterinaria <br>
                    <div class="text-item1">
                        <h2>Patitas al Cuidado<br></h2>
                    </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box">
                <form action="modulos/controladorRegistro.php" method="post" novalidate>
                    <h2>Crear Cuenta</h2>
                    <div class="input-box">
                        <input type="text" id="usuario" name="usuario" autofocus autocomplete="off" required>
                        <label>Crear Usuario</label>
                    </div>
                    <div class="input-box">
                        <input type="password" id="pass" name="pass" required>
                        <label>Crear Contraseña</label>
                    </div>
                    <button class="btn">Registrar</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
