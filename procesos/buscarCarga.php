<?php 
require_once "../config/conexion.php";
$c= new conectar();
$conexion=$c->conexion();

$salida = "";

$query = "SELECT fun.nombre,
fun.apellido,
fun.cedula,
fami.cargaF,
fami.menores_uno,
fami.menores_dos,
fami.esposo,
fami.beneficioUtiles,
fami.guarderia,
fami.becas,
fami.juquetes,
fami.id_cargaFamilia

from cargafamilia as fami
inner join funcionarios as fun
on fami.id_funcionario=fun.id_funcionario
Order By cedula";

if(isset($_POST['consulta'])){
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT fun.nombre,
    fun.apellido,
    fun.cedula,
    fami.cargaF,
    fami.menores_uno,
    fami.menores_dos,
    fami.esposo,
    fami.beneficioUtiles,
    fami.guarderia,
    fami.becas,
    fami.juquetes,
    fami.id_cargaFamilia
    
    from cargafamilia as fami
    inner join funcionarios as fun
    on fami.id_funcionario=fun.id_funcionario
    WHERE cedula LIKE '%".$q."%'  ";
}
$resultado = $mysqli->query($query);  

if($resultado->num_rows > 0){
    $salida.="<table id='tablaDinamicaLoad' class='table table-hover table-condensed table-bordered text-center'>
    <thead class='text-center'>
    <tr>
		<td>Nombre</td>
        <td>Apellido</td>
        <td>Cedula</td>
        <td>Carga Familiar</td>
        <td>Menores de 18</td>
        <td>Menores de 25</td>
        <td>Espos@ - Nombres y (fecha)</td>
        <td>Beneficio de utiles Escolares</td>
        <td>Guarderia hasta 4 años</td>
        <td>Becas 25 años</td>
        <td>Juquetes</td>
        <td>Editar</td>
        <td>Eliminar</td>
	</tr></thead><tbody>";

    while($ver=mysqli_fetch_row($resultado)){

         
         $salida.="<tr>
                   <td>$ver[0]</td>
                   <td>$ver[1]</td>
                   <td>$ver[2]</td>
                   <td>$ver[3]</td>
                   <td>$ver[4]</td>
                   <td>$ver[5]</td>
                   <td>$ver[6]</td>
                   <td>$ver[7]</td>
                   <td>$ver[8]</td>
                   <td>$ver[9]</td>
                   <td>$ver[10]</td>
             <td>
                 <span data-toggle='modal' data-target='#actualizarCargaFModal' class='btn btn-warning btn-xs' onclick='agregaDatosCargaF($ver[11])'>
                     <span class='glyphicon glyphicon-pencil'></span>
                 </span>
             </td>
             <td>
                 <span class='btn btn-danger btn-xs' onclick='eliminarCargaF($ver[11])'>
                     <span class='glyphicon glyphicon-remove'></span>
                 </span>
             </td>
                   </tr>";
     };
     $salida.="</tbody></table>";
     
     }else{
        $salida.="no hay datos";
     }

         echo $salida;
         $mysqli->close();
?>
 <script>
 
            // 'csvHtml5'
            // 'pdfHtml5'
    $(document).ready(function() {
    $('#tablaDinamicaLoad').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5'
        ],language:{
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
    } );
} );
        </script>

        