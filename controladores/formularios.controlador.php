<?php

class ControladorFormularios{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistro(){

		if(isset($_POST["registroNombre"])){

			$tabla = "registros";

			$datos = array ("nombre"=> $_POST["registroNombre"],
							"email"=>$_POST["registroEmail"],
							"password"=>$_POST["registroPassword"]);

			$respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
			
			return $respuesta;


		}

	}


	static public function ctrSelecionarRegistros(){
	
		$tabla = "registros";
		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, null, null);
		
		return $respuesta;
	}

	public function ctrIngreso(){

		if(isset($_POST["ingresoEmail"])){

			$tabla = "registros";
			$columna = "email";
			$valor = $_POST["ingresoEmail"] ;

			$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla,$columna, $valor);
			
			echo '<pre>'; print_r($respuesta); echo '</pre>';


		}

	}




}

?>