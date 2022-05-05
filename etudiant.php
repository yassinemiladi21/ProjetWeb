<?php
include "connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="etudiant.css" />
    <title>Acceuil | Etudiant</title>
  </head>

  <body>
    <div class="content">
      <header>
        <h1>Welcome <?php echo $_SESSION['etudiant']; ?></h1>
        <nav>
          <ul>
            <li><a href="logout.php">Se déconnecter</a></li>
          </ul>
        </nav>
      </header>

      <main>
        <div class="con">
          <div class="voy" style="z-index: 1; opacity: 1">
            <h2
              style="
                text-align: center;
                margin-bottom: 3rem;
                color: #dd3d5a;
                font-size: 26px;
              "
            >
              Liste des voyages
            </h2>
            <table class="content-table tab1">
              <thead>
                <tr>
                  <th>ID Voyage</th>
                  <th>Nombre Passagers</th>
                  <th>Départ</th>
                  <th>Arrivée</th>
                  <th>Prix</th>
                  <th>Date</th>
                  <th>Heure Départ</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php
              $select = mysqli_query($conn, "SELECT * FROM voyage order by date,heuredep asc") or die('query failed');
              if(mysqli_num_rows($select) > 0){
              while($fetch = mysqli_fetch_assoc($select)){
                if($fetch['nbpassagers']>0){
              ?>
              <tr>
                <td><?php echo $fetch['idvoyage']; ?></td>
                <td><?php echo $fetch['nbpassagers']; ?></td>
                <td><?php echo $fetch['depart']; ?></td>
                <td><?php echo $fetch['arrivee']; ?></td>
                <td><?php echo $fetch['prix']; ?></td>
                <td><?php echo $fetch['date']; ?></td>
                <td><?php echo $fetch['heuredep']; ?></td>
                <td><button class="btn resBtn" onclick="set_voyid(<?php echo $fetch['idvoyage']; ?>)">Réserver</button></td>
              </tr>
              
              <?php
                }
              }
              }
              else{
                echo 'Aucun voyage crée !';
               }
              ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="res" style="z-index: 0; opacity: 0">
          <div class="con">
            <h2
              style="
                text-align: center;
                color: #dd3d5a;
                font-size: 26px;
                margin-bottom: 2rem;
              "
            >
              Vos Réservations
            </h2>
          <table class="content-table tab2">
              <thead>
                <tr>
                  <th>ID Billet</th>
                  <th>ID Voyage</th>
                  <th>Départ</th>
                  <th>Arrivée</th>
                  <th>Prix</th>
                  <th>Date</th>
                  <th>Heure Départ</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php
              $cine=$_SESSION['cinetud'];
              $select = mysqli_query($conn, "SELECT b.idbillet,b.idvoyage,v.depart,v.arrivee,v.prix,v.date,v.heuredep FROM billet b, voyage v where b.cin=$cine and b.idvoyage=v.idvoyage") or die('query failed');
              if(mysqli_num_rows($select) > 0){
                while($fetch = mysqli_fetch_assoc($select)){
                ?>
                <tr>
                  <td><?php echo $fetch['idbillet']; ?></td>
                  <td><?php echo $fetch['idvoyage']; ?></td>
                  <td><?php echo $fetch['depart']; ?></td>
                  <td><?php echo $fetch['arrivee']; ?></td>
                  <td><?php echo $fetch['prix']; ?></td>
                  <td><?php echo $fetch['date']; ?></td>
                  <td><?php echo $fetch['heuredep']; ?></td>
                  <td><button class="btn">">supprimer</button> </td>
                </tr>
                <?php
                }
              }
              else{
                echo 'Aucune réservation effectuée !';
               }
              ?>
            </tbody>
          </table>
          </div>
        </div>
      </main>

      <div class="bar">
        <div class="op" onclick="change1()">Liste des voyages</div>
        <div class="op" onclick="change2()">Vos Reservations</div>
      </div>
    </div>

    <div class="confirm"> 
      <form method="POST" action="reserver.php">
        <h3>Confirmez votre réservation</h3>
        <div class="text">
          <input type="password" name="pwde" id="pwde" required />
          <span></span>
          <label for="cin">Password</label>
        </div>
        <input type="hidden" name="IDres" id="IDres">
        <input type="submit" name="submit" value="Confirmer" />
        <!-- <span><a name="submitres" >Confirmer</a></span> -->
        <div style="display: inline" onclick="cancel()">
          <input type="button" name="cancel" value="Annuler" />
        </div>
      </form>
    </div>
    <script src="etudiant.js"></script>
  </body>
</html>