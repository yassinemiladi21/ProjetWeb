<?php
include "connect.php";
session_start();
if(isset($_POST["Submit1"])){
$cin=mysqli_real_escape_string($conn,$_POST["usern"]);
$password=mysqli_real_escape_string($conn,$_POST["pwd"]);
$exist=mysqli_query($conn,"SELECT * FROM user WHERE cin=$cin AND pwd='$password'") or die("query failed");
if(mysqli_num_rows($exist)>0){
     $row = mysqli_fetch_assoc($exist);
	 if($row['role']=='chauffeur'){
     $_SESSION['cinchauff']=$row['cin'];
		 $_SESSION['chauff_name']=$row['nom'];
		 $_SESSION['chauff_prenom']=$row['prenom'];
		 $_session['chauff_pwd']=$row['pwd'];
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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Ticketi</title>
    <link rel="stylesheet" href="login.css" />
  </head> 
  <body>
    <h1 class="title"><i>Ticketi</i></h1>
    <div class="login" style="z-index: 1; opacity: 1">
      <h1>Se connecter</h1>
      <form method="POST">
        <div class="text">
          <input type="number" id="user" name="usern" required />
          <span></span>
          <label for="user">Numéro CIN</label>
        </div>
        <div class="text">
          <input type="password" name="pwd" id="pass" required />
          <span></span>
          <label for="pass">Mot de passe</label>
        </div>
        <input type="submit" name="Submit1" value="Se connecter"/>

        <div class="signup-text">
          Pas un membre ? <a href="#" onclick="change1()">S'inscrire</a>
        </div>
      </form>
    </div>

     <div class="signup" style="z-index: 0; opacity: 0">
      <h1>S'inscrire</h1>
      <form action="send.php" method="post">
        <div class="text">
          <input type="text" name="nom" id="fname" required />
          <span></span>
          <label for="fname">Nom</label>
        </div>
        <div class="text">
          <input type="text" name="prenom" id="lname" required />
          <span></span>
          <label for="lname">Prenom</label>
        </div>
        <div class="text">
          <input type="text" name="cin" id="cin" required />
          <span></span>
          <label for="cin">CIN</label>
        </div>
        <div class="choose">
          <select name="role" id="ce">
            <option value="chauffeur">Chauffeur</option>
            <option value="etudiant">Etudiant</option>
          </select>
        </div>
        <div class="text">
          <input type="text" name="username" id="user" required />
          <span></span>
          <label for="user">Username</label>
        </div>
        <div class="text">
          <input type="password" name="pwd" id="pass" required />
          <span></span>
          <label for="pass">Mot de passe</label>
        </div>
        <input type="submit" value="S'inscrire" />
        <div class="login-text">
          Deja un membre ? <a href="#" onclick="change2()">Se connecter</a>
        </div>
      </form>
    </div>

    <script src="insc.js"></script>
  </body>
</html>