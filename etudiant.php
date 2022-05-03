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
        <h1>Welcome Foulen</h1>
        <nav>
          <ul>
            <li><a>Se déconnecter</a></li>
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
                <tr>
                  <td>1</td>
                  <td>Domenic</td>
                  <td>88,110</td>
                  <td>dcode</td>
                  <td>dcode</td>
                  <td>dcode</td>
                  <td>dcode</td>
                  <td><button class="btn resBtn">Réserver</button></td>
                </tr>
                <tr class="active-row">
                  <td>2</td>
                  <td>Sally</td>
                  <td>72,400</td>
                  <td>Students</td>
                  <td>72,400</td>
                  <td>72,400</td>
                  <td>Students</td>
                  <td><button class="btn resBtn">Réserver</button></td>
                </tr>
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
                <tr>
                  <td>1</td>
                  <td>Domenic</td>
                  <td>88,110</td>
                  <td>dcode</td>
                  <td>dcode</td>
                  <td>dcode</td>
                  <td>dcode</td>
                  <td><button class="btn deleteBtn">Annuler</button></td>
                </tr>
                <tr class="active-row">
                  <td>2</td>
                  <td>Sally</td>
                  <td>72,400</td>
                  <td>Students</td>
                  <td>72,400</td>
                  <td>72,400</td>
                  <td>Students</td>
                  <td><button class="btn deleteBtn">Annuler</button></td>
                </tr>
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
      <form method="POST" action="creervoyage.php">
        <h3>Confirmez votre réservation</h3>
        <div class="text">
          <input type="password" name="cin" id="cin" required />
          <span></span>
          <label for="cin">CIN</label>
        </div>

        <input type="submit" name="submit" value="Confirmer" />
        <div style="display: inline" onclick="cancel()">
          <input type="button" name="cancel" value="Annuler" />
        </div>
      </form>
    </div>
    <script src="etudiant.js"></script>
  </body>
</html>
