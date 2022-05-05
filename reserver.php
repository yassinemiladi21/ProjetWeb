<?php
include "connect.php";
session_start();
// if(isset($_GET['submitres'])){
//$id=mysqli_real_escape_string($conn,$_POST["idvoyage"]);
//$_POST=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
// $i=mysqli_query($conn,"SELECT count(*) from billet") or die("query failed");
// $j=$i+1;
// $idvoy=$_POST[];
if(isset($_POST['IDres']) && isset($_POST['pwde'])){
    $cin=$_SESSION['cinetud'];
    $idvoy=$_POST['IDres'];
    $pwd=mysqli_query($conn,"SELECT pwd from user where cin=$cin") or die("query failed");
    echo $cin."<br>";
    echo $idvoy."<br>";
    if(mysqli_fetch_assoc($pwd)['pwd']===$_POST['pwde']){
        mysqli_query($conn,"update voyage set nbpassagers=nbpassagers-1 where idvoyage=$idvoy");
        mysqli_query($conn,"INSERT into billet(idvoyage,cin) VALUES ($idvoy,$cin)") or die("query failed11");
    }else{
        die("mot de passe ralet");
    }
}
// echo $_POST['IDres'];
// $cinetud=$_SESSION['cinetud'];
// echo 'hi';
// $reserver=mysqli_query($conn,"INSERT into billet(idvoyage,cin) values ($idvoy,$cinetud)") or die("query failed");

// }
?>