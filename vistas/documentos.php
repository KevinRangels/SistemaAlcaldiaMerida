<?php
    session_start();
    
    if(!isset($_SESSION['rol'])){
        header('location: ../index.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: ../index.php');
        }
    }
  require_once("menu.php");
  require_once "../config/conexion.php";
	$c= new conectar();
	$conexion=$c->conexion();

    $sql="SELECT fun.nombre,
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
            on fami.id_funcionario=fun.id_funcionario";
    $result=mysqli_query($conexion,$sql);
  
    
    $query = "SELECT id_departamento, departamento FROM departamentos ORDER BY departamento";
	$resultado=$mysqli->query($query);
	
	$query = "SELECT id_departamento, departamento FROM departamentos ORDER BY departamento";
	$resultado1=$mysqli->query($query);
	
	$query = "SELECT id_departamento, departamento FROM departamentos ORDER BY departamento";
	$resultado2=$mysqli->query($query);

	$query = "SELECT id_departamento, departamento FROM departamentos ORDER BY departamento";
	$resultado3=$mysqli->query($query);
	
	$query = "SELECT id_departamento, departamento FROM departamentos ORDER BY departamento";
	$resultado4=$mysqli->query($query);
	
	$query = "SELECT id_departamento, departamento FROM departamentos ORDER BY departamento";
	$resultado5=$mysqli->query($query);

	$query = "SELECT id_departamento, departamento FROM departamentos ORDER BY departamento";
	$resultado6=$mysqli->query($query);

	$query = "SELECT id_departamento, departamento FROM departamentos ORDER BY departamento";
    $resultado7=$mysqli->query($query);

    // $query = "SELECT id_municipio, municipio FROM municipio ORDER BY municipio";
	// $resultado=$mysqli->query($query);
    
  
?>
  <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
	<div>
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Documentos
                        <div class="box-tools pull-right">

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="container">
                    <div class="col-md-3">
                    <h4>Foto</h4>
                    <a href="foto.php">
                    <button class="btn btn-success" data-toggle="modal" data-target="#registrarFondoN" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                    </a>

                    <h4> Cedula</h4>
                    <a href="prueba.php">
                    <button class="btn btn-success" data-toggle="modal" data-target="#registrarCedula" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>

                    </a>

                   
                    <h4> Partida de Nacimiento</h4>
                    <a href="partidanacimento.php">
                    <button class="btn btn-success" data-toggle="modal" data-target="#registrarPartidaN" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                    </a>
                    </div>
                    <div class="col-md-3">

                    <h4> Acta de  Matrimonio</h4>
                    <a href="actamatrimonio.php">
                    <button class="btn btn-success" data-toggle="modal" data-target="#registrarActaM" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                    </a>

                    <h4> cedula de identidad de los hijos</h4>
                    <a href="cedulaHijos.php">
                    <button class="btn btn-success" data-toggle="modal" data-target="#registrarCedulaHijos" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                    </a>
                   
            
                    
                     <h4>Constancia de Estudio</h4>
                     <a href="constanciaEstudio.php">
                     <button class="btn btn-success" data-toggle="modal" data-target="#registrarConstanciaEstudio" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                     </a>
                     </div>
                     <div class="col-md-3">
                     <h4> Constancia de solteria</h4>
                     <a href="constanciaSolteria.php">
                     <button class="btn btn-success" data-toggle="modal" data-target="#registrarConstanciaS" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                     </a>

                     <h4>Curriculum Vitae</h4>
                     <a href="curriculo.php">
                     <button class="btn btn-success" data-toggle="modal" data-target="#registrarCurriculo" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                    </a>

                    <h4>Fondo Negro</h4>
                    <a href="fondonegro.php">
                    <button class="btn btn-success" data-toggle="modal" data-target="#registrarFondoN" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                    </a>

                   
                    
                    
                    
                    


                    </div>
                    </div>

                    </div>
                  
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
	</div>
  <!--Fin-Contenido-->

  <!-- Modal Agregar Usuari -->
  <div class="modal fade" id="registrarCargaFModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Registrar Documentos</h4>
					</div>
					<div class="modal-body">

                    <div class="col-md-6">
                    <h4> Cedula</h4>
                    <a href="prueba.php">
                    <button class="btn btn-success" data-toggle="modal" data-target="#registrarCedula" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>

                    </a>

                   
                    <h4> Partida de Nacimiento</h4>
                    <a href="partidanacimento.php">
                    <button class="btn btn-success" data-toggle="modal" data-target="#registrarPartidaN" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                    </a>

                    <h4> Acta de  Matrimonio</h4>
                    <a href="actamatrimonio.php">
                    <button class="btn btn-success" data-toggle="modal" data-target="#registrarActaM" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                    </a>

                    <h4> cedula de identidad de los hijos</h4>
                    <a href="cedulaHijos.php">
                    <button class="btn btn-success" data-toggle="modal" data-target="#registrarCedulaHijos" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                    </a>
                    </div>
            
                    <div class="col-md-6">
                     <h4>Constancia de Estudio</h4>
                     <a href="constanciaEstudio.php">
                     <button class="btn btn-success" data-toggle="modal" data-target="#registrarConstanciaEstudio" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                     </a>

                     <h4> Constancia de solteria</h4>
                     <a href="constanciaSolteria.php">
                     <button class="btn btn-success" data-toggle="modal" data-target="#registrarConstanciaS" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                     </a>

                     <h4>Curriculum Vitae</h4>
                     <a href="curriculo.php">
                     <button class="btn btn-success" data-toggle="modal" data-target="#registrarCurriculo" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                    </a>

                    <h4>Fondo Negro</h4>
                    <a href="foto.php">
                    <button class="btn btn-success" data-toggle="modal" data-target="#registrarFondoN" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button>
                    </a>
                    </div>
                   
                   
                   
                   
                    </div>
                    
					<div class="modal-footer">

					</div>
				</div>
			</div>
        </div>
<div>
<!-- MODAL FOTO -->
<div class="modal fade" id="registrarCedula" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Registra Cedula</h4>
					</div>
					<div class="modal-body" >
						<form id="frmRegistroCedula" enctype="multipart/form-data">
                        <label>Selecciona Departamento : </label>
                               <select name="cbx_departamento" id="cbx_departamento" class="form-control input-md">
				                    <option value="0">Selecciona Departamento</option>
				                      <?php while($row = $resultado->fetch_assoc()) { ?>
					                <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['departamento']; ?></option>
				                     <?php } ?>
			                    </select>
			
			                <label>  Selecciona Persona : </label>
                            <select name="cbx_persona" id="cbx_persona" class="form-control input-md"></select>

                            <label>Archivo</label>
						    <input type="file" id="imagen" name="imagen" class="form-control input-sm">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnRegistroCedula" name="btnRegistroCedula" type="button"  class="btn btn-success form-control input-sm" data-dismiss="modal">Registra Personal</button>

					</div>
				</div>
			</div>
        </div>
                    <!-- MODAL CEDULA -->
<div class="modal fade" id="registrarCedula" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Registra Cedula</h4>
					</div>
					<div class="modal-body" >
						<form id="frmRegistroCedula" enctype="multipart/form-data">
                        <label>Selecciona Departamento : </label>
                               <select name="cbx_departamento" id="cbx_departamento" class="form-control input-md">
				                    <option value="0">Selecciona Departamento</option>
				                      <?php while($row = $resultado->fetch_assoc()) { ?>
					                <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['departamento']; ?></option>
				                     <?php } ?>
			                    </select>
			
			                <label>  Selecciona Persona : </label>
                            <select name="cbx_persona" id="cbx_persona" class="form-control input-md"></select>

                            <label>Archivo</label>
						    <input type="file" id="imagen" name="imagen" class="form-control input-sm">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnRegistroCedula" name="btnRegistroCedula" type="button"  class="btn btn-success form-control input-sm" data-dismiss="modal">Registra Personal</button>

					</div>
				</div>
			</div>
        </div>
        
                                    <!-- MODAL PARTIDA DE NACIMIENTO -->

<div class="modal fade" id="registrarPartidaN" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Registra Partida de Nacimiento</h4>
					</div>
					<div class="modal-body" >
						<form id="frmRegistroParidaN" enctype="multipart/form-data">
                        <label>Selecciona Departamento : </label>
                               <select name="cbx_departamento1" id="cbx_departamento1" class="form-control input-md">
				                    <option value="0">Selecciona Departamento</option>
				                      <?php while($row = $resultado1->fetch_assoc()) { ?>
					                <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['departamento']; ?></option>
				                     <?php } ?>
			                    </select>
			
			                <label>  Selecciona Persona : </label>
                            <select name="cbx_persona1" id="cbx_persona1" class="form-control input-md"></select>

                            <label>Archivo</label>
						    <input type="file" id="imagen" name="imagen" class="form-control input-sm">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnRegistroParidaN" type="button"  class="btn btn-success form-control input-sm" data-dismiss="modal">Registra Personal</button>

					</div>
				</div>
			</div>
        </div>


        <!-- MODAL ACTA DE MATRIMONIO -->

        <div class="modal fade" id="registrarActaM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Registra Acta de matrimonio</h4>
					</div>
					<div class="modal-body" >
						<form id="frmRegistroActaM" enctype="multipart/form-data">
                        <label>Selecciona Departamento : </label>
                               <select name="cbx_departamento2" id="cbx_departamento2" class="form-control input-md">
				                    <option value="0">Selecciona Departamento</option>
				                      <?php while($row = $resultado2->fetch_assoc()) { ?>
					                <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['departamento']; ?></option>
				                     <?php } ?>
			                    </select>
			
			                <label>  Selecciona Persona : </label>
                            <select name="cbx_persona2" id="cbx_persona2" class="form-control input-md"></select>

                            <label>Archivo</label>
						    <input type="file" id="imagen" name="imagen" class="form-control input-sm">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnRegistraActaM" type="button"  class="btn btn-success form-control input-sm" data-dismiss="modal">Registra Personal</button>

					</div>
				</div>
			</div>
        </div>


        <!-- MODAL CEDULA DE HIJOS -->

        <div class="modal fade" id="registrarCedulaHijos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Registra Cedula de hijos</h4>
					</div>
					<div class="modal-body" >
						<form id="frmRegistroCedulaHijo" enctype="multipart/form-data">
                        <label>Selecciona Departamento : </label>
                               <select name="cbx_departamento3" id="cbx_departamento3" class="form-control input-md">
				                    <option value="0">Selecciona Departamento</option>
				                      <?php while($row = $resultado3->fetch_assoc()) { ?>
					                <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['departamento']; ?></option>
				                     <?php } ?>
			                    </select>
			
			                <label>  Selecciona Persona : </label>
                            <select name="cbx_persona3" id="cbx_persona3" class="form-control input-md"></select>

                            <label>Archivo</label>
						    <input type="file" id="imagen" name="imagen" class="form-control input-sm">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnRegistraCedulaHijo" type="button"  class="btn btn-success form-control input-sm" data-dismiss="modal">Registra Personal</button>

					</div>
				</div>
			</div>
        </div>


        <!-- MODAL CONSTANCIA DE ESTUDIO -->
        <div class="modal fade" id="registrarConstanciaEstudio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Registra Constancia de Estudio</h4>
					</div>
					<div class="modal-body" >
						<form id="frmRegistroConstanciaE" enctype="multipart/form-data">
                        <label>Selecciona Departamento : </label>
                               <select name="cbx_departamento4" id="cbx_departamento4" class="form-control input-md">
				                    <option value="0">Selecciona Departamento</option>
				                      <?php while($row = $resultado4->fetch_assoc()) { ?>
					                <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['departamento']; ?></option>
				                     <?php } ?>
			                    </select>
			
			                <label>  Selecciona Persona : </label>
                            <select name="cbx_persona4" id="cbx_persona4" class="form-control input-md"></select>

                            <label>Archivo</label>
						    <input type="file" id="imagen" name="imagen" class="form-control input-sm">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnRegistraConstanciaE" type="button"  class="btn btn-success form-control input-sm" data-dismiss="modal">Registra Personal</button>

					</div>
				</div>
			</div>
        </div>


        <!-- MODAL CONSTANCIA DE SOLTERIA -->

        <div class="modal fade" id="registrarConstanciaS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Registra Constancia de Solteria</h4>
					</div>
					<div class="modal-body" >
						<form id="frmRegistroSolteria" enctype="multipart/form-data">
                        <label>Selecciona Departamento : </label>
                               <select name="cbx_departamento5" id="cbx_departamento5" class="form-control input-md">
				                    <option value="0">Selecciona Departamento</option>
				                      <?php while($row = $resultado5->fetch_assoc()) { ?>
					                <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['departamento']; ?></option>
				                     <?php } ?>
			                    </select>
			
			                <label>  Selecciona Persona : </label>
                            <select name="cbx_persona5" id="cbx_persona5" class="form-control input-md"></select>

                            <label>Archivo</label>
						    <input type="file" id="imagen" name="imagen" class="form-control input-sm">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnRegistraSolteria" type="button"  class="btn btn-success form-control input-sm" data-dismiss="modal">Registra Personal</button>

					</div>
				</div>
			</div>
        </div>

        <!-- MODAL CURRICULOM VITAE -->

        <div class="modal fade" id="registrarCurriculo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Registra Curriculum Vitae</h4>
					</div>
					<div class="modal-body" >
						<form id="frmRegistroCurriculo" enctype="multipart/form-data">
                        <label>Selecciona Departamento : </label>
                               <select name="cbx_departamento6" id="cbx_departamento6" class="form-control input-md">
				                    <option value="0">Selecciona Departamento</option>
				                      <?php while($row = $resultado6->fetch_assoc()) { ?>
					                <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['departamento']; ?></option>
				                     <?php } ?>
			                    </select>
			
			                <label>  Selecciona Persona : </label>
                            <select name="cbx_persona6" id="cbx_persona6" class="form-control input-md"></select>

                            <label>Archivo</label>
						    <input type="file" id="imagen" name="imagen" class="form-control input-sm">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnRegistraCurriculo" type="button"  class="btn btn-success form-control input-sm" data-dismiss="modal">Registra Personal</button>

					</div>
				</div>
			</div>
        </div>


        <!-- MODAL FONDO NEGRO -->
        <div class="modal fade" id="registrarFondoN" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Registra Fondo Negro</h4>
					</div>
					<div class="modal-body" >
						<form id="frmRegistroFondoN" enctype="multipart/form-data">
                        <label>Selecciona Departamento : </label>
                               <select name="cbx_departamento7" id="cbx_departamento7" class="form-control input-md">
				                    <option value="0">Selecciona Departamento</option>
				                      <?php while($row = $resultado7->fetch_assoc()) { ?>
					                <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['departamento']; ?></option>
				                     <?php } ?>
			                    </select>
			
			                <label>  Selecciona Persona : </label>
                            <select name="cbx_persona7" id="cbx_persona7" class="form-control input-md"></select>

                            <label>Archivo</label>
						    <input type="file" id="imagen" name="imagen" class="form-control input-sm">
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnRegistroFondoN" type="button"  class="btn btn-success form-control input-sm" data-dismiss="modal">Registra Personal</button>

					</div>
				</div>
			</div>
        </div>
     
   
        <script src="../public/plugins/jquery-3.2.1.min.js"></script>

        <!-- <script type="text/javascript" src="../ajax/cargaFamiliar.js"></script> -->
        <script>
        $(document).ready(function(){
    $("#cbx_departamento").change(function () {        
        $("#cbx_departamento option:selected").each(function () {
            id_departamento = $(this).val();
            $.post("../procesos/getPersona.php", { id_departamento: id_departamento }, function(data){
                $("#cbx_persona").html(data);
            });            
        });
    })
});	

  $("#cbx_departamento1").change(function () {        
        $("#cbx_departamento1 option:selected").each(function () {
            id_departamento = $(this).val();
            $.post("../procesos/getPersona.php", { id_departamento: id_departamento }, function(data){
                $("#cbx_persona1").html(data);
            });            
        });
    });	

   $("#cbx_departamento2").change(function () {        
        $("#cbx_departamento2 option:selected").each(function () {
            id_departamento = $(this).val();
            $.post("../procesos/getPersona.php", { id_departamento: id_departamento }, function(data){
                $("#cbx_persona2").html(data);
            });            
        });
    });	
	$("#cbx_departamento3").change(function () {        
        $("#cbx_departamento3 option:selected").each(function () {
            id_departamento = $(this).val();
            $.post("../procesos/getPersona.php", { id_departamento: id_departamento }, function(data){
                $("#cbx_persona3").html(data);
            });            
        });
    });	

	$("#cbx_departamento4").change(function () {        
        $("#cbx_departamento4 option:selected").each(function () {
            id_departamento = $(this).val();
            $.post("../procesos/getPersona.php", { id_departamento: id_departamento }, function(data){
                $("#cbx_persona4").html(data);
            });            
        });
    });	
	$("#cbx_departamento5").change(function () {        
        $("#cbx_departamento5 option:selected").each(function () {
            id_departamento = $(this).val();
            $.post("../procesos/getPersona.php", { id_departamento: id_departamento }, function(data){
                $("#cbx_persona5").html(data);
            });            
        });
    });	
	$("#cbx_departamento6").change(function () {        
        $("#cbx_departamento6 option:selected").each(function () {
            id_departamento = $(this).val();
            $.post("../procesos/getPersona.php", { id_departamento: id_departamento }, function(data){
                $("#cbx_persona6").html(data);
            });            
        });
    });	

	 $("#cbx_departamento7").change(function () {        
        $("#cbx_departamento7 option:selected").each(function () {
            id_departamento = $(this).val();
            $.post("../procesos/getPersona.php", { id_departamento: id_departamento }, function(data){
                $("#cbx_persona7").html(data);
            });            
        });
    });	






$(document).ready(function(){
    // $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
    $('#btnRegistroCedula').click(function(){

        var formData = new FormData(document.getElementById("frmRegistroCedula"));
        var frmRegistro = document.getElementById("frmRegistroCedula");

        $.ajax({
            url: "../procesos/documentos/registrarCedula2.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(r){
                if(r == 1){
                    console.log(r);
                    alertify.success("Agregado con exito");
                    
                }else{
                    console.log(r);

                    alertify.error("Fallo al subir el archivo");
                }
            }
        });
        
    });
});


$(document).ready(function(){
    // $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
    $('#btnRegistroParidaN').click(function(){

        var formData = new FormData(document.getElementById("frmRegistroParidaN"));
        var frmRegistro = document.getElementById("frmRegistroParidaN");

        $.ajax({
            url: "../procesos/documentos/registrarPartidaN.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(r){
                if(r == 1){
                    console.log(r);
                    alertify.success("Agregado con exito");
                    
                }else{
                    console.log(r);

                    alertify.error("Fallo al subir el archivo");
                }
            }
        });
        
    });
});
$(document).ready(function(){
    // $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
    $('#btnRegistraActaM').click(function(){

        var formData = new FormData(document.getElementById("frmRegistroActaM"));
        var frmRegistro = document.getElementById("frmRegistroActaM");

        $.ajax({
            url: "../procesos/documentos/registrarActaM.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(r){
                if(r == 1){
                    console.log(r);
                    alertify.success("Agregado con exito");
                    
                }else{
                    console.log(r);

                    alertify.error("Fallo al subir el archivo");
                }
            }
        });
        
    });
});

$(document).ready(function(){
    // $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
    $('#btnRegistraCedulaHijo').click(function(){

        var formData = new FormData(document.getElementById("frmRegistroCedulaHijo"));
        var frmRegistro = document.getElementById("frmRegistroCedulaHijo");

        $.ajax({
            url: "../procesos/documentos/registrarCedulaHijo.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(r){
                if(r == 1){
                    console.log(r);
                    alertify.success("Agregado con exito");
                    
                }else{
                    console.log(r);

                    alertify.error("Fallo al subir el archivo");
                }
            }
        });
        
    });
});

$(document).ready(function(){
    // $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
    $('#btnRegistraConstanciaE').click(function(){

        var formData = new FormData(document.getElementById("frmRegistroConstanciaE"));
        var frmRegistro = document.getElementById("frmRegistroConstanciaE");

        $.ajax({
            url: "../procesos/documentos/registrarConstanciaE.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(r){
                if(r == 1){
                    console.log(r);
                    alertify.success("Agregado con exito");
                    
                }else{
                    console.log(r);

                    alertify.error("Fallo al subir el archivo");
                }
            }
        });
        
    });
});

$(document).ready(function(){
    // $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
    $('#btnRegistraSolteria').click(function(){

        var formData = new FormData(document.getElementById("frmRegistroSolteria"));
        var frmRegistro = document.getElementById("frmRegistroSolteria");

        $.ajax({
            url: "../procesos/documentos/registrarSolteria.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(r){
                if(r == 1){
                    console.log(r);
                    alertify.success("Agregado con exito");
                    
                }else{
                    console.log(r);

                    alertify.error("Fallo al subir el archivo");
                }
            }
        });
        
    });
});
$(document).ready(function(){
    // $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
    $('#btnRegistraCurriculo').click(function(){

        var formData = new FormData(document.getElementById("frmRegistroCurriculo"));
        var frmRegistro = document.getElementById("frmRegistroCurriculo");

        $.ajax({
            url: "../procesos/documentos/registrarCurriculo.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(r){
                if(r == 1){
                    console.log(r);
                    alertify.success("Agregado con exito");
                    
                }else{
                    console.log(r);

                    alertify.error("Fallo al subir el archivo");
                }
            }
        });
        
    });
});

$(document).ready(function(){
    // $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
    $('#btnRegistroFondoN').click(function(){

        var formData = new FormData(document.getElementById("frmRegistroFondoN"));
        var frmRegistro = document.getElementById("frmRegistroFondoN");

        $.ajax({
            url: "../procesos/documentos/registrarFondoN.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(r){
                if(r == 1){
                    console.log(r);
                    alertify.success("Agregado con exito");
                    
                }else{
                    console.log(r);

                    alertify.error("Fallo al subir el archivo");
                }
            }
        });
        
    });
});
$(buscar_datos());
function buscar_datos(consulta){
    $.ajax({
        url: "../procesos/buscarDocumento.php",
        type: "POST",
        dataType: "html",
        data: {consulta: consulta},
    })
    .done(function(respuesta){
        $("#datos").html(respuesta);
    })
    .fail(function() {
        console.log("error");
    })
}

$(document).on('keyup', '#caja_busqueda', function(){
    var valor = $(this).val();
    if(valor != ""){
        buscar_datos(valor);
    }else{
        buscar_datos();
    }
} )



        </script>
        
