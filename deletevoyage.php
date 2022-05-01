<?php
include "connect.php";
session_start();
if(isset($_POST["Delete"])){
$id=mysqli_real_escape_string($conn,$_POST["ID"]);
$delete=mysqli_query($conn,"delete FROM voyage WHERE id=$id") or die("query failed");

}
?>