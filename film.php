<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Notre Cinéma</title>
  <link rel="stylesheet" type="text/css" href="film.css">
</head>
<body>
<header>
    <nav class="navbar">
      <ul>
        <li style="float:left">Cinéma</li>
        <li><a href="index.php">Accueil</a></li>
        <li class="active"><a href="film.php">Films</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="connexion.php">Connexion</a></li>
      </ul>

    </nav>
  </header>
  <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'cinema';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }

            $requete = "select * from Film";
            $resultat = $conn->query($requete);
            echo "<table>";

            echo "<tr><th>Titre</th><th>Date</th><th>Realisateur</th><th>Note</th></tr>";

            if (mysqli_num_rows($resultat) > 0)
            {

            while ($f = mysqli_fetch_assoc ($resultat))
            {   
            echo "<tr>";
            echo "<td>$f[Titre]</td>";
            echo "<td>$f[Date]</td>";
            echo "<td>$f[Realisateur]</td>";
            echo "<td>$f[Note]</td>";
            echo "</tr>";
                }
            }

            echo "</table>";
        
        
        
        ?>
<footer>
    <p>&copy; 2023 Cinéma. Tous droits réservés.</p>
  </footer>
</body>
</html>
