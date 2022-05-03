<?php
include "connect.php";
//session_start();
if(isset($_GET['id'])){
//$id=mysqli_real_escape_string($conn,$_POST["idvoyage"]);
//$_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
$id=$_GET["id"];
$delete=mysqli_query($conn,"delete FROM voyage WHERE idvoyage=$id") or die("query failed");

}
?>