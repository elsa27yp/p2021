<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>ROLES REGISTRADOS</title>
        
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
    <h1>REGISTRAR ROL!!</h1>
    
        <form action="pagina_insertar_roles.php" method="post">
        <table><tr>
    <td>Nombre: </td><td><input type="text" name="nom" id="nom"></td></tr><tr>
    <td>Estado</td><td><select name="status">
    <option>0</option>
    <option selected>1</option></select></td></tr>


        <tr><td colspan="2"> <input type="submit" name="enviando" value="¡Registrar Rol!">
        </td></tr></table>
        <center><tr><p><a href="login.php"> <-- REGRESAR AL INICIO DE SESIÓN !!!</a></td></tr></table>
         <center><tr><p><a href="usuarios_registrados3.php"> <-- VOLVER !!!</a></td></tr></table></p></tr></center>
        </form>
    
    </body>
    
</html>