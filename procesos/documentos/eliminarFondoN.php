<?php

require_once "../../config/conexion.php";
	$c= new conectar();
    $conexion=$c->conexion();
    
    
    $id = $_REQUEST['id'];
	
	$query = "DELETE FROM fondonegro WHERE id_fondonegro = '$id'";
	$resultado = $conexion->query($query);
	
	if($resultado){
        $url = $_SERVER['HTTP_REFERER'];
		header("LOCATION:$url");
	}else{
		echo "no se elimino";
	}
?>