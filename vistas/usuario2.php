<?php
 
 session_start();
 
 if(!isset($_SESSION['rol'])){
     header('location: ../index.php');
 }else{
     if($_SESSION['rol'] != 2){
         header('location: ../index.php');
     }
 }

  require_once("header.php");

?>
  <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <h1>USUARIO 2</h1>
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">USUARIO 2 <button class="btn btn-success" id="btnagregar"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                       
                    </div>
                  
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

<?php

  require_once("footer.php");
?>