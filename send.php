<?php

    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cin']) && isset($_POST['role']) && isset($_POST['username'])) {
        include "connect.php";
        echo "Hello";

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $cin = $_POST['cin'];
        $role = $_POST['role'];
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];

        echo $role;

        if (empty($nom) || empty($prenom) || empty($cin) || empty($role) || empty($username) || empty($pwd)) {
            header("Location: login.html");
        }
        else {
            $sql = "INSERT into user VALUES (1234568,'$nom','$prenom','$username','$pwd','$role')";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                echo "Your message was sent successfully !";
            }
            else {
                echo "Your message could not be sent";
            }
        }
    }
    else {
        echo "connection failed";
        header("Location: login.html");
    }
?>