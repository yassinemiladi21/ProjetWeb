<?php
    //if (isset($_POST['prix']) && isset($_POST['nbpassagers']) && isset($_POST['depart']) && isset($_POST['arrivee']) && isset($_POST['heuredep']))
        include "connect.php";    
        $id = $_POST['id'];
        $nb = $_POST['nbpassagers'];
        $depart = $_POST['depart'];
        $arrivee = $_POST['arrivee'];
        $prix= $_POST['prix'];
        $date =$_POST['date'];
        $heure = $_POST['heuredep'];

        if (empty($id) || empty($nb) || empty($depart) || empty($arrivee) || empty($prix) || empty($heure)) {
            header("Location: chauffeur.html");
        }
        else {
            $sql = "INSERT into voyage (nbpassagers,depart, arrivee,prix,date,heuredep,cin) VALUES ($nom,'$depart','$arrivee',$prix,$date,'08:00:00',1234568)";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                echo "Your message was sent successfully !";
            }
            else {
                echo "Your message could not be sent";
            }
        }
    //}
    else {
        echo "connection failed";
        header("Location: login.html");
    }
?>