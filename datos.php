<?php
// Configuración de la base de datos Oracle
$servidor = "192.168.1.30"; // Dirección del servidor Oracle
$puerto = "1521";        // Puerto por defecto de Oracle
$sid = "ORCL";             // Nombre del servicio (SID)
$usuario = "C##Asir"; // Usuario de Oracle
$contraseña = "Almi123"; // Contraseña de Oracle

// Función para crear la conexión a la base de datos
function crearConexion() {
    global $servidor, $puerto, $sid, $usuario, $contraseña;
    $conn = oci_connect($usuario, $contraseña, "$servidor:$puerto/$sid");
    if (!$conn) {
        $error = oci_error();
        die("Error al conectar a la base de datos: " . $error['message']);
    }
    return $conn;
}

// Manejo del formulario para insertar un nuevo usuario
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['accion']) && $_POST['accion'] == 'insertar') {
    // Obtener los valores del formulario
    $email = $_POST['email'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $contraseña = $_POST['contraseña'];

    // Validación de campos
    if (empty($email) || empty($nombre_usuario) || empty($contraseña)) {
        echo "Todos los campos son obligatorios.";
    } else {
        // Validar el formato del email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "El formato del correo electrónico es incorrecto.";
        } else {
            // Hashear la contraseña antes de insertarla
            $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

            // Crear conexión a la base de datos
            $conn = crearConexion();

            // Consulta SQL para insertar un nuevo usuario en la tabla 'usuarios'
            $sql = 'INSERT INTO usuarios (email, nombre_usuario, contraseña) VALUES (:email, :nombre_usuario, :contraseña)';

            // Preparar la consulta
            $stid = oci_parse($conn, $sql);

            // Vincular los valores a la consulta
            oci_bind_by_name($stid, ':email', $email);
            oci_bind_by_name($stid, ':nombre_usuario', $nombre_usuario);
            oci_bind_by_name($stid, ':contraseña', $contraseña_hash);

            // Ejecutar la consulta
            if (oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
                echo "Usuario añadido correctamente.";
            } else {
                $error = oci_error($stid);
                echo "Error al añadir el usuario: " . $error['message'];
            }

            // Liberar recursos
            oci_free_statement($stid);
            // Cerrar la conexión
            oci_close($conn);
        }
    }
}

// Manejo del formulario de login
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['accion']) && $_POST['accion'] == 'login') {
    // Obtener los valores del formulario
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    // Validar si los campos están vacíos
    if (empty($email) || empty($contraseña)) {
        echo "El email y la contraseña son obligatorios.";
    } else {
        // Crear conexión a la base de datos
        $conn = crearConexion();

        // Consulta SQL para verificar las credenciales
        $sql = 'SELECT * FROM usuarios WHERE email = :email';

        // Preparar la consulta
        $stid = oci_parse($conn, $sql);

        // Vincular los parámetros
        oci_bind_by_name($stid, ':email', $email);

        // Ejecutar la consulta
        oci_execute($stid);

        // Verificar si se encontró el usuario
        $row = oci_fetch_assoc($stid);

        if ($row && password_verify($contraseña, $row['CONTRASEÑA'])) {
            // Credenciales correctas, iniciar sesión
            session_start();
            $_SESSION['email'] = $row['EMAIL']; // Guardar email en la sesión
            $_SESSION['nombre_usuario'] = $row['NOMBRE_USUARIO']; // Guardar nombre de usuario en la sesión
            echo "¡Bienvenido, " . $row['NOMBRE_USUARIO'] . "!";
            // Redirigir a una página protegida (opcional)
            // header("Location: pagina_protegida.php");
            // exit();
        } else {
            // Si no se encontraron resultados, mostrar mensaje de error
            echo "Email o contraseña incorrectos.";
        }

        // Liberar recursos
        oci_free_statement($stid);
        // Cerrar la conexión
        oci_close($conn);
    }
}
?>
