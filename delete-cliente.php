<?php
	require_once('connect.php');
	$id = $_GET['id'];
	$DelSql = "DELETE FROM `cadastroCliente` WHERE id=$id";
	$res = mysqli_query($connection, $DelSql);
	if($res){
		header('location: listar-clientes.php');
	}else{
		echo "Falha ao deletar";
	}
?>