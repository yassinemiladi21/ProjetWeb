<?php
    session_start();
    if (isset($_POST['depart']) && isset($_POST['arrivee'])) {
        include "connect.php";
        // $dep = $_POST['depart'];
        // $arr = $_POST['arrivee'];

        $nb = $_POST['nbpassagers'];
        $depart = $_POST['depart'];
        $arrivee = $_POST['arrivee'];
        $prix= $_POST['prix'];
        $date =$_POST['date'];
        $heure = $_POST['heuredep'];
        // if (empty($dep) || empty($arr)) {
        //     header("Location: login.php");
        // }
        $cin=$_SESSION['cinchauff'];
        $sql = "INSERT into voyage(nbpassagers, depart, arrivee, prix, date, heuredep, cin) VALUES ($nb,'$depart','$arrivee',$prix,'$date','$heure',$cin)";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "Your message was sent successfully !";
        }
        else {
            echo "Your message could not be sent";
        }

    }
    else {
        echo "connection failed";
        header("Location: login.php");
    }
?>