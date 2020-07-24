
<?php
$mysqli = new mysqli("localhost", "root", "root", "projet2");
if ($mysqli->connect_errno) 
{
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/*
$req = mysql_query("select * FROM article WHERE id = '".$_SESSION["id"]."'") or die(mysql_error());
 
$data = mysql_fetch_array($req);
 
$user_image = $data['Image'];
 
$repertoire = "/Images/";
 
 
<img src="<?php echo $repertoire.$user_image; ?>" alt="" />*/

if(isset($_POST['Valider']))
{
        $Codebarre = $_POST['Codebarre1'];
        @$Supprimer = $_POST['Supprimer'];

            if($Codebarre != "")
            {
                $x2 = "DELETE  FROM article WHERE Codebarre='".$Codebarre."'";
                //echo $x2;
                $res2 = $mysqli->query($x2);         
            }
            else
            {
                echo "Vous  n'avez pas spécifié le Codebarre de l'article dans 'Supprimer un article' !";
                echo "<br>";
            }
    


        /*

        if(($Nom1 != "") && ($Prix1 != "") && ($Position1 != "") && ($Stock1 != "") && ($Codebarre1 != "") && ($Categorie1 != "") && ($Souscategorie1 != ""))
        {
            $x1 = "INSERT  INTO Article VALUES (NULL, '".$Nom1."','".$Prix1."','SRC','".$Position1."','".$Stock1."','".$Codebarre1."','".$Categorie1."','".$Souscategorie1. "')";
            echo $x1;
            $res1 = $mysqli->query($x1);         
        }
        else
        {
            echo "Vous  n'avez pas spécifié tout les champs de l'article dans 'Ajouter un article' !";
            echo "<br>";
        }

        if($Nom2 != "")
        {
            $x2 = "DELETE  FROM article WHERE Nom='".$Nom2."'";
            echo $x2;
            $res2 = $mysqli->query($x2);         
        }
        else
        {
            echo "Vous  n'avez pas spécifié le nom de l'article dans 'Supprimer un article' !";
            echo "<br>";
        }

        if($ID3 != "")
        {
            if($Nom3 != "")
                {
                    $res3 = $mysqli->query("UPDATE Article SET Nom='".$Nom3."'  WHERE Numero=".$ID3);
                }
            if($Prix3 != "")
                {
                    $res3 = $mysqli->query("UPDATE Article SET Prix='".$Prix3."'  WHERE Numero=".$ID3);
                } 
            if($Position3 != "")
                {
                    $res3 = $mysqli->query("UPDATE Article SET Position='".$Position3."'  WHERE Numero=".$ID3);
                }
            if($Stock3 != "")
                {
                    $res3 = $mysqli->query("UPDATE Article SET Stock='".$Stock3."'  WHERE Numero=".$ID3);
                }
            if($Codebarre3 != "")
                {
                    $res3 = $mysqli->query("UPDATE Article SET CodeBarre='".$Codebarre3."'  WHERE Numero=".$ID3);
                }
            if($Categorie3 != "")
                {
                    $res3 = $mysqli->query("UPDATE Article SET ID_Categorie='".$Categorie3."'  WHERE Numero=".$ID3);
                }
            if($Souscategorie3 != "")
                {
                    $res3 = $mysqli->query("UPDATE Article SET ID_Souscategorie='".$Souscategorie3."'  WHERE Numero=".$ID3);
                }
            if($IDv3 != "")
                {
                    $res3 = $mysqli->query("UPDATE Article SET Numero='".$IDv3."'  WHERE Numero=".$ID3);
                }                 

        }
        else
        {
            echo "Vous  n'avez pas spécifié le numéro de l'article dans 'Modifier un article' !";
            echo "<br>";
        }
        //$Nom2 = "toto";
        //$ID = 1;
        //$res = $mysqli->query("UPDATE article SET Nom=$Nom2 WHERE ID=$ID"); */
}

?>


<!DOCTYPE HTML>
<html lang="fr">
      <head>
            <meta charset="utf-8">
            <title>Supprimer un article</title> 
			<link rel="stylesheet"  type="text/css" href="styles/Menu3.css" />
      </head>
	  <body style="background-color:#3d3d3f;">	
<?php include "menu.php" ?> <br>

<form action="Supprimer.php" method="POST" >

<table cellspacing=12 cellpadding=20 style="background-color:white;">         

    <tr>
        <td colspan=3>
        <h4 class="Rouge">SUPPRESSION</h4>
        </td>
    </tr>        
    <tr>
        <td>
        <h4>Son Codebarre</h4>
        <input type="text" name="Codebarre1" placeholder="Ex : 101"/>
        </td>
    </tr>       

    <tr>
        <td colspan=3>
        <input type="submit" value="Valider" name="Valider"/>
        </td>
    </tr>

    <tr>
        <td colspan=3>
        <h4>Ecrivez le nom de l'article ici</h4>
        </td>
    </tr>

    <tr>
        <td colspan=3>
        <input type="text" name="Nom" placeholder="Ex : Lampe"/>
        </td>
    </tr>  

    <tr>
        <td colspan=3>
        <input type="submit" value="Article" name="Valider2"/>
        </td>
    </tr>  

</table> 

</form>  
<table>
    <tr>
        <td class="Gras">
        <!--<h4 class="Centre">Comme article nous avons :</h4>!-->
<?php
if(isset($_POST['Valider2']))
{
    $Nom = $_POST['Nom'];
    $Nom2 = 'Nom';
    $Codebarre2 = 'Codebarre';

    echo '<h4 class="Centre">Comme article nous avons :</h4>';
    $x2 = " SELECT $Nom2, $Codebarre2 FROM article WHERE Nom='".$Nom."'";
    $res2 = $mysqli->query($x2);
    $col[2] = 'wesh';  
    while ($col = mysqli_fetch_row($res2))
         {
             echo "".$col[0]." et son codebarre ".$col[1];
             echo '<br>';
         }      
}

?>
        </td>
    </tr>
</table>    

      </body>
</html>