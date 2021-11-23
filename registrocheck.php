<!DOCTYPE html>
<html lang="es">

<head>
    <title>Rome Blog</title>
    <link rel="icon" type="image/png" href="../../img/icono.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/templates.css">
    <link rel="stylesheet" href="/css/home.css">
    
    
    
     
    
</head>

<body>
    <!--HEADER-->
    <?php include("./templates/header.php")?>
    <br>
    <br>

    <!--Contenido-->
	<?php

	session_start();
	

	//Datos de formulario
	$correo=$_GET["correo"];
	$nombre=$_GET["name"];
	$contra=$_GET["pass"];
	$rol=$_GET["rol"];


	//Insercion
	function insert($correo,$name,$pass,$rol){ 
			//Conexion a la base de datos
			$servidor="localhost";
			$usuarioBD="root";
			$pwdBD="";
			$nomBD="PrograWeb";
			$db=mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);

			$sql="INSERT INTO usuarios (nombre_usu,correo,password,rol) VALUES('$name','$correo','$pass','$rol')";
			//Si se inserta 
			if(mysqli_query($db,$sql)){

				//Redireccion
				if($rol=='Lector'){
					
					//header("Location: registrar_lector_comentarios.php/?correo=<?=$correo ?");
					//die();
				}else{
					
					//header("Location: escritorregistro.php");
					//die();
				}
				

			}else{
				//Si no error
				echo "Error" .$sql. ":".mysqli_error($db);
				echo "Ocurrio un error";
			}

	}

	insert($correo,$nombre,$contra,$rol);

	
	


	?>



 	<!--Footer-->
    <br>
    <br>
    <?php include("./templates/footer.php")?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>