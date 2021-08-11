<?php
  include_once 'conexion.php';

  if(isset($_GET['id'])){
    $id=(int) $_GET['id'];

   
    $pass_cifrado=password_hash($password, PASSWORD_DEFAULT, array("cost"=>12));

    $buscar_id=$con->prepare('SELECT * FROM roles WHERE id=:id LIMIT 1');
    $buscar_id->execute(array(
      ':id'=>$id
    ));
    $resultado=$buscar_id->fetch();
  }else{
    header('Location: usuarios_registrados3.php');
  }

 if(isset($_POST['guardar'])){
    $nombre=$_POST['nombre'];
    $estado=(int) $_POST['estado']; 
    $id=(int) $_GET['id'];
   


 if(empty($nombre) && empty($estado) ){
      }else{

        $consulta_update=$con->prepare(' UPDATE roles SET  
          nombre=:nombre,
          estado=:estado
          WHERE id=:id;'
        );
         $consulta_update->execute(array(
          ':nombre' =>$nombre,
          ':estado' =>$estado,
          ':id' =>$id
        ));
        header('Location: usuarios_registrados3.php');
      }
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
   <title>Actualizar Registro</title>
  <link rel="stylesheet" href="css/estilo.css">
   <link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="contenedor">
    <h2>CRUD ROLES</h2>
    <form action="" method="post">
      <div class="form-group">
     <input type="text" name="nombre" value="<?php if($resultado) echo $resultado['nombre']; ?>" class="input__text">
      </div>

      <div class="form-group">
        <input type="number" name="estado" value="<?php if($resultado) echo $resultado['estado']; ?>" class="input__text">
        
      </div>
      <div class="btn__group">
        <a href="usuarios_registrados3.php" class="btn btn__danger">Cancelar</a>
        <input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
      </div>
    </form>
  </div>
</body>
</html>