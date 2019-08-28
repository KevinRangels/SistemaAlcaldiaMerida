<!<?php
 
 
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

$query = "SELECT id_departamento, departamento FROM departamentos ORDER BY departamento";
    $resultado=$mysqli->query($query);

?>
<?php
error_reporting( ~E_NOTICE ); // avoid notice
require_once "../config/conexion2.php";

if(isset($_POST['btnsave']))
{
 $username = $_POST['cbx_departamento'];// user name
 $userjob = $_POST['cbx_persona'];// user email
 
 $imgFile = $_FILES['user_image']['name'];
 $tmp_dir = $_FILES['user_image']['tmp_name'];
 $imgSize = $_FILES['user_image']['size'];
 
 
 if(empty($username)){
  $errMSG = "Please Enter Username.";
 }
 else if(empty($userjob)){
  $errMSG = "Please Enter Your Job Work.";
 }
 else if(empty($imgFile)){
  $errMSG = "Please Select Image File.";
 }
 else
 {
//   $upload_dir = '../archivos/user_images/'; // upload directory

$upload_dir = '../archivos/fotos/';
$upload_dir = '../../1.API/imagenes/prueba';

  $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
 
  // valid image extensions
  $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf'); // valid extensions
 
  // rename uploading image
  $userpic = rand(1000,1000000).".".$imgExt;
   
  // allow valid image file formats
  if(in_array($imgExt, $valid_extensions)){   
   // Check file size '5MB'
   if($imgSize < 5000000)    {
    move_uploaded_file($tmp_dir,$upload_dir.$userpic);
   }
   else{
    $errMSG = "Sorry, your file is too large.";
   }
  }
  else{
   $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
  }
 }
 
 
 // if no error occured, continue ....
 if(!isset($errMSG))
 {
  $stmt = $DB_con->prepare('INSERT INTO foto(id_departamento,id_funcionario,userPic) VALUES(:uname, :ujob, :upic)');
  $stmt->bindParam(':uname',$username);
  $stmt->bindParam(':ujob',$userjob);
  $stmt->bindParam(':upic',$userpic);
  
  if($stmt->execute())
  {
   $successMSG = "new record succesfully inserted ...";
   // redirects image view page after 5 seconds.
  }
  else
  {
   $errMSG = "error while inserting....";
  }
 }
}
?>
<!--Contenido-->
   <!-- Content Wrapper. Contains page content -->
 <!-- <div id="tablaUsuariosLoad"> -->
   <div class="content-wrapper">        
     <!-- Main content -->
     <section class="content">
         <div class="row">
           <div class="col-md-12">
               <div class="box">
                 <div class="box-header with-border">
                       <h1 class="box-title">Foto</h1>
                     <div class="box-header pull-right form-1-2">
                     
                 </div>
                 <!-- /.box-header -->
                 <!-- centro -->
                 <form method="post" enctype="multipart/form-data" class="form-horizontal">
     
 <table class="table table-bordered table-responsive">
 
 <label>Selecciona Departamento : </label>
                               <select name="cbx_departamento" id="cbx_departamento" class="form-control input-md">
				                    <option value="0">Selecciona Departamento</option>
				                      <?php while($row = $resultado->fetch_assoc()) { ?>
					                <option value="<?php echo $row['id_departamento']; ?>"><?php echo $row['departamento']; ?></option>
				                     <?php } ?>
			                    </select>
			
			                <label>  Selecciona Persona : </label>
                            <select name="cbx_persona" id="cbx_persona" class="form-control input-md"></select>
    
    <tr>
        <td><input class="input-group form-control input-md" type="file" name="user_image" accept="image/*" /></td>
    </tr>
    
    <tr>
        <td colspan="2"><button classtype="submit" name="btnsave" class="btn btn-default">
        <span class="btn btn-success glyphicon glyphicon-save"></span> &nbsp; guardar
        </button>
        </td>
    </tr>
    
    </table>
    
</form>
                 </div> -->
               
                 <!--Fin centro -->
               </div><!-- /.box -->
           </div><!-- /.col -->
       </div><!-- /.row -->
   </section><!-- /.content -->

 </div><!-- /.content-wrapper -->
 </div>
<!--Fin-Contenido-->

<!-- Modal Editar -->

     <script src="../public/plugins/jquery-3.2.1.min.js"></script>

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

     </script>
