<?php
	require_once('connect.php');
	$id = $_GET['id'];
	$DelSql = "DELETE FROM `cadastroServico` WHERE id=$id";
	$res = mysqli_query($connection, $DelSql);
	if($res){
		header('location: listar-servico.php');
	}else{
		echo "Falha ao deletar";
	}
?>