<?php
$usuario_valido = "manuel";
$contrasena_valida = "4321";

if ($_POST["username"] === $usuario_valido && $_POST["password"] === $contrasena_valida) {
  // Redirige directamente a la segunda interfaz
  header("Location: contenido.html");
  exit();
} else {
  echo "<script>
          alert('Nombre o contraseña incorrectos');
          window.close(); // Cierra la pestaña abierta si login falla
        </script>";
}
?>

