<?php
	session_start();
require "../database.php";
include "../settings.php";
    echo "Bienvenido ";echo $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCU - <?php echo $InicialesSV ?></title>
</head>
<body>
    
</body>
</html>