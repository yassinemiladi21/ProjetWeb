<?php
require_once("db_connexion.php");
if (isset($_POST['Submit'])){

    if (!empty($_POST['nom']) && !empty($_POST['prenom']) !empty($_POST['cin']) !empty($_POST['role']) !empty($_POST['username'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $cin=$_POST['cin'];
        $username=$_POST['username'];
        $pwd=$_POST['pwd'];
        $role=$_POST['role'];

        $query = "insert into user VALUES('$cin','$nom','$prenom','$username','$pwd','$role')";
        $run= mysqli_run($conn,$query) or die(mysqli_error())
        if ($run){
            echo "Compte crée avec réussite";
        }
        else {
            echo "Erreur de création";
        }
    }
}
?>