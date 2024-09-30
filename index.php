<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatería</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/zapatosjordan.jpg');: #e0f7fa; /* Color de fondo personalizado */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        #div_inicio_sesión {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="div_inicio_sesión">
        <h1>Zapatería La Sangileña</h1>
        <form action="modelo/loguear.php" method="post" id="loginForm">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
            <label for="clave">Contraseña</label>
            <input type="password" name="clave" id="clave" placeholder="Contraseña" required>
            <button type="submit">Ingresar</button>
        </form>
    </div>

    <script>
        // JavaScript para validar el formulario
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            var usuario = document.getElementById('usuario').value;
            var clave = document.getElementById('clave').value;
            
            if (usuario === '' || clave === '') {
                alert('Por favor, complete todos los campos.');
                event.preventDefault(); // Previene que el formulario se envíe
            }
        });
    </script>
</body>
</html>