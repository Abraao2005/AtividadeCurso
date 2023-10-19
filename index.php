<?php
session_name('erro');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <?php if(isset($_SESSION['erro'])): ?>
        <?php  echo $_SESSION['erro'];  ?>
        <?php session_destroy()?>
        <?php endif;?>
    </h2>
    <form action="tratamento.php" method="POST">
        <input type="text" name="n1">
        <input type="text" name="n2">
        <button>Enviar</button>
    </form>
</body>
</html>