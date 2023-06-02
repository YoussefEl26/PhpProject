<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Notre Cinéma</title>
  <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
<header>
    <nav class="navbar">
      <ul>
        <li style="float:left">Cinéma</li>
        <li><a href="index.php">Accueil</a></li>
        <li ><a href="film.php">Films</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
        <li><a href="connexion.php">Connexion</a></li>
      </ul>

    </nav>
  </header>
        <main>
          <h>Prendre Contact !</h> <br><br>
          <form method="post" action="contact2.php"> 
    
            <label for="Nom">Nom :</label><br>
            <input type="text" name="Nom" required> <br><br>

            <label for="Prenom">Prenom :</label><br>
            <input type="text" name="Prenom" required> <br><br>

            <label for="Message">Message :</label><br>
            <input style="width:300px; height:100px;" type="text" name="Message" required> <br><br>

            <input type="submit">

        </form>
        </main>
        

<footer>
    <p>&copy; 2023 Cinéma. Tous droits réservés.</p>
  </footer>
</body>
</html>
