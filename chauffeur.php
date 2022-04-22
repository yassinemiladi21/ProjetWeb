<?php require("login.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="chauffeur.css" />
    <title>Acceuil | Chauffeur</title>
  </head>

  <body>
    <div class="content">
      <header>
        <h1>Welcome  <?php echo $usern; ?></h1>
        <nav>
          <ul>
            <li><a href="login.html">Se déconnecter</a></li>
          </ul>
        </nav>
      </header>

      <main>
        <div class="btns">
          <button class="btn" style="background: #25c956" onclick="create()">
            Créer voyage
          </button>
        </div>
        <div class="data">
          <table class="content-table">
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
              <tr>
                <td>1</td>
                <td>Domenic</td>
                <td>88,110</td>
                <td>dcode</td>
                <td>dcode</td>
                <td>dcode</td>
                <td>dcode</td>
                <td><button class="btn deleteBtn">Supprimer</button></td>
              </tr>
              <tr class="active-row">
                <td>2</td>
                <td>Sally</td>
                <td>72,400</td>
                <td>Students</td>
                <td>72,400</td>
                <td>72,400</td>
                <td>Students</td>
                <td><button class="btn deleteBtn">Supprimer</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>

    <div class="creation">
      <form method="POST" action="creervoyage.php">
        <div class="text">
          <input type="text" name="nbpassagers" id="nbpassagers" required />
          <span></span>
          <label for="user">Nombre Passagers</label>
        </div>
        <div class="text">
          <input type="text" name="depart" id="depart" required />
          <span></span>
          <label for="pass">Départ</label>
        </div>
        <div class="text">
          <input type="text" name="arrivee" id="arrivee" required />
          <span></span>
          <label for="pass">Arrivée</label>
        </div>
        <div class="text">
          <input
            type="number"
            min="0"
            max="99"
            name="prix"
            id="prix"
            required
          />
          <span></span>
          <label for="pass">Prix</label>
        </div>
        <div class="text">
          <input type="date" name="date" id="date" required />
          <span></span>
          <label for="date">Date</label>
        </div>
        <div class="text">
          <input type="time" name="heuredep" id="heuredep" required />
          <span></span>
          <label for="pass">Heure Départ</label>
        </div>
        <input type="submit" name="submit" value="Créer" />
        <div style="display: inline" onclick="cancel()">
          <input type="button" name="cancel" value="Annuler" />
        </div>
      </form>
    </div>
    <script src="chauffeur.js"></script>
  </body>
</html>
