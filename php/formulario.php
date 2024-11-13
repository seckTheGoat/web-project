<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $mensaje = $_POST["message"];

    if (strlen($name) < 3) {
     
        echo "Error: Nombre muy corto. Por favor, ingrésalo nuevamente.";
        exit;
    }
 
    if (strlen($password) < 8) {
        echo "Error: La contraseña debe tener al menos 8 caracteres. Por favor, ingrésala nuevamente.";
        exit;
    }
    if (strlen($phone) < 9) {
        echo "Error: El teléfono debe tener al menos 9 caracteres. Por favor, ingrésalo nuevamente.";
        exit;
    }

    if (empty($name) || empty($phone) || empty($correo) || empty($password) || empty($mensaje)) {
        echo "Por favor, completa todos los campos.";
    } else  {
        echo "¡Formulario enviado correctamente!";
    }
}
?>