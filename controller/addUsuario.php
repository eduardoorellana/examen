<?php

		
		$conn = mysqli_connect('localhost','root', '', 'registro');

		$nombre   = $_POST['nombre'];
		$email = $_POST['email'];
		$fono 	  = $_POST['fono'];
		$cursos	  = $_POST['cursos'];
		$pass	  = $_POST['pass'];
		



		$sql = mysqli_query($conn, "INSERT INTO datos(nombre, email, fono, cursos, pass) VALUES('$nombre','$email','$fono','$cursos','$pass')");


		if ($sql) 
		{
			//echo "Cliente Registrado con Éxito";
			header("location: ../index.html");
		}
		else
		{
			echo "Error de registro";

		}	


?>