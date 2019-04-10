<?php
session_start();

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];


if (isset($_POST["soma"])){
    $resp = $n1+$n2;
    $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>A soma de ".$n1." + ".$n2." é igual a <strong>".$resp."</strong></div>";
	header('location:../calcular.php');
}
if (isset($_POST["subtracao"])){
    $resp = $n1-$n2;
    $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>A subtração de ".$n1." - ".$n2." é igual a <strong>".$resp."</strong></div>";
	header('location:../calcular.php');
}
if (isset($_POST["multiplicacao"])){
    $resp = $n1*$n2;
    $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>A multiplicação de ".$n1." * ".$n2." é igual a <strong>".$resp."</strong></div>";
	header('location:../calcular.php');
}
if (isset($_POST["divisao"])){
    $resp = $n1/$n2;
    $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>A divisão de ".$n1." / ".$n2." é igual a <strong>".$resp."</strong></div>";
	header('location:../calcular.php');
}

?>
