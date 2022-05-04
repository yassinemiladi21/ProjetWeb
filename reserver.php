<?php
include "connect.php";
session_start();
if(isset($_GET['submit'])){
//$id=mysqli_real_escape_string($conn,$_POST["idvoyage"]);
//$_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
$i=mysqli_query($conn,"select count(*) from billet") or die("query failed");
$j=$i+1;
$idvoy=$_GET["idvoy"];
$cinetud=$_SESSION['cinetud'];
$reserver=mysqli_query($conn,"insert into billet values ($j,$idvoy,$cinetud") or die("query failed");

}
?>