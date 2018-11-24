<?php
include '__dbconf__.php';
if(empty($_GET['b'])){
  @header('location:index.php?');
}else{
  $b=$_GET['b'];
  if($b == "iinput")
  {
    if($_POST['__fcc_priv8_string__'] == __fcc_priv8_string()){
    $service_no=$_POST['admin_id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    service_no$insert=$dbconf->__query_db_fcc($acon,"INSERT INTO admin VALUES('$service_no','$username','$password') ");
    if($insert){
      echo "ok";
    }else{
      echo "failed :(";
    }
  }else{
    header('HTTP/1.1 Not Found');
  }
  ?>
