<?php 

	include_once 'conexion.php';
	if(isset($_GET['ID'])){
		$id=(int) $_GET['ID'];
		$delete=$con->prepare('DELETE FROM usuarios_pass WHERE ID=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: usuarios_registrados2.php');
	}else{
		header('Location: usuarios_registrados2.php');
	}
 ?>