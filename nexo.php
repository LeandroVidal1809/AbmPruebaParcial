<?php
		require_once("Clases/Persona.php");

$quehago=$_POST['queHacer'];

		switch ($quehago) {
			case 'Agregar':
				# ...
				$obj=$_POST['persona'];
				var_dump($obj);
				$pers= new persona($obj["nombre"],$obj["apellido"],$obj["dni"]);

				
				persona::Guardar($pers);
				break;
			
		}


?>