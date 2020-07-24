
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

/*if(isset($_POST['Valider']))
{
        $Image2 = $_POST['Image'];

        $slash = '\ ';
        $Projet3 = "Projet3";
        $Images = "Images";
        $Image2 = $Projet3.$slash.$Images.$slash.$Image2;
        $Image3 = addslashes($Image2);
        $Image4 = str_replace(' ','',$Image3);

        $Nom1 = $_POST['Nom1'];
        $Prix1 = $_POST['Prix1'];
        $Position1 = $_POST['Position1'];
        $Stock1 = $_POST['Stock1'];
        $Codebarre1 = $_POST['Codebarre1'];
        $Codebarre2 = $_POST['Codebarre2'];
        $Categorie1 = $_POST['taskOption'];
        //$Souscategorie1 = $_POST['taskOption2'];
*/
        /*
        if($Categorie1 == 'Mobilier')
        {
            $Categorie1 = 1;
        }

        if($Categorie1 == 'Informatique')
        {
            $Categorie1 = 2;
        }

        if($Categorie1 == 'Outillage')
        {
            $Categorie1 = 3;
        }

        if($Souscategorie1 == 'Bureau')
        {
            $Souscategorie1 = 1;
        }

        if($Souscategorie1 == 'Lit')
        {
            $Souscategorie1 = 2;
        }

        if($Souscategorie1 == 'PC')
        {
            $Souscategorie1 = 3;
        }

        if($Souscategorie1 == 'telephonie')
        {
            $Souscategorie1 = 4;
        }

        if($Souscategorie1 == 'perceuse')
        {
            $Souscategorie1 = 5;
        }

        if($Souscategorie1 == 'betonniere')
        {
            $Souscategorie1 = 6;
        }*/

        /*if($Categorie1 == 'Mobilier')
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

        $res3 = "SELECT COUNT(*) AS Nom FROM Article WHERE CodeBarre = ".$Codebarre1."" ;
        $res1 = $mysqli->query($res3);
        $res2 = mysqli_fetch_row($res1);

        if($res2[0] == 0)
        {

        if($Codebarre2 != 0)
        {
                if($Nom1 != "")
                    {
                        $res3 = $mysqli->query("UPDATE Article SET Nom='".$Nom1."'  WHERE Codebarre=".$Codebarre2);
                    }
                if($Prix1 != "")
                    {
                        $res3 = $mysqli->query("UPDATE Article SET Prix='".$Prix1."'  WHERE Codebarre=".$Codebarre2);
                    } 
                if($Position1 != "")
                    {
                        $res3 = $mysqli->query("UPDATE Article SET Position='".$Position1."'  WHERE Codebarre=".$Codebarre2);
                    }
                if($Stock1 != "")
                    {
                        $res3 = $mysqli->query("UPDATE Article SET Stock='".$Stock1."'  WHERE Codebarre=".$Codebarre2);
                    }
                if($Codebarre1 != "")
                    {
                        $res3 = $mysqli->query("UPDATE Article SET CodeBarre='".$Codebarre1."'  WHERE Codebarre=".$Codebarre2);
                    }
                if($Image4 != "")
                    {
                        $res3 = $mysqli->query("UPDATE Article SET Images='".$Image4."'  WHERE Codebarre=".$Codebarre2);
                    }        
                if($Categorie1 != "")
                    {
                        $res3 = $mysqli->query("UPDATE Article SET ID_Categorie='".$Categorie1."'  WHERE Codebarre=".$Codebarre2);
                    }
                if($Souscategorie1 != "")
                    {
                        $res3 = $mysqli->query("UPDATE Article SET ID_Souscategorie='".$Souscategorie1."'  WHERE Codebarre=".$Codebarre2);
                    }                

            }
            else
            {
                echo "Vous  n'avez pas spécifié le codebarre de l'article  !";
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
}*/
?>

<?php include "menu.php" ?> <br>
<!DOCTYPE HTML>
<html lang="fr">
      <head>
            <meta charset="utf-8">
            <title>Modifier un article</title> 
            <link rel="stylesheet"  type="text/css" href="styles/Menu3.css" />
            <script>
            function myFunction() 
            {   
                    alert("Ce Codebarre est déjà utilisé");
            }
            document.getElementById("demo").innerHTML = myFunction;  
            function myFunction2() 
            {   
                    alert("Vous n' avez pas sélectionné de champs à modifier !");
            }
            document.getElementById("demo").innerHTML = myFunction2;
            function myFunction3() 
            {   
                    alert("Vous n' avez pas renseigné l'ancien Codebarre !");
            }
            document.getElementById("demo").innerHTML = myFunction3;    
            </script>

      </head>
	  <body style="background-color:#3d3d3f;">	

<?php
if(isset($_POST['Valider']))
{

        $Image2 = $_POST['Image'];

        $slash = '\ ';
        $Projet3 = "Projet3";
        $Images = "Images";
        $Image2 = $Projet3.$slash.$Images.$slash.$Image2;
        $Image4 = addslashes($Image2);

        $Nom1 = $_POST['Nom1'];
        $Prix1 = $_POST['Prix1'];
        $Position1 = $_POST['Position1'];
        $Stock1 = $_POST['Stock1'];
        $Codebarre1 = $_POST['Codebarre1'];
        $Codebarre2 = $_POST['Codebarre2'];
        $Categorie1 = $_POST['taskOption'];
        //$Souscategorie1 = $_POST['taskOption2'];

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

        if($Codebarre2 != "")
        {

                if(($Nom1 != "") || ($Prix1 != "") || ($Position1 != "") || ($Stock1 != "") || ($Codebarre1 != "") || ($Categorie1 != "") || ($Souscategorie1 != "") || ($Image4 != ""))
                {
                    $res3 = "SELECT COUNT(*) AS Nom FROM Article WHERE CodeBarre = ".$Codebarre1."" ;
                    $res1 = $mysqli->query($res3);
                    $res2 = mysqli_fetch_row($res1);

                        if($res2[0] == 0)
                            {
                                    if($Nom1 != "")
                                        {
                                            $res3 = $mysqli->query("UPDATE Article SET Nom='".$Nom1."'  WHERE Codebarre=".$Codebarre2);
                                        }
                                    if($Prix1 != "")
                                        {
                                            $res3 = $mysqli->query("UPDATE Article SET Prix='".$Prix1."'  WHERE Codebarre=".$Codebarre2);
                                        } 
                                    if($Position1 != "")
                                        {
                                            $res3 = $mysqli->query("UPDATE Article SET Position='".$Position1."'  WHERE Codebarre=".$Codebarre2);
                                        }
                                    if($Stock1 != "")
                                        {
                                            $res3 = $mysqli->query("UPDATE Article SET Stock='".$Stock1."'  WHERE Codebarre=".$Codebarre2);
                                        }
                                    if($Codebarre1 != "")
                                        {
                                            $res3 = $mysqli->query("UPDATE Article SET CodeBarre='".$Codebarre1."'  WHERE Codebarre=".$Codebarre2);
                                        }
                                    if($Image4 != "")
                                        {
                                            $res3 = $mysqli->query("UPDATE Article SET Images='".$Image4."'  WHERE Codebarre=".$Codebarre2);
                                        }        
                                    if($Categorie1 != "")
                                        {
                                            $res3 = $mysqli->query("UPDATE Article SET ID_Categorie='".$Categorie1."'  WHERE Codebarre=".$Codebarre2);
                                        }
                                    if($Souscategorie1 != "")
                                        {
                                            $res3 = $mysqli->query("UPDATE Article SET ID_Souscategorie='".$Souscategorie1."'  WHERE Codebarre=".$Codebarre2);
                                        }                
                            }
                        else
                            {
                                echo '<script>myFunction();</script>'; 
                                echo "<br>";
                            }
                }

                else
                {
                    echo '<script>myFunction2();</script>'; 
                    echo "<br>";
                }
        }
        else
        {
            echo '<script>myFunction3();</script>'; 
            echo "<br>";
        }
}
?>

<form action="Modifier.php" method="POST" >

<table cellspacing=12 cellpadding=20 style="background-color:white;">         

    <tr>
        <td colspan=3>
        <h4 class="Rouge">MODIFICATION</h4>
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
        <h4>Son ancien codebarre</h4>
        <input type="text" name="Codebarre2" placeholder="Ex : 101"/>   
        </td>
        <td>
        </td>
    </tr>    
    <tr>
        <td>
        <h4>Son nouveau nom</h4>
        <input type="text" name="Nom1" placeholder="Ex : Lampe"/>
        </td>
        <td>
        <h4>Sa nouvelle image</h4>
        <input type="text" name="Image" placeholder="Ex : Lampe.png"/>
        </td>
        <td>
        <h4>Son nouveau prix (en euros)</h4>
        <input type="text" name="Prix1" placeholder="Ex : 15"/>
        </td>
    </tr>    
    <tr>
        <td>
        <h4>Sa nouvelle position</h4>
        <input type="text" name="Position1" placeholder="Ex : 1"/>
        </td>
        <td>
        <h4>Son nouveau stock</h4>
        <input type="text" name="Stock1" placeholder="Ex : 20"/>
        </td>
        <td>
        <h4>Son Nouveau Codebarre</h4>
        <input type="text" name="Codebarre1" placeholder="Ex : 102"/>
        </td>
    </tr>       
    <tr>
    <td>
        <!--<h4>Sa nouvelle catégorie</h4>
            <select name="taskOption">
        <option value="Mobilier" name="Mobilier">Mobilier</option>
        <option value="Informatique" name="Informatique">Informatique</option>
        <option value="Outillage" name="Outillage">Outillage</option>
            </select>!-->
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
        <!--<h4>Sa nouvelle sous-catégorie</h4>
            <select name="taskOption2">
        <option value="Bureau" >Bureau</option>
        <option value="Lit" >Lit</option>
        <option value="PC" >PC</option>
        <option value="telephonie" >telephonie</option>
        <option value="perceuse" >perceuse</option>
        <option value="betonniere" >betonniere</option>
            </select>!-->
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
<table style="background-color:white;">
    <tr>
        <td class="Gras">
        <!--<h4 class="Centre">Comme Codebarre nous avons :</h4>!-->
<?php
if(isset($_POST['Valider3']))
{
    //$Nom = $_POST['Nom'];
    //$Nom2 = 'Nom';
    //$Codebarre2 = 'Codebarre';
    echo '<h3 class="Centre">Comme Codebarre nous avons :</h4>';
    $x2 = " SELECT Nom,Codebarre FROM article";
    $res2 = $mysqli->query($x2);
    $col[2] = 'wesh';  
    while ($col = mysqli_fetch_row($res2))
         {
             echo " ".$col[0]." et son codebarres ".$col[1]." ";
             echo '<br>';
         }      
}

?>
        </td>
    </tr>
</table> 

<!--<table>
    <tr>
        <td class="Gras">
        <h2 class="Centre">Comme article nous avons :</h2>!-->
<?php
/*if(isset($_POST['Valider2']))
{
    $Nom = $_POST['Nom2'];
    $Nom2 = 'Nom';
    $Codebarre2 = 'Codebarre';

    echo '<h2 class="Centre">Comme article nous avons :</h2>';
    $x2 = " SELECT $Nom2, $Codebarre2 FROM article WHERE Nom='".$Nom."'";
    $res2 = $mysqli->query($x2);
    $col[2] = 'wesh';  
    while ($col = mysqli_fetch_row($res2))
         {
             echo "".$col[0]." et son codebarre ".$col[1];
             echo '<br>';
         }      
}
*/
?><!--
        </td>
    </tr>
</table>!--> 

</form>  

<!--<table>
    <tr>
        <td class="Gras">
        <h4 class="Centre">Comme Codebarre nous avons :</h4>!-->
<?php
/*
if(isset($_POST['Valider3']))
{
    //$Nom = $_POST['Nom'];
    //$Nom2 = 'Nom';
    //$Codebarre2 = 'Codebarre';
    echo '<h4 class="Centre">Comme Codebarre nous avons :</h4>';
    $x2 = " SELECT Nom,Codebarre FROM article";
    $res2 = $mysqli->query($x2);
    $col[2] = 'wesh';  
    while ($col = mysqli_fetch_row($res2))
         {
             echo " ".$col[0]." et son codebarres ".$col[1]." ";
             echo '<br>';
         }      
}
*/
?><!--
        </td>
    </tr>
</table> !-->

      </body>
</html>

<!--<tr>
        <td>
        <h4>Son nom</h4>
        <input type="text" name="Nom2"/>
        <input type="submit" value="Valider" name="Valider2"/> 
        </td>
        <td> 
        <h4>Liste des articles et codebarres</h4>  
        <br>
        <input type="submit" value="ICI" name="Valider3"/>
        </td>
        <td> 
        </td>
    </tr>!-->