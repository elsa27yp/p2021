<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ROLES</title>
</head>

<body>

<?php

	$identirol= $_POST["idrolp"];	
	$identipermi= $_POST["idrper"];
	
				
	try{

		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		$base->exec("SET CHARACTER SET utf8");		
			
		$sql="INSERT INTO roles_permisos (idrol, idpermiso) VALUES (:idrolp, :idrper)";	
		$resultado=$base->prepare($sql);		
			
		$resultado->execute(array(":idrolp"=>$identirol, ":idrper"=>$identipermi));		
		
		header('Location: roles_permisos.php');
		
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
		
	}

?>
</body>
</html>