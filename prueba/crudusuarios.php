<?php
 include_once 'conexionrol.php';
 $query=mysqli_query($mysqli, "SELECT nombre from roles");
?>

<?php
  include_once 'conexion.php';
  if(isset($_GET['ID'])){
    $id=(int) $_GET['ID'];

   
  
    $buscar_id=$con->prepare('SELECT * FROM usuarios_pass WHERE ID=:id LIMIT 1');
    $buscar_id->execute(array(
      ':id'=>$id
    ));
    $resultado=$buscar_id->fetch();
  }else{
    header('Location: usuarios_registrados2.php');
  }

 if(isset($_POST['guardar'])){
    $pass_cifrado=password_hash($_POST['password'], PASSWORD_DEFAULT, array("cost"=>12));
    $usuarios=$_POST['usuarios'];
    $password=$_POST['password']; 
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $estado=$_POST['estado'];
    $rol=$_POST['rol'];
    $id=(int) $_GET['ID'];

 if(empty($usuarios) || empty($password) || empty($nombre) || empty($telefono) || empty($estado) || empty($rol) ){
      }else{

        $consulta_update=$con->prepare(' UPDATE usuarios_pass SET  
          usuarios=:usuarios,
          password=:password,
          nombre=:nombre,
          telefono=:telefono,
          estado=:estado,
          rol=:rol
          WHERE id=:id;'
        );
         $consulta_update->execute(array(
          ':usuarios' =>$usuarios,
          ':password' =>$pass_cifrado,
          ':nombre' =>$nombre,
          ':telefono' =>$telefono,
          ':estado' =>$estado,
          ':rol' =>$rol,
          ':id' =>$id
        ));
        header('Location: usuarios_registrados2.php');
      }
    }else{
    
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
    <h2>CRUD DE DATOS USUARIOS</h2>
    <form action="" method="post">
      <div class="form-group">
     <input type="text" name="usuarios" value="<?php if($resultado) echo $resultado['USUARIOS']; ?>" class="input__text">
    <input type="password" name="password" value="" class="input__text" placeholder="Ingrese Password">
      </div>
      <div class="form-group">
        <input type="text" name="nombre" value="<?php if($resultado) echo $resultado['NOMBRE']; ?>" class="input__text">
        <input type="text" name="telefono" value="<?php if($resultado) echo $resultado['TELEFONO']; ?>" class="input__text">
      </div>
      <div class="form-group">
        <input type="number" name="estado" value="<?php if($resultado) echo $resultado['ESTADO']; ?>" class="input__text">
      </div>

<!--TRAER COLUMNA NOMBRE DE LA TABLA ROLES EXISTENTES --> 
  <div class="form-group">  
  <select name="rol" value="<?php if($resultado) echo $resultado['ROL']; ?>" class="input__text">
  </div>
                    <?php
                    while ($datos = mysqli_fetch_array($query))
                     {
                        ?>
                    }
                    <option selected> <?php echo $datos['nombre']?></option>
                    <?php     
                }
                ?>
<!-- FINALIZACION DE NOMBRE TABLA ROLES -->
      <div class="btn__group">
        
        <input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
        <a href="usuarios_registrados2.php" class="btn btn__danger">Cancelar</a>
      </div>
    </form>
  </div>
</body>
</html>
