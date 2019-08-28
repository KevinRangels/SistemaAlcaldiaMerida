<?php 
require_once "../config/conexion.php";
$c= new conectar();
$conexion=$c->conexion();

$salida = "";

$query = "SELECT * FROM funcionarios Order By expediente";

if(isset($_POST['consulta'])){
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT id_funcionario, expediente, nombre, apellido, cedula, edocivil, fechaN, fechaIngreso, profesion, cargo FROM funcionarios
    WHERE cedula LIKE '%".$q."%'  ";
}
$resultado = $mysqli->query($query);

//SEGUNDA CONSULTA
$sql="SELECT id_funcionario
		  from funcionarios";
  $result=mysqli_query($conexion,$sql);

  $ver=mysqli_fetch_row($result);

  
  /////////////////////////////

if($resultado->num_rows > 0){
    $salida.="<table class='table_datos table-hover table-condensed table-bordered  text-center'>
    <thead class='text-center'>
      <tr >
        <td>Nombre: </td>
        <td>Nombre</td>
        <td>Apellido</td>		
        <td>Cedula</td>	
        <td>Estado Civil</td>
        <td>Fecha de Nacimiento</td>
        <td>Fecha de Ingreso</td>
        <td>Profesion</td>
        <td>Cargo</td>
        <td>Entrar</td>		
      </tr>
    </thead>
    <br>
    <tbody>";
   
while($fila = $resultado->fetch_assoc()){

    
   $prueba = $fila['id_funcionario']; 
    $_SESSION=$prueba;
    
    $salida.="<tr>
    
              <td>".$fila['expediente']."</td>
              <td>".$fila['nombre']."</td>
              <td>".$fila['apellido']."</td>
              <td>".$fila['cedula']."</td>
              <td>".$fila['edocivil']."</td>
            
              <td>".$fila['fechaN']."</td>
              <td>".$fila['fechaIngreso']."</td>
              <td>".$fila['profesion']."</td>
              <td>".$fila['cargo']."</td>
              <td>
             <a href='perfil.php?id_funcionario=$_SESSION;'>entrar
		    </td>
              </tr>";
}
$salida.="</tbody></table>";

}else{
    $salida.="no hay datos";
}

    echo $salida;
    $mysqli->close();


?>
<script>

</script>