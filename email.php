<?php

require_once "connect.php";

$id = $_POST['email'];

$consulta = $con->query("SELECT email FROM tb_sugestoes WHERE id = $id");
	$row = $consulta->fetch(PDO::FETCH_OBJ);
	$email = implode("/",array_reverse(explode("-",$row->email)));
echo $email;
echo "Calma, Jovem, ainda estou desenvolvendo ;D";
/*header("Location: https://wa.me/55".$telefone);
*/
