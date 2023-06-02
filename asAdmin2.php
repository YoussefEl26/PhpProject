<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Notre Cinéma</title>
  <link rel="stylesheet" type="text/css" href="asAdmin2.css">
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
            $user=$_POST['Username'];
            $password=$_POST['Password'];
            
            $sql='INSERT INTO `admin` (`Username`,`Password`) VALUES ("'.$user.'","'.$password.'")';
            $resultat = $conn->query($sql);
            
            if ($resultat == 1)
            {
              echo "Admin enregistré";
            }else{
              echo "echoué";
            }
            
        ?>
        

<footer>
    <p>&copy; 2023 Cinéma. Tous droits réservés.</p>
  </footer>
</body>
</html>
