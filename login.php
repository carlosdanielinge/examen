<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender a Programar: HTML, PHP y MySQL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }
        nav {
            background-color: #333;
            padding: 10px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        nav ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        section {
            margin-bottom: 40px;
        }
        pre {
            background-color: #333;
            color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 20px;
        }
        .buttons button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            width: 45%;
        }
        .buttons button:hover {
            background-color: #ddd;
            color: black;
        }
        .image-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .image-container img {
            width: 30%; /* Tamaño reducido de las imágenes */
            border-radius: 8px;
        }
        /* Nuevas reglas para los formularios */
        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }
        form {
            width: 100%;
            max-width: 480px; /* Máximo de 480px para que no ocupen demasiado espacio */
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        form h3 {
            margin-bottom: 15px;
            font-size: 20px;
            color: #333;
        }
        form label {
            font-size: 14px;
            color: #555;
        }
        form input[type="text"],
        form input[type="email"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form input[type="submit"] {
            padding: 12px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 4px;
            font-size: 16px;
        }
        form input[type="submit"]:hover {
            background-color: #ddd;
            color: black;
        }
        /* Asegurando que los formularios se vean bien en pantallas pequeñas */
        @media (max-width: 768px) {
            .form-container {
                flex-direction: column;
                align-items: center;
            }
            form {
                width: 90%;
            }
        }

        /* Estilos de los modales */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            max-width: 90%;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .close {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Aprende a Programar en HTML, PHP y MySQL</h1>
        <p>Un manual informativo para iniciarte en la programación web</p>
    </header>

    <!-- Barra de navegación superior -->
    <nav>
        <ul>
            <li><a href="consulta_usuarios.php">Consultar Usuarios</a></li>
        </ul>
    </nav>

    <div class="container">
        <section id="registro">
            <h2>Formulario de Registro y Login</h2>
            <div class="buttons">
                <button id="openRegisterModal">Registrarse</button>
                <button id="openLoginModal">Iniciar sesión</button>
            </div>
        </section>
<!-- Botones en la parte superior derecha -->
<div class="buttons">
            <button onclick="window.location.href='temas_html.html'">Ir a HTML</button>
            <button onclick="window.location.href='temas_php.html'">Ir a PHP</button>
        </div>

        <!-- Modal de Registro -->
        <div id="registerModal" class="modal">
            <div class="modal-content">
                <span id="closeRegisterModal" class="close">&times;</span>
                <h3>Registro</h3>
                <form action="registrar_usuario.php" method="POST">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required><br>
                    
                    <label for="correo">Correo:</label>
                    <input type="email" id="correo" name="correo" required><br>
                    
                    <label for="carrera">Carrera:</label>
                    <input type="text" id="carrera" name="carrera"><br>
                    
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required><br>
                    
                    <input type="submit" value="Registrar">
                </form>
            </div>
        </div>

        <!-- Modal de Login -->
        <div id="loginModal" class="modal">
            <div class="modal-content">
                <span id="closeLoginModal" class="close">&times;</span>
                <h3>Iniciar Sesión</h3>
                <form action="login.php" method="POST">
                    <label for="correo_login">Correo:</label>
                    <input type="email" id="correo_login" name="correo" required><br>
                    
                    <label for="contrasena_login">Contraseña:</label>
                    <input type="password" id="contrasena_login" name="contrasena" required><br>
                    
                    <input type="submit" value="Iniciar sesión">
                </form>
            </div>
        </div>

        <section id="html">
            <h2>¿Qué es HTML?</h2>
            <p>HTML (HyperText Markup Language) es el lenguaje de marcado estándar para crear páginas web. Es la estructura básica de cualquier página en la web.</p>

            <div class="image-container">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="HTML Logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/Etiquetas_en_HTML.png" alt="Ejemplo de Código HTML">
            </div>

            <h3>Ejemplo Básico de HTML</h3>
            <pre>
                &lt;!DOCTYPE html&gt;
                &lt;html lang="es"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                        &lt;title&gt;Mi primera página web&lt;/title&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;h1&gt;Hola Mundo&lt;/h1&gt;
                        &lt;p&gt;Este es un párrafo en mi primera página HTML.&lt;/p&gt;
                    &lt;/body&gt;
                &lt;/html&gt;
            </pre>
        </section>

        <section id="php">
            <h2>¿Qué es PHP?</h2>
            <p>PHP (Hypertext Preprocessor) es un lenguaje de programación de uso general que se usa principalmente para desarrollar aplicaciones web dinámicas. PHP se ejecuta en el servidor.</p>

            <div class="image-container">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/32/Codigo_php.jpg" alt="PHP Logo">
                <img src="https://www.php.net/images/logos/php-logo.svg" alt="PHP Logo">
            </div>

            <h3>Ejemplo Básico de PHP</h3>
            <pre>
                &lt;?php
                echo "Hola Mundo desde PHP";
                ?&gt;
            </pre>
            <p>Este código muestra cómo imprimir "Hola Mundo" en la página web utilizando PHP.</p>
        </section>

        <section id="mysql">
            <h2>¿Qué es MySQL?</h2>
            <p>MySQL es un sistema de gestión de bases de datos relacional basado en SQL (Structured Query Language). Es uno de los sistemas de bases de datos más populares para aplicaciones web.</p>

            <div class="image-container">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/dd/Mysql-screenshot.PNG" alt="MySQL Logo">
                <img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" alt="Logo de MySQL">
            </div>

            <h3>Conectando PHP con MySQL</h3>
            <pre>
                &lt;?php
                // Conexión a la base de datos
                $conexion = new mysqli("localhost", "usuario", "contraseña", "base_de_datos");
                
                if ($conexion->connect_error) {
                    die("Conexión fallida: " . $conexion->connect_error);
                }
                echo "Conectado correctamente a la base de datos";
                
                // Consulta
                $sql = "SELECT id, nombre FROM tabla";
                $resultado = $conexion->query($sql);
                
                if ($resultado->num_rows > 0) {
                    while($row = $resultado->fetch_assoc()) {
                        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. "&lt;br&gt;";
                    }
                } else {
                    echo "0 resultados";
                }
                ?&gt;
            </pre>
        </section>
    </div>

    <footer>
        <p>&copy; 2025 EXAMEN DE SISTEMAS DE INFORMACION PRACTICO FINAL</p>
    </footer>

    <script>
        // Función para abrir y cerrar el modal de registro
        const openRegisterModal = document.getElementById("openRegisterModal");
        const registerModal = document.getElementById("registerModal");
        const closeRegisterModal = document.getElementById("closeRegisterModal");

        openRegisterModal.onclick = function() {
            registerModal.style.display = "flex";
        }
        closeRegisterModal.onclick = function() {
            registerModal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == registerModal) {
                registerModal.style.display = "none";
            }
        }

        // Función para abrir y cerrar el modal de login
        const openLoginModal = document.getElementById("openLoginModal");
        const loginModal = document.getElementById("loginModal");
        const closeLoginModal = document.getElementById("closeLoginModal");

        openLoginModal.onclick = function() {
            loginModal.style.display = "flex";
        }
        closeLoginModal.onclick = function() {
            loginModal.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == loginModal) {
                loginModal.style.display = "none";
            }
        }
    </script>
</body>
</html>

