<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Notre Cinéma</title>
  <link rel="stylesheet" type="text/css" href="asFilm2.css">
</head>
<body>
<header>
    <nav class="navbar">
      <ul>
        <li style="float:left">Cinéma</li>
        <li><a href="index.php">Accueil</a></li>
        <li class="active"><a href="film.php">Films</a></li>
        <li ><a href="contact.php">Contact</a></li>
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
            $titre=$_POST['Titre'];
            $date=$_POST['Date'];
            $realisateur=$_POST['Realisateur'];
            $note=$_POST['Note'];
            
            $sql='INSERT INTO film (`Titre`,`Date`,`Realisateur`,`Note`) VALUES ("'.$titre.'","'.$date.'","'.$realisateur.'","'.$note.'")';
            $resultat = $conn->query($sql);
            
            if ($resultat == 1)
            {
              echo "Film enregistré";
            }else{
              echo "echoué";
            }
            
        ?>
        

<footer>
    <p>&copy; 2023 Cinéma. Tous droits réservés.</p>
  </footer>
</body>
</html>
