<?php 
		class Persona
		{
			//Atributos
			private $nombre;
			private $apellido;
			private $dni;

			//Get y Set

			public function GetNombre()
			{

				return $this->nombre;
			}
			public function GetApellido()
			{
				return $this->Apellido;

			}
			public function GetDni()
			{

				return $this->dni;
			}

			public function SetNombre($valor)
			{
				$this->Nombre=$valor;
			}
			public function SetApellido($valor)
			{
				$this->Apellido=$valor;
			}
			public function SetDni($valor)
			{
				$this->dni=$valor;
			}

		

			public function __construct($nombre,$apellido,$dni)
			{
					$this->nombre=$nombre;
					$this->apellido=$apellido;
					$this->dni=$dni;
				/*if($Nombre !== NULL && $Apellido !==NULL)
				{
					$this->nombre=$Nombre;
					$this->apellido=$Apellido;
					$this->dni=$dni;

				}*/
			}

			public function ToString()
			{
				return $this->nombre."-".$this->apellido."-".$this->dni."\n";
			}


			public static function Guardar($objeto)
			{

				$Archivo= fopen("Personas.txt","a");

				fwrite($Archivo,$objeto->ToString());

				fclose($Archivo);
			}
		}
 ?>