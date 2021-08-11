<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ROLES</title>
</head>

<body>

<?php

	$identirol= $_POST["idrolu"];	
	$identiuser= $_POST["idrusu"];
	
				
	try{

		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		$base->exec("SET CHARACTER SET utf8");		
			
		$sql="INSERT INTO roles_usuarios (idrol, idusuario) VALUES (:idrolu, :idrusu)";	
		$resultado=$base->prepare($sql);		
			
		$resultado->execute(array(":idrolu"=>$identirol, ":idrusu"=>$identiuser));		
		
		header('Location: roles_usuarios.php');
		
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
		
	}

?>
</body>
</html>