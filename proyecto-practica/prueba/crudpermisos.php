<?php
	include_once 'conexion.php';

	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];

		$buscar_id=$con->prepare('SELECT * FROM permisos WHERE id=:id LIMIT 1');
		$buscar_id->execute(array(
			':id'=>$id
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: usuarios_registrados4.php');
	}


	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$nombreBoton=$_POST['nombreBoton'];
		$estado=$_POST['estado'];
		$id=(int) $_GET['id'];

		if(empty($nombre) && empty($nombreBoton) && empty($estado) ){
			}else{
				$consulta_update=$con->prepare(' UPDATE permisos SET  
					nombre=:nombre,
					nombreBoton=:nombreBoton,
					estado=:estado
					WHERE id=:id;'
				);
				$consulta_update->execute(array(
					':nombre' =>$nombre,
					':nombreBoton' =>$nombreBoton,
					':estado' =>$estado,
					':id' =>$id
				));
				header('Location: usuarios_registrados4.php');
			}
		}else{
		}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2>PERMISOS USUARIOS</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" value="<?php if($resultado) echo $resultado['nombre']; ?>" class="input__text">
				<input type="text" name="nombreBoton" value="<?php if($resultado) echo $resultado['nombreBoton']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="number" name="estado" value="<?php if($resultado) echo $resultado['estado']; ?>" class="input__text">
				
			</div>
			
			<div class="btn__group">
				<a href="usuarios_registrados4.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
