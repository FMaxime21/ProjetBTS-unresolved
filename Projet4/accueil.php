
<?php

if(isset($_POST['Ajouter']))
{
    header('Location: Ajouter.php');
    exit();
}

if(isset($_POST['Modifier']))
{
    header('Location: Modifier.php');
    exit();
}
if(isset($_POST['Supprimer']))
{
    header('Location: Supprimer.php');
    exit();
}
?>
<!DOCTYPE HTML>
<html lang="fr">
      <head>
            <meta charset="utf-8">
            <title>Accueil</title> 
			<link rel="stylesheet"  type="text/css" href="styles/Menu3.css?t=<?php echo time(); ?>" media="all">
      </head>
	  <body style="background-color:#3d3d3f;">	


<form action="accueil.php" method="POST" >
<br><br><br><br><br><br><br><br>
<table cellspacing=12 cellpadding=20 style="background-color:white;">         

<tr>
        <td>
        <h4>POUR AJOUTER UN ARTICLE</h4>
        <input type="submit" name="Ajouter" value="Ajouter">
        </td>
        <td>
        <h4>POUR MODIFIER UN ARTICLE</h4>
        <input type="submit" name="Modifier" value="Modifier">
        </td>
        <td>
        <h4>POUR SUPPRIMER UN ARTICLE</h4>
        <input type="submit" name="Supprimer" value="Supprimer">
        </td>
</tr>

</table>

</form>  

      </body>
</html>