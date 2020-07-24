
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
/*
if(isset($_POST['Valider']))
{
        $Image2 = $_POST['Image'];
        $slash = '/';
        $Projet3 = "Projet3";
        $Images = "Images";
        $Image2 = $Projet3.$slash.$Images.$slash.$Image2;
        $Image4 = addslashes($Image2);
        //$Image4 = str_replace(' ','',$Image3);
        //$Image2 = "Projet3\Images\ ";
        //$Image3 = addslashes($Image2);
        $Nom1 = $_POST['Nom1'];
        $Prix1 = $_POST['Prix1'];
        $Position1 = $_POST['Position1'];
        $Stock1 = $_POST['Stock1'];
        $Codebarre1 = $_POST['Codebarre1'];
        $Categorie1 = $_POST['taskOption'];
        //$Souscategorie1 = $_POST['taskOption2'];
        //@$Ajouter= $_POST['Ajouter'];

        if($Categorie1 == 'Mobilier')
        {
            $Categorie1 = 1;
            $Souscategorie1 = 1;
        }

        if($Categorie1 == 'Mobilier2')
        {
            $Categorie1 = 1;
            $Souscategorie1 = 2;
        }

        if($Categorie1 == 'Informatique')
        {
            $Categorie1 = 2;
            $Souscategorie1 = 3;
        }

        if($Categorie1 == 'Informatique2')
        {
            $Categorie1 = 2;
            $Souscategorie1 = 4;
        }

        if($Categorie1 == 'Outillage')
        {
            $Categorie1 = 3;
            $Souscategorie1 = 5;
        }

        if($Categorie1 == 'Outillage')
        {
            $Categorie1 = 3;
            $Souscategorie1 = 6;
        }

        $x1 = "SELECT COUNT(*) AS Nom FROM Article WHERE CodeBarre = ".$Codebarre1."" ;
        $res1 = $mysqli->query($x1);
        $res2 = mysqli_fetch_row($res1);

        if($res2[0] == 0)
        {
            echo '<script>myFunction();</script>'; 
        
            if(($Nom1 != "") && ($Prix1 != "") && ($Position1 != "") && ($Stock1 != "") && ($Codebarre1 != "") && ($Categorie1 != "") && ($Souscategorie1 != "") && ($Image4 != ""))
            {
                $x1 = "INSERT  INTO Article VALUES (NULL, '".$Nom1."','".$Prix1."','".$Image4. "','".$Position1."','".$Stock1."','".$Codebarre1."','".$Categorie1."','".$Souscategorie1. "')";
                //echo $x1;
                echo $Image4;
                $res1 = $mysqli->query($x1);         
            }
            else
            {
                echo "Vous  n'avez pas spécifié tout les champs de l'article dans 'Ajouter un article' !";
                echo "<br>";
            }  
            */
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
        /*
}
else
{
    //echo '<script>myFunction();</script>'; 
}
}*/
?>
<?php
if(isset($_POST['Valider4']))
{
    ?>
    <noscript> <a href='https://code.jquery.com/jquery-1.7.1.min.js'></a>
     </noscript>
    <?php
    //header('Location: https://localhost/Projet4/index.php'); href="https://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css"
	//exit;
}
?>

<?php include "menu.php" ?> <br>
<!DOCTYPE HTML>
<html lang="fr">
      <head>
            <meta charset="utf-8">
            <title>Ajouter un article</title> 
			<link rel="stylesheet"  type="text/css" href="styles/Menu3.css" echo time() media="all"/>
            <script>
            function myFunction() 
            {   
                    alert("Ce Codebarre est déjà utilisé");
            }
            document.getElementById("demo").innerHTML = myFunction;  
            function myFunction2() 
            {   
                    alert("Vous n' avez pas renseigné tous les champs !");
            }
            document.getElementById("demo").innerHTML = myFunction;    
            </script>

      </head>
      <body style="background-color:#3d3d3f;" > <!--FCF8F7!-->

<?php
//ini_set('display_errors', 'off');

$mysqli = new mysqli("localhost", "root", "root", "projet2");
if ($mysqli->connect_errno) 
{
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if(isset($_POST['Valider']))
{
        $Codebarre1 = $_POST['Codebarre1'];
        $x1 = "SELECT COUNT(*) AS Nom FROM Article WHERE CodeBarre = ".$Codebarre1."";
        //$res1 = $mysqli->query($x1);
        //$res2 = mysqli_fetch_row($res1);
        $resultat =  $mysqli->query($x1) ;
        //$row = mysqli_fetch_array($resultat, MYSQLI_ASSOC) ;  

        $Image2 = $_POST['Image'];
        $slash = '/';
        $Projet3 = "Projet3";
        $Images = "Images";
        $Image2 = $Projet3.$slash.$Images.$slash.$Image2;
        $Image4 = addslashes($Image2);
        //$Image4 = str_replace(' ','',$Image3);
        //$Image2 = "Projet3\Images\ ";
        //$Image3 = addslashes($Image2);
        $Nom1 = $_POST['Nom1'];
        $Prix1 = $_POST['Prix1'];
        $Position1 = $_POST['Position1'];
        $Stock1 = $_POST['Stock1'];
        $Codebarre1 = $_POST['Codebarre1'];
        $Categorie1 = $_POST['taskOption'];
        //$Souscategorie1 = $_POST['taskOption2'];
        //@$Ajouter= $_POST['Ajouter'];

        if($Categorie1 == 'Mobilier')
        {
            $Categorie1 = 1;
            $Souscategorie1 = 1;
        }

        if($Categorie1 == 'Mobilier2')
        {
            $Categorie1 = 1;
            $Souscategorie1 = 2;
        }

        if($Categorie1 == 'Informatique')
        {
            $Categorie1 = 2;
            $Souscategorie1 = 3;
        }

        if($Categorie1 == 'Informatique2')
        {
            $Categorie1 = 2;
            $Souscategorie1 = 4;
        }

        if($Categorie1 == 'Outillage')
        {
            $Categorie1 = 3;
            $Souscategorie1 = 5;
        }

        if($Categorie1 == 'Outillage')
        {
            $Categorie1 = 3;
            $Souscategorie1 = 6;
        }

        if(($Nom1 != "") && ($Prix1 != "") && ($Position1 != "") && ($Stock1 != "") && ($Codebarre1 != "") && ($Categorie1 != "") && ($Souscategorie1 != "") && ($Image4 != ""))
        {

            $x1 = "SELECT COUNT(*) AS Nom FROM Article WHERE CodeBarre = ".$Codebarre1."" ;
            $res1 = $mysqli->query($x1);
            $res2 = mysqli_fetch_row($res1);

            $res = $mysqli->query("SELECT DISTINCT nom,Prix,Stock,CodeBarre,Images FROM article WHERE ID_Categorie=$Categorie1 AND ID_Souscategorie=$Souscategorie1");
            $res->data_seek(0);
            $row = $res->fetch_assoc();
                        $myJSON = json_encode($row);
                        $myJSON = preg_replace('/"/',"\ ",$row);
                        $JsonArray[0] = $myJSON;
                    $final = json_encode($JsonArray);
                    $final = str_replace("\\", "" , $final); 
                    echo $final;

            $x3 = "SELECT COUNT(*) AS Nom FROM Article WHERE Numero = 1" ;
            $res9 = $mysqli->query($x3);
            $res10 = mysqli_fetch_row($res9);

            $x4 = "SELECT Numero FROM article ORDER BY Numero" ;
            $res11 = $mysqli->query($x4);

            $x2 = "SELECT COUNT(*) FROM article";
            $res6 = $mysqli->query($x2);
            $res7 = mysqli_fetch_row($res6);
            $res70 = $res7[0];

            echo $res70;
            //echo $res10;
            $i = 0;
            $res8 = 0;
            $sol = array();
            $y = 1;
            //$ah$i = 0;

            if($res2[0] == 0)
            {
                $res2 = $mysqli->query($x2);
                while ($col = mysqli_fetch_row($res11))
                    {
                        //echo "".$col[0]."";
                        $sol[$i] = $col[0];
                        //$ah[$i] = $sol[$i];
                        $i++;
                        //echo '<br>';
                    } 

                    echo 'bonjour';
                    $y2 = $y -1;
                    $res71 = $res70 +1;

                        //$res->data_seek(0);
                        //$row = $res->fetch_assoc();
                            //$myJSON = json_encode($row);
                            //$myJSON = preg_replace('/"/',"\ ",$row);
                            //$JsonArray[0] = $myJSON;
                        //$final = json_encode($JsonArray);
                        //$final = str_replace("\\", "" , $final); 
                        //echo $final;

                    for($y = 1;$y <= $res71; $y++)
                    {
                        $y2 = $y -1;
                        /*echo '<br>'; 
                        echo "Au debut ".$y;
                        echo '<br>';
                        echo "A la fin ".$sol[$y];
                        echo '<br>';*/
                        //while($sol[$y2] == $y)
                        //{
                            //echo "Ils sont pas pareils";
                        //}
                        //if($sol[$y2] != $y)
                        //{
                            //$ah = $sol[$y2];
                            //echo "Nous avons ".$sol[$y].""; 
                            //echo '<br>';
                            //echo "Y = ".$y;
                        //}

                         if($sol[$y2] != $y)
                        {
                            //echo $ah;
                            //$ah++;
                            //echo "AH ".$y;
                            $x1 = "INSERT  INTO Article VALUES (".$y.", '".$Nom1."','".$Prix1."','".$Image4. "','".$Position1."','".$Stock1."','".$Codebarre1."','".$Categorie1."','".$Souscategorie1. "')";
                            //echo $x1;
                            //echo $Image4;
                            $res1 = $mysqli->query($x1);
                        }
                        //echo $sol[$y];
                        //$x30 = "SELECT COUNT(*) AS Nom FROM Article WHERE Numero = ".$ah."" ;
                        //$res30 = $mysqli->query($x30);
                        //$res31 = mysqli_fetch_row($res30);

                        //if($res31[0] == 0)
                        //{
                            //$x1 = "INSERT  INTO Article VALUES (".$ah.", '".$Nom1."','".$Prix1."','".$Image4. "','".$Position1."','".$Stock1."','".$Codebarre1."','".$Categorie1."','".$Souscategorie1. "')";
                            //echo $x1;
                            //echo $Image4;
                            //$res1 = $mysqli->query($x1);
                        //}
                        //else
                        //{
                            //echo '<br>';
                            //echo 'le numéro est déja pris';
                        //}
                    }
                    
                    //$x0 = "SELECT COUNT(*) FROM article";
                    //$res3 = $mysqli->query($x0);
                    //$res4 = mysqli_fetch_row($res3);
                    //$res5 = $res4[0];
                    //$res5++;
                //if(($Nom1 != "") && ($Prix1 != "") && ($Position1 != "") && ($Stock1 != "") && ($Codebarre1 != "") && ($Categorie1 != "") && ($Souscategorie1 != "") && ($Image4 != ""))
                //{
                    //$x1 = "INSERT  INTO Article VALUES (".$res8.", '".$Nom1."','".$Prix1."','".$Image4. "','".$Position1."','".$Stock1."','".$Codebarre1."','".$Categorie1."','".$Souscategorie1. "')";
                    //echo $x1;
                    //echo $Image4;
                    //$res1 = $mysqli->query($x1);         
            }
                /*else
                {
                    //echo "Vous  n'avez pas spécifié tout les champs de l'article dans 'Ajouter un article' !";
                    echo '<script>myFunction2();</script>';
                    echo "<br>";
                }*/ 
            else
            {
                    echo '<script>myFunction();</script>'; 
            } 
                
        }
        else
        {
                //echo "Vous  n'avez pas spécifié tout les champs de l'article dans 'Ajouter un article' !";
                echo '<script>myFunction2();</script>';
                echo "<br>";
        } 
}
?>

<form action="QR2.php" method="POST" >

<table cellspacing=12 cellpadding=20 style="background-color:white;">  

    <tr>
        <td colspan=3>
        <h4 class="Rouge">AJOUT</h4>
        </td>
    </tr>
    <tr>
        <td>
        <h4>Son nom</h4>
        <input type="text" name="Nom1" placeholder="Ex : Lampe"/>
        </td>
        <td>
        <h4>L'image de l'article </h4>
        <input type="text" name="Image" placeholder="Ex : Lampe.png"/>
        </td>
        <td>
        <h4>Son prix (en euros)</h4>
        <input type="text" name="Prix1" placeholder="Ex : 15"/>
        </td>
    </tr>    
    <tr>
        <td>
        <h4>Sa position</h4>
        <input type="text" name="Position1" placeholder="Ex : 1"/>
        </td>
        <td>
        <h4>Le stock disponible</h4>
        <input type="text" name="Stock1" placeholder="Ex : 10"/>
        </td>
        <td>
        <h4>Son Codebarre</h4>
        <input type="text" name="Codebarre1" placeholder="Ex : 101"/>
        </td>
    </tr>       
    <tr>
        <td>
        </td>
        <td>
        <h4>Sa catégorie -> Sa sous-catégorie</h4>
            <select name="taskOption">
        <option value="Mobilier" name="Mobilier">Mobilier -> Bureau</option>
        <option value="Mobilier2" name="Mobilier2">Mobilier -> Lit</option>
        <option value="Informatique" name="Informatique">Informatique -> PC</option>
        <option value="Informatique2" name="Informatique2">Informatique -> téléphonie</option>
        <option value="Outillage" name="Outillage">Outillage -> perceuse</option>
        <option value="Outillage2" name="Outillage2">Outillage -> betonnière</option>
            </select>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
        <input type="submit" value="Valider" name="Valider"/>
        </td>
        <td>
        </td>
    </tr>
</form>

<form action="Ajouter.php" method="POST" >
</table>
<table cellspacing=12 cellpadding=20 style="background-color:white;">  
    <tr>
        <td colspan=3>
        <h4>Pour connaitre les Codebarres déjà utilisés cliquez ici :</h4>
        <br>
        <input type="submit" value="Codebarres" name="Valider3"/>
        </td>
    </tr>  

</table> 

</form>

<table>
    <tr>
        <td class="Gras">
        <!--<h4 class="Centre">Comme Codebarre nous avons :</h4>!-->
<?php
if(isset($_POST['Valider3']))
{
    //$Nom = $_POST['Nom'];
    //$Nom2 = 'Nom';
    //$Codebarre2 = 'Codebarre';
    echo '<h4 class="Centre">Comme Codebarre nous avons :</h4>';
    $x2 = " SELECT Codebarre FROM article";
    $res2 = $mysqli->query($x2);
    $col[2] = 'wesh';  
    while ($col = mysqli_fetch_row($res2))
         {
             echo "".$col[0]."";
             echo '<br>';
         }      
}

?>
        </td>
    </tr>
</table> 

      </body>
</html>