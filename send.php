<?php


    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['role']) && isset($_POST['username']) && isset($_POST['cinuser']) && isset($_POST['pwdcreate'])) {
        include "connect.php";
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $cin = $_POST['cinuser'];
        $role = $_POST['role'];
        $username = $_POST['username'];
        $pwd = $_POST['pwdcreate'];

        if (empty($nom) || empty($prenom) || empty($cin) || empty($role) || empty($username) || empty($pwd)) {
            header("Location: login.php");
        }
        else {
            $sql = "INSERT into user VALUES ($cin,'$nom','$prenom','$username','$pwd','$role')";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                header("Location:login.php");
            else {
                echo "Erreur de création du compte";
            }
        }
    }
    else {
        echo "connection failed";
        header("Location: login.php");
    }
?>