<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>ROLES_PERMISOS</title>
        
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
    <h1>REGISTRAR PERMISO-ROL!!</h1>
    
        <form action="pagina_insertar_rolesPermisos.php" method="post">
        <table><tr>
    <td>ID ROL: </td><td><input type="number" name="idrolp" id="idrolp"></td></tr><tr>
    <td>ID PERMISO: </td><td><input type="number" name="idrper" id="idrper"></td></tr><tr>



        <tr><td colspan="2"> <input type="submit" name="enviando" value="¡Registrar Rol!">
        </td></tr></table>
        <center><tr><p><a href="login.php"> <-- REGRESAR AL INICIO DE SESIÓN !!!</a></td></tr></table>
         <center><tr><p><a href="usuarios_registrados3.php"> <-- VOLVER !!!</a></td></tr></table></p></tr></center>
        </form>
    
    </body>
    
</html>