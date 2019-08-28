<?php 

	require_once "../../config/conexion.php";
	require_once "../../modelos/Documentos.php";

	$obj= new documentos();

	$datos=array();

	$nombreImg=$_FILES['imagen']['name'];
	$rutaAlmacenamiento=$_FILES['imagen']['tmp_name'];
	$carpeta='../../archivos/curriculo/';
	$rutaFinal=$carpeta.$nombreImg;
	

	$datosImg=array(
		$nombreImg,
		$rutaFinal
					);
		if(move_uploaded_file($rutaAlmacenamiento, $rutaFinal)){
			$idimagen=$obj->agregaImagen($datosImg);
		
			if($idimagen > 0){
		
				$datos[0]=$_POST['cbx_departamento6'];
				$datos[1]=$_POST['cbx_persona6'];
				$datos[2]=$idimagen;
				
				
				echo $obj->registroDocumento($datos);
			}else{
				echo 0;
			}
	}
	
 ?>