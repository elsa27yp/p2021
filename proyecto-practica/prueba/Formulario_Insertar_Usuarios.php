<?php
include 'conexionrol.php';
$query=mysqli_query($mysqli, "SELECT nombre from roles");

?>
<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Documento sin título</title>
        
        <style>
		
		table{
			width:300px;
			margin:auto;
			background-color:#ccccff;
			border:6px solid #777761;
			padding:5px;
			
		}
		
		td{
			text-align:center;
			
		}
		h1{text-align:center}
		
		</style>
        
    </head>
    
    <body>
    <h1>REGÍSTRATE AQUÍ!!</h1>
    
        <form action="pagina_insertar_usuarios.php" method="post">
        <table><tr>
    <td>Usuario: </td><td><input type="text" name="usu" id="usu"></td></tr><tr>
    <td>Contraseña: </td><td><input type="password" name="contra" id="contra"></td></tr>
    <td>Nombre: </td><td><input type="text" name="nom" id="nom"></td></tr>
    <td>Teléfono: </td><td><input type="text" name="tele" id="tele"></td></tr>

    <td>Estado</td><td><select name="status">
    <option>0</option>
    <option selected>1</option></select></td></tr>

<!--TRAER COLUMNA NOMBRE DE LA TABLA ROLES EXISTENTES -->   
    <td>Seleccione Rol: </td><td><select name="rolesusu">
                    <?php
                    while ($datos = mysqli_fetch_array($query))
                     {
                        ?>
                    }
                    <option selected> <?php echo $datos['nombre']?></option>
                    <?php
                }
                ?>
                </select></td></tr>         
        </div>
    </form>
<!-- FINALIZACION DE NOMBRE TABLA ROLES -->
    

        <tr><td colspan="2"> <input type="submit" name="enviando" value="¡Registrar!">
        </td></tr></table>
        <center><tr><p><a href="login.php"> <-- REGRESAR AL INICIO DE SESIÓN !!!</a></td></tr></table></p></tr></center>
        </form>
    
    </body>
    
</html>