<?php

try {
    if ($_SERVER['REQUEST_METHOD'] != "POST") {
        throw new Exception("Não pode vir diretamente<br>");
    }else{
        multiplicacao();
    }
} catch (Exception $e) {
    session_name('erro');
    session_start();
    $_SESSION['erro'] = $e->getMessage();
    header('location:index.php');
}




function multiplicacao(){
    try {
        $n1 = isset($_POST['n1']) && is_numeric($_POST['n1']) && $_POST['n1'] >= 0
            ? (float)$_POST['n1'] : throw new Exception("Tem que ser um número maior do que zero e não pode ser nulo");
        $n2 = isset($_POST['n2']) && is_numeric($_POST['n2']) && $_POST['n2'] >= 0
            ? (float)$_POST['n2'] : throw new Exception("Tem que ser um número maior do que zero2");
    
        echo ($n1 . " " . $n2);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    
}
