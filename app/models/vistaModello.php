<?php
	namespace app\models;

	class vistaModello{

		protected function obtenerVistasModelo($vista){

			$listaBlanca=["dashboard","userNew","userList","userUpdate","userSearch","userPhoto","logOut","iniziaSessione","documentazione","libri","regolamento"];

			if(in_array($vista, $listaBlanca)){
				if(is_file("./app/views/content/".$vista."-vista.php")){
					$contenido="./app/views/content/".$vista."-vista.php";
				}else{
					$contenido="404";
				}
			}elseif($vista=="principale" || $vista=="index"){
				$contenido="principale";
			}else{
				$contenido="404";
			}
			return $contenido;
		}

	}
