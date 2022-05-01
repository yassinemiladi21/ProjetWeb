<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Ticketi</title>
    <link rel="stylesheet" href="login.css" />
  </head>v 
  <body>
    <h1 class="title"><i>Ticketi</i></h1>
    <div class="login" style="z-index: 1; opacity: 1">
      <h1>Se connecter</h1>
      <form method="POST" action="chauffeur.php">
        <div class="text">
          <input type="text" id="user" name="usern" required />
          <span></span>
          <label for="user">Username</label>
        </div>
        <div class="text">
          <input type="password" id="pass" required />
          <span></span>
          <label for="pass">Mot de passe</label>
        </div>
        <input type="submit" value="Se connecter" onclick="passage()"/>

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
<?php 
if ($_POST)
{
    extract($_POST);
}
?>