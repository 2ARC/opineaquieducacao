<?php

require_once "connect.php";

$id = $_POST['whats'];

$consulta = $con->query("SELECT telefone FROM tb_sugestoes WHERE id = $id");
	$row = $consulta->fetch(PDO::FETCH_OBJ);
	$telefone = implode("/",array_reverse(explode("-",$row->telefone)));
echo $telefone;
header("Location: https://wa.me/55".$telefone);
