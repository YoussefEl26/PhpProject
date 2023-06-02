<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Notre Cinéma</title>
  <link rel="stylesheet" type="text/css" href="connexion.css">
</head>
<body>
  <header>
    <nav class="navbar">
    <ul>
        <li style="float:left">Cinéma</li>
        <li><a href="index.php">Accueil</a></li>
        <li ><a href="film.php">Films</a></li>
        <li ><a href="contact.php">Contact</a></li>
        <li class="active"><a href="connexion.php">Connexion</a></li>
      </ul>

    </nav>
  </header>
 <main>

    <section class="connexion">

    <h>Connexion Admin</h> <br><br>
      <form method="post" action="connexion2.php"> 
    
        <label for="Username">Username :</label><br>
        <input type="text" name="Username" required> <br><br>

        <label for="Password">Password :</label><br>
        <input type="password" name="Password" required> <br><br>

        <input type="submit" value="connexion">

      </form>
    </section>
      


    </main>
  <footer>
    <p>&copy; 2023 Cinéma. Tous droits réservés.</p>
  </footer>
</body>
</html>
