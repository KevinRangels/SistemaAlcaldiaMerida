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
                          <h1 class="box-title">Buscar:
                        <input type="text" name="caja_busqueda"  id="caja_busqueda" placeholder="Buscar personal" >
                        <br>
                        <br>
                        
                        <div id="datos"></div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <!-- <div class="panel-body table-responsive">
                    
                    </div> -->
                  
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
	</div>
  <!--Fin-Contenido-->
    
					</div>
					
				</div>
			</div>
        </div>

<div class="modal fade" id="PersonaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Perfil</h4>
					</div>
					<div class="modal-body">

                        <p>Nombre Perfil: <span name="nombrePerfil"  id="nombrePerfil"></span></p>
                        <p>Apellido Perfil: <span  name="apellidoPerfil" id="apellidoPerfil"></span></p>

						<h3>Nombre : </h3>
                        <h3>Cedula : </h3><span name="cedulaPerfil" id="cedulaPerfil"></span>
                        <h3>Estado Civil : </h3><span name="edocivilPerfil" id="edocivilPerfil"></span>
                        <h3>Telefono : </h3><h3 name="telefonoPerfil" id="telefonoPerfil"></h3>
                        
					</div>
					<div class="modal-footer">
					</div>
				</div>
			</div>
        </div>

        <div class="modal fade" id="modal_contrato">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Contrato</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-print"><span class="fa fa-print"> </span> Imprimir</button>
      </div>
    </div>
  </div>
</div>
<script src="../public/plugins/jquery-3.2.1.min.js"></script>
<script >
     $(document).on("click",".btn-view-contrato", function(){
        valor_IDfuncionario = $(this).val();
        $.ajax({
             url: base_url + "../procesos/funcionarios/obtenDatosFuncionario.php",
             type:"POST",
             dataType:"html",
             data:{id:idfuncionario},
        }).done(function(data) {
                     $("#modal_contrato .modal-body").html(data);
        });
    });
</script>


<script>


function agregaDatosFuncionario(idfuncionario){
$.ajax({
    type:"POST",
    data:"idfuncionario=" + idfuncionario,
    url:"../procesos/funcionarios/obtenDatosFuncionario.php",
    success:function(r){
        dato=jQuery.parseJSON(r);       
        $('#nombrePerfil').val(dato['nombre']);

        $('#apellidoPerfil').text(dato['apellido']);

        $('#cedulaPerfil').append(text(dato['cedula']));

    }
});
}

$(buscar_datos());
function buscar_datos(consulta){
    $.ajax({
        url: "../procesos/buscarFuncionario.php",
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