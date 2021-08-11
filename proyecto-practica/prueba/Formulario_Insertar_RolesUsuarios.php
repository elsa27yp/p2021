<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>ROLES_USUARIOS</title>
        
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
    <h1>REGISTRAR ROLES - USUARIOS!!</h1>
    
        <form action="pagina_insertar_rolesUsuarios.php" method="post">
        <table><tr>
    <td>ID ROL: </td><td><input type="number" name="idrolu" id="idrolu"></td></tr><tr>
    <td>ID USUARIO: </td><td><input type="number" name="idrusu" id="idrusu"></td></tr><tr>



        <tr><td colspan="2"> <input type="submit" name="enviando" value="¡Registrar Rol!">
        </td></tr></table>
        <center><tr><p><a href="login.php"> <-- REGRESAR AL INICIO DE SESIÓN !!!</a></td></tr></table>
         <center><tr><p><a href="roles_usuarios.php"> <-- VOLVER !!!</a></td></tr></table></p></tr></center>
        </form>
    
    </body>
    
</html>