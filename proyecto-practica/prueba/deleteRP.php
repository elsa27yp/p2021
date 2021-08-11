<?php 

	include_once 'conexion.php';
	if(isset($_GET['idrp'])){
		$id=(int) $_GET['idrp'];
		$delete=$con->prepare('DELETE FROM roles_permisos WHERE idrp=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: roles_permisos.php');
	}else{
		header('Location: roles_permisos.php');
	}
 ?>