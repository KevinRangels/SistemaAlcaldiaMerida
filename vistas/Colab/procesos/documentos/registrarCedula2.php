<?php
error_reporting( ~E_NOTICE ); // avoid notice
require_once "../../config/conexion.php";

require_once "../../config/conexion2.php";

if(isset($_POST['btnagregar']))
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
$upload_dir = '../../archivos/cedulas/';
  $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
 
  // valid image extensions
  $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
 
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
  $stmt = $DB_con->prepare('INSERT INTO cedulas(id_departamento,id_funcionario,userPic) VALUES(:uname, :ujob, :upic)');
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