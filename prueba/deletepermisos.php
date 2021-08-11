<?php 

	include_once 'conexion.php';
	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$con->prepare('DELETE FROM permisos WHERE id=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: usuarios_registrados4.php');
	}else{
		header('Location: usuarios_registrados4.php');
	}
 ?>