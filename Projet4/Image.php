<?php
$mysqli = new mysqli("localhost", "root", "root", "projet2");
if ($mysqli->connect_errno) 
{
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else
{
    echo "c'est bon";
}

<img src="/'.$data['image'].'">


?>

<!DOCTYPE HTML>
<html lang="fr">
      <head>
            <meta charset="utf-8">
            <title>Ajouter un article</title> 
			<link rel="stylesheet"  type="text/css" href="styles/Menu3.css" />
      </head>
	  <body style="background-color:green;">	
<?php include "menu.php" ?> <br>


      </body>
</html>