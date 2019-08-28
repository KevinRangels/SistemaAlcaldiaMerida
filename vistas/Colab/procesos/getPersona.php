
<?php
    header("Content-Type: text/html;charset=utf-8");
	require_once "../../../config/conexion.php";
	
	$id_departamento = $_POST['id_departamento'];
	
	$queryM = "SELECT id_funcionario, nombre, apellido FROM funcionarios WHERE id_departamento = '$id_departamento' ORDER BY nombre";
	$resultadoM = $mysqli->query($queryM);

	$resultadoF = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleccionar Persona</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_funcionario']."'>".$rowM['nombre']." ".$rowM['apellido']."</option>";
	}

	while($rowF = $resultadoF->fetch_assoc())
	{
		$html2.= "<option value='".$rowF['id_funcionario']."'>".$rowF['nombre']." ".$rowF['apellido']."</option>";
	}
	
	echo $html2;

	
?>