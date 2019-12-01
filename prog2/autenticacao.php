<?php
include "classes/Usuario.php";
$usuario = new Usuario();
$dados = $usuario->autenticar($_POST['login']);

if(empty($dados)){ // usuario nao existe
	header("Location: login.php?erro=1");
}
else{ // usuario existe
	$senha = $_POST['senha'];
	if($senha != $dados[0]['senha']){
		header("Location: login.php?erro=2");
	}
	else{ // login e senha corretos
		session_start(); // abre uma nova sessao
		$_SESSION['login'] = $dados[0]['login'];


		header("Location: ../prog2/html/principal-lu.php");
	}
}
?>
