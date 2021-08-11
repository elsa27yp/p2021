<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$usuario= $_POST["usu"];
	$contrasenia= $_POST["contra"];
	$pass_cifrado=password_hash($contrasenia, PASSWORD_DEFAULT, array("cost"=>12));
	$nombreu= $_POST["nom"];
	$telefonou= $_POST["tele"];
	$estadou= $_POST["status"];
	$rolesusu= $_POST["rolesusu"];
				
	try{

		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");		
		
		
		$sql="INSERT INTO usuarios_pass (USUARIOS, PASSWORD, NOMBRE, TELEFONO, ESTADO, ROL) VALUES (:usu, :contra, :nom, :tele, :status, :rolesusu)";
		
		$resultado=$base->prepare($sql);		
		
		
		$resultado->execute(array(":usu"=>$usuario, ":contra"=>$pass_cifrado, ":nom"=>$nombreu, ":tele"=>$telefonou, ":status"=>$estadou, ":rolesusu"=>$rolesusu));		
		
		header('Location: login.php');
		
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
		
	}

?>
</body>
</html>