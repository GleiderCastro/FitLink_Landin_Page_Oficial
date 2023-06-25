<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['Mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthdate = $_POST['fecha'];
    $gender = $_POST['gender'];

    $datos = "Nombres: " . $fname . "\nApellidos: " . $lname . "\nNúmero Telefónico: " . $mobile . "\nCorreo Electrónico: " . $email . "\nContraseña: " . $password . "\nFecha de Nacimiento: " . $birthdate . "\nGénero: " . $gender . "\n\n";

    // Abre el archivo en modo de escritura (si no existe, se crea)
    $archivo = fopen("basedatos.txt", "a");

    // Escribe los datos en el archivo
    fwrite($archivo, $datos);

    // Cierra el archivo
    fclose($archivo);

    echo "Datos guardados exitosamente.";
}
?>
