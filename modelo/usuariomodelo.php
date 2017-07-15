<?php
	require("../lib/conectar.php");

	class Usuario extends Conectar{
		
		private $nombre=null;
		private $apellido=null;
		private $cedula=null;
		private $direccion=null;
		
		

		public function obtenerTodos(){
			//var_dump($this->db);
			//exit;
			$stmt = $this->db-> prepare ("SELECT * FROM usuario");
			$stmt->execute ();
			
			;

				
				while($fila=$stmt->fetch (PDO::FETCH_OBJ)){
					$arreglodeTodosUsuario[]=$fila;					
					
				}			
				

			//print_r($arreglodeTodosUsuario);
			return $arreglodeTodosUsuario;
		}

		public function obtenerusuarioid(){
			//var_dump($this->db);
			//exit;
			$stmt = $this->db-> prepare ("SELECT * FROM usuario where id=?");
			$stmt->bindParam(1,$_GET["id"],PDO::PARAM_INT);

			$stmt->execute ();
			
			//$resultado= $stmt->fetchAll();

				
				while($fila=$stmt->fetch (PDO::FETCH_OBJ)){
					$arreglodeUsuario[]=$fila;					
					//echo "<tr><td>".$fila->nrocedula."</td><td>".$fila->apellido."</td/></tr>";
				}			
				

			//print_r($arreglodeTodosUsuario);
			return $arreglodeUsuario;
		}




	}







?>
