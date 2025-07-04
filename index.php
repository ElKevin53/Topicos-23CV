<?php
<!-- filepath: c:\Users\karlo\source\repos\calcular triangulo\calcular triangulo\obj\Debug\examen\index.php -->
<?php
// Definir usuario y contraseña válidos
define('USER', 'admin');
define('PASS', '1234');

// Inicializar variables
$login_ok = false;
$error = '';

// Procesar formulario si se envió
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Validar credenciales
    if ($username === USER && $password === PASS) {
        $login_ok = true;
    } else {
        $error = 'Usuario o contraseña incorrectos.';
    }
}
// ...existing code...
document.getElementById('show-images-btn').addEventListener('click', function() {
  window.open('imagenes.html', '_blank');
});
// ...existing code...