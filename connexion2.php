<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Notre Cinéma</title>
  <link rel="stylesheet" type="text/css" href="connexion2.css">
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

      $username=$_POST['Username'];
      $password=$_POST['Password'];

      $requete = "SELECT `Password` FROM `admin` WHERE `Username` = '".$username."' ";
      $resultat = $conn->query($requete);
      if (mysqli_num_rows($resultat) > 0)
      {
      while($rowData = mysqli_fetch_array($resultat)){
        if ($password==$rowData["Password"]){
          
          echo "<ul>
            <li><a href=\"asAdmin.php\">Ajouter/Supprimer Admin</a></li>
            <li><a href=\"asFilm.php\">Ajouter/Supprimer Film</a></li>
            <li ><a href=\"lContact.php\">Lire la rubrique Contact</a></li>
          </ul>";




        }
        else{
          echo "connexion echoué";
        }
      }
    }else
  {
    echo "connexion echoué";
  }
    ?>

    </main>
  <footer>
    <p>&copy; 2023 Cinéma. Tous droits réservés.</p>
  </footer>
</body>
</html>
