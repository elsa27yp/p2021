<?php 

	include_once 'conexion.php';
	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$con->prepare('DELETE FROM roles WHERE id=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: usuarios_registrados3.php');
	}else{
		header('Location: usuarios_registrados3.php');
	}
 ?>