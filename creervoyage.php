<?php

    if (isset($_POST['prix']) && isset($_POST['nbpassagers']) && isset($_POST['depart']) && isset($_POST['arrivee']) && isset($_POST['heuredep'])) {
        include "connect.php";
        echo "Hello";

        $nb = $_POST['nbpassagers'];
        $depart = $_POST['depart'];
        $arrivee = $_POST['arrivee'];
        $prix= $_POST['prix'];
        $heure = $_POST['heuredep'];

        echo $nb;

        if (empty($nb) || empty($depart) || empty($arrivee) || empty($prix) || empty($heure)) {
            header("Location: chauffeur.html");
        }
        else {
            $sql = "INSERT into voyage VALUES ('$nom','$depart','$arrivee',".$prix.",'$heure')";
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