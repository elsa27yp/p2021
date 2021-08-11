<?php 

	include_once 'conexion.php';
	if(isset($_GET['idru'])){
		$id=(int) $_GET['idru'];
		$delete=$con->prepare('DELETE FROM roles_usuarios WHERE idru=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: roles_usuarios.php');
	}else{
		header('Location: roles_usuarios.php');
	}
 ?>