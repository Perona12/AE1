<?php
session_start();
$palabra = $_SESSION['palabra'];
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>¡Perdiste!</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <h1>¡Lo sentimos!</h1>
    <p>Te has quedado sin vidas. La palabra era: <strong><?php echo $palabra; ?></strong></p>
    <form method="post" action="index.php">
        <button type="submit">Jugar de nuevo</button>
    </form>
</body>

</html>