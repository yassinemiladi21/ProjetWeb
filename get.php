<?php
include "connect.php";
session_start();
if(isset($_POST["Submit1"])){
$cin=mysqli_real_escape_string($conn,$_POST["usern"]);
$password=mysqli_real_escape_string($conn,$_POST["pwd"]);
$exist=mysqli_query($conn,"SELECT * FROM user WHERE cin=$cin AND pwd='$password'") or die("query failed");
if(mysqli_num_rows($exist)>0){
    echo'hi';
     $row = mysqli_fetch_assoc($exist);
	 if($row['role']=='chauffeur'){
		 $_SESSION['chauff_name']=$row['nom'];
		 $_SESSION['chauff_prenom']=$row['prenom'];
		 $_session['chauff_pwd']=$row['pwd'];
         session_destroy();
		 header("location:chauffeur.php");
	 }
	 /*else{
		  $_SESSION['etudiant_name']=row['nom'];
		 $_SESSION['etudiant_email']=row['prenom'];
		 $_session['etudiant_pwd']=row['pwd'];
		 header("location:home.php");
	 }*/
}
else{
	$message[]="CIN ou mot de passe invalides";
}

}
?>