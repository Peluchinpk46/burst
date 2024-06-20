<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="loginEstilos.css">
    <script>
        function validarFormulario() {
            var nom = document.getElementById('nom').value;
            var apePat = document.getElementById('apePat').value;
            var apeMat = document.getElementById('apeMat').value;
            var tel = document.getElementById('tel').value;
            var texto = document.getElementById('texto').value;
            var pass = document.getElementById('pass').value;
            var mensaje = "";

            // Validar nombre y apellidos para que solo contengan letras
            var regexLetras = /^[A-Za-z\s]+$/;
            if (!regexLetras.test(nom) || !regexLetras.test(apePat) || !regexLetras.test(apeMat)) {
                mensaje += "Nombre y apellidos solo deben contener letras.\n";
            }

            // Validar teléfono para que solo contenga números
            var regexNumeros = /^[0-9]+$/;
            if (!regexNumeros.test(tel)) {
                mensaje += "El número telefónico solo debe contener números.\n";
            }

            // Validar usuario
            var regexUsuario = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#\$%]).*$/;
            if (!regexUsuario.test(texto)) {
                mensaje += "El usuario debe contener al menos una letra mayúscula, una letra minúscula, un número y un caracter especial (#, $ o %).\n";
            }

            // Validar contraseña
            if (pass.length < 8 || pass.length > 10) {
                mensaje += "La contraseña debe ser mayor a 7 caracteres y menor a 10 caracteres.\n";
            }

            if (mensaje !== "") {
                alert(mensaje);
                return false; // Detiene el envío del formulario
            } else {
                return true; // Permite el envío del formulario
            }
        }
    </script>

<style>

        .product {
            display: inline-block;
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
        }
        .btn-agregar {
            border: 2px solid green; 
            background-color: white;   
            color: green; 
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        
        .cart {
            position: fixed;
            background-color: white;
            top: 10px;
            right: 10px;
            border: 1px solid #000;
            padding: 10px;
            display: none; /* ocultar inicialmente */
        }
        .nav {
            display: inline-block;
            border: 1px solid #ccc;
            margin: 1px;
            padding: 1px;
        }
        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            background-color: #ddd;
            border: none;
            font-size: 20px;
            padding: 5px 10px;
            border-radius: 50%;
            cursor: pointer;
        }
        .btn-finalizar{
            border: 2px solid green; 
            background-color: white;   
            color: green; 
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        .header {
            background-color: black;
            color: white;
            padding: 1px;
            text-align: center;
        }
        .footer {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: center;
            border-top: 2px solid black;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .e{
            display: none;
            position: absolute;
            background-color: #444;
            min-width: 160px;
            z-index: 1;
        }
        .e a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .e a:hover {
            background-color: #666;
        }
        .dropdown:hover .e {
            display: block;
        }


        footer {
  background-color: #f2f2f2;
  padding: 10px;
  text-align: center;
  color: #5c5c5c;
}
        /* Estilos básicos */
        body { font-family: Arial, sans-serif; }
        nav { background-color: #010935; padding: 10px; }
        nav ul { list-style-type: none; }
        nav ul li { display: inline; margin-right: 20px; }
        nav ul li a { color: white; text-decoration: none; }
        #search-bar { margin: 20px 0; }
        #categories { display: flex; justify-content: space-around; padding: 20px; }
        .category-item { text-align: center; }
    </style>
</head>
<body>

<header>

    <!-- Barra de Navegación -->
    <nav>
        <ul>
            <!-- Barra de Búsqueda -->
            
            <div><center><img src="reformar.jpg" width="300" height="120"></center></div>
         


        
    </div>
    
                        <ul style="display: auto; justify-content: space-between;">
    <li><a href="index.html">Principal</a></li>
    <li><a href="pag4.html">Acabados</a></li>
    <li><a href="pag6.html">Aceros</a></li>
    <li><a href="paguina11.html">Cementos</a></li>
    <li><a href="pag5.html">Herramientas de construcción</a></li>
    <li><a href="pag3.html">Materiales de construcción</a></li>
    <li class="dropdown">
                <a href="#" class="l">Herramientas digitales</a>
                <div class="e">
                     <a href="acerca.html">Preguntas frecuentes</a>
                    <a href="converciones.html">Convertidor</a>
                   
                </div>
            </li>
    <li><a href="acerca.html">Acerca de</a></li>
    <li><a href="inicioC.html">inicio de sesion</a></li>
    <li id="search-bar" style="display: fixe;"  style="margin-left: auto;"></li>
        
</ul>

        
    </nav>
</header>
<body>
<p>Para registrarte ingresa tus datos personales</p>
<form action="" method="POST" onsubmit="return validarFormulario();">
    <input type="text" name="nom" placeholder="Nombre" id="nom" required=""><br>
    <input type="text" name="apePat" placeholder="Apellido paterno" id="apePat" required><br>
    <input type="text" name="apeMat" placeholder="Apellido Materno" id="apeMat" required><br>
    <input type="text" name="dir" placeholder="Direccion" id="dir" required><br>
    <input type="text" name="tel" placeholder="Numero telefonico" id="tel" required><br>
    <input type="email" name="email" placeholder="Ej.:usuario@servidor.com" id="email" required><br>
    <p>Finalmente captura el usuario y password, con el que accederás posteriormente</p>
    <input type="text" name="texto" placeholder="Usuario" id="texto" required><br>
    <input type="password" name="pass" placeholder="Password" id="pass" required><br>
    <input type="submit" value="Guardar valores">
    <input type="reset" value="Restaurar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $servidor = "localhost";
    $nombredeusuario = "root";
    $password = "";
    $db = "logeo";

    $conexion = new mysqli($servidor, $nombredeusuario, $password, $db);

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Recogida de datos del formulario
    // Recogida de datos del formulario
$texto = $_POST['texto'];
$pass = $_POST['pass'];
$nom = $_POST['nom'];
$apePat = $_POST['apePat']; // Corregido aquí
$apeMat = $_POST['apeMat'];
$dir = $_POST['dir'];
$tel = $_POST['tel'];
$email = $_POST['email'];

// Inserción de datos en la base de datos
$sql = "INSERT INTO usuarios(usuario, contraseña, nombre, apellidoPat, apellidoMat, direccion, telefono, email) VALUES ('$texto', '$pass', '$nom', '$apePat', '$apeMat', '$dir', '$tel', '$email')";

if ($conexion->query($sql) === true) {
    echo "Bienvenido, " . $nom . " " . $apePat . " " . $apeMat . ". Tus datos se han registrado exitosamente.";
} else {
    die("Error al intentar registrarse: " . $conexion->error);
}

$conexion->close();
}
?>
<a href="acerca.html">regresa al menu principal</a><br>
<a href="login.html">herramientas digitales</a>

</body>
</html>
