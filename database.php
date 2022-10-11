<?php

		class Conexion
		{

			public static function Conectar()
			{

				$port = "mysql:host=localhost;dbname=registro;charset=utfmb4";
				$options[

							PDO::ATTR_EMULATE_PREPARES  	  ==> false,
							PDO::ATTR_ERRMODE			 	  ==> PDO::ERR_MODE_EXCEPTION,
							PDO::ATTR_DEFAULT_FETCH_MODE  	  ==> FETCH_ASSOC,


						];

						try 
						{

							$pdo = new PDO($port, "root", "", $options);
							
						} 
						catch (Exception $e) 
						{
							exit("Error al conectar");
						}

						return false;




			}



		}




?>