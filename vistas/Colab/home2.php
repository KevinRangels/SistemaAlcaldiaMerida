<?php
 session_start();
 
 if(!isset($_SESSION['rol'])){
     header('location: ../../index.php');
 }else{
     if($_SESSION['rol'] != 2){
         header('location: ../../index.php');
     }
 }
 require_once "../../config/conexion.php";
 $c= new conectar();
 $conexion=$c->conexion();


   $sql="SELECT  SUM(fami.cargaF)
                
           from cargafamilia as fami";
   $resultado=mysqli_query($conexion,$sql);
 
 $sql="SELECT  
               jugad.nombre,
               equi.nombre,
               SUM(pit.P)
               from pitcheos as pit
               inner join equipos as equi
               on pit.id_equipo=equi.id_equipo
               inner join jugadores as jugad
               on pit.id_jugador=jugad.id_jugador
               GROUP BY jugad.nombre
               ORDER BY SUM(pit.P) DESC
               LIMIT 5
         ";
     $result=mysqli_query($conexion,$sql);

   $sql1="SELECT COUNT(*) id_funcionario FROM funcionarios";

   $resultado1=mysqli_query($conexion,$sql1);

   $sql2="SELECT COUNT(*) id_usuario FROM usuarios";

   $resultado2=mysqli_query($conexion,$sql2);

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Sistema Recursos Humanos</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- alertify -->
  <link rel="stylesheet" type="text/css" href="../../public/plugins/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../../public/plugins/alertifyjs/css/themes/default.css">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../public/bower_components/font-awesome/css/font-awesome.min.css">

	<link rel="stylesheet" href="../../index/css/main.css">



  <!-- Ionicons -->
  <link rel="stylesheet" href="../../public/bower_components/Ionicons/css/ionicons.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../../public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../public/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../public/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../public/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>DM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Recursos Humanos</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
       
          <!-- User Account: style can be found in dropdown.less -->
          

          <li class="">
            <a href="#" >
              <i class="fa fa-question-circle-o" aria-hidden="true"></i>
            </a>
          </li>

          <li>
          <a href="../../config/cerrar_sesion.php" >  
              <i class="fa fa-power-off"></i>
            </a>

          </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <!-- <div class="pull-right">
                  <a href="../config/cerrar_sesion.php" class="btn btn-default btn-flat">Cerrar</a>
                </div> -->
              </li>
            </ul>
          </li>
       
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <figure>
        <img src="../../assets/img/logo1.png" alt="Alcaldia" class="img-responsive center-box" style="width:100%;margin-top:25px;">
      </figure>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="">
          <a href="home2.php">
            <i class="fa fa-home" aria-hidden="true"></i> <span>Inicio</span>
          </a>
          
        </li>

         <li class="">
              <a href="funcionariosA2.php">
                <i class="fa fa-users"></i> <span>Personal</span>
                </span>
              </a>

          </li>
          <li class="">
              <a href="cargaFamiliar.php">
                <i class="fa fa-users"></i> <span>Carga Familiar</span>
                </span>
              </a>

          </li>

       
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        
        
        <div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Registros del Sistema</h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Usuarios
				</div>
				<div class="full-box tile-icon text-center">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>

				</div>
				<div class="full-box tile-number text-titles">
        <?php while($ver2=mysqli_fetch_row($resultado2)): ?>

					<p class="full-box"><?php echo $ver2[0]; ?></p>
          <?php endwhile; ?>

					<small>Registrados</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Personal
				</div>
				<div class="full-box tile-icon text-center">
                <i class="fa fa-address-card-o" aria-hidden="true"></i>
				</div>
				<div class="full-box tile-number text-titles">
        <?php while($ver1=mysqli_fetch_row($resultado1)): ?>

					<p class="full-box"><?php echo $ver1[0]; ?></p>
          <?php endwhile; ?>

					<small>Registrado</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Cargas Familiares
				</div>
				<div class="full-box tile-icon text-center">
                <i class="fa fa-users" aria-hidden="true"></i>
				</div>
				<div class="full-box tile-number text-titles">
        <?php while($ver=mysqli_fetch_row($resultado)): ?>

					<p class="full-box"><?php echo $ver[0]; ?></p>
          <?php endwhile; ?>
					<small>Familiares Registrados</small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Empleados fijo
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-female"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">70</p>
					<small>Registrados</small>
				</div>
       
		</div>
    </div>
    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    
                  
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->


