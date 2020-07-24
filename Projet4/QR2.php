<?php
$mysqli = new mysqli("localhost", "root", "root", "projet2");
if ($mysqli->connect_errno) 
{
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
<?php
if(isset($_POST['Valider4']))
{
	header('Location: https://localhost/Projet4/index.php');
	exit;
}
?>
<?php include "menu.php" ?> <br><br><br><br>
<!DOCTYPE html>

<html>

  <head>

    <meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>

    <meta name="viewport" content="width=device-width", initial-scale=1> 

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />

    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

    <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>

    <script type="text/javascript">

    function setChartImage() {

	var query = { cht: "qr", choe: "UTF-8", 

		      chs: $("#size").val(), chld: $(":radio[name='ec']:checked").val(),

		      chl: $("#text").val() };

	var url = "http://chart.apis.google.com/chart?" + $.param(query);

	

	$("#chart").attr('src', url);

	$("#url").val(url);

	$("#link").attr('href', url);

    }
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

    <style type="text/css">

      img#chart { margin: 0; background: #fff; border: 1px solid black; }

    </style>

    <title>QR code generator</title>

  </head>

  <body>

<?php
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

			if($Categorie1 == 'Outillage2')
			{
					$Categorie1 = 3;
					$Souscategorie1 = 6;
			}

			if(($Nom1 != "") && ($Prix1 != "") && ($Position1 != "") && ($Stock1 != "") && ($Codebarre1 != "") && ($Categorie1 != "") && ($Souscategorie1 != "") && ($Image4 != ""))
			{

					$x1 = "SELECT COUNT(*) AS Nom FROM Article WHERE CodeBarre = ".$Codebarre1."" ;
					$res1 = $mysqli->query($x1);
					$res2 = mysqli_fetch_row($res1);


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

									$res = $mysqli->query("SELECT DISTINCT nom,Prix,Stock,CodeBarre,Images FROM article WHERE CodeBarre=$Codebarre1");
									$res->data_seek(0);
									$row = $res->fetch_assoc();
									//for($Parent=0;$Parent < $row = $res->fetch_assoc(); $Parent++)
            						//{
												$myJSON = json_encode($row);
												$myJSON = preg_replace('/"/',"\ ",$row);
												$JsonArray[0] = $myJSON;
												//$JsonArray[$Parent] = $myJSON;
									//}			
											$final = json_encode($JsonArray);
											$final = str_replace("\\", "" , $final); 
											echo $final;



									$fichierouvert21 = fopen ("JSON.php", 'w');  # Ici c'est w pour ecraser le contenu d'un fichier s'il n'est pas vide et écrire dedans
				
									# fwrite permet d'écrire des caractères selectionnés dans ses paramètres.
									fwrite($fichierouvert21,$final);  # On écrit dans le fichier TITRE.cfg le titre du site

									fclose ($fichierouvert21);# fclose permet de fermer le fichier précedemment ouvert

									
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
                                    header('Location: Ajouter.php'); 
					} 
							
			}
			else
			{
							//echo "Vous  n'avez pas spécifié tout les champs de l'article dans 'Ajouter un article' !";
                            echo '<script>myFunction2();</script>';
                            header('Location: Ajouter.php'); 
							echo "<br>";
			} 
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>

    <div data-role="page">

      <div data-role="header">

	<h1>QR code Generator (UTF-8)</h1>

      </div>

      <div data-role="content">

	<ul data-role="listview">

	  <li>

	    <label for="size">Size</label>

	    <select id="size" onchange="setChartImage()">

	      <!--<option value="50x50">50x50</option>

	      <option value="75x75">75x75</option>

	      <option value="100x100">100x100</option>

	      <option value="150x150">150x150</option>-->

	      <option value="300x300">300x300</option>

	    </select>

	  </li>

	  <li>

	    <fieldset data-role="controlgroup" data-type="horizontal">

	      <legend>Error correction</legend>

	      <input type="radio" name="ec" id="ec-L" value="L" checked="checked" onclick="setChartImage()" /><label for="ec-L">7%</label>

	      <input type="radio" name="ec" id="ec-M" value="M" onclick="setChartImage()" /><label for="ec-M">15%</label>

	      <input type="radio" name="ec" id="ec-Q" value="Q" onclick="setChartImage()" /><label for="ec-Q">25%</label>

	      <input type="radio" name="ec" id="ec-H" value="H" onclick="setChartImage()" /><label for="ec-H">30%</label>

	    </fieldset>

	  </li>

	  <li>

	    <label for="text">Data</label>

	    <textarea id="text" cols="20" rows="5" name="Json" > </textarea>

	  </li>

	  <li>

	    <button data-theme="b" onclick="setChartImage()">Generate</button>

	  </li>

	  <li>

	    <label for="chart">QR Code</label>

	    <div><a id="link" href="#"><img id="chart" src="" alt="QR code" /></a>

	    <input id="url" readonly="readonly" size="30" onclick="focus(); select();"/></div>

	  </li>

	  <li>

	<form action="QR2.php" method="POST" >

	<table cellspacing=12 cellpadding=20 style="background-color:white;">  
    
	<tr>
        <td colspan=3 >
        <h4>Pour le QRCode :</h4>
        <br>
        <input type="submit" value="QRCODE" name="Valider2"/>
        </td>
    </tr>  
	</table>
	</form>

	<table cellspacing=12 cellpadding=20 style="background-color:white;">  
	<tr>
        <td colspan=3 >
        <h4>Pour revenir à la page précédente :</h4>
        <br>
		<noscript> 
		<a href='https://code.jquery.com/jquery-1.7.1.min.js'></a>
     	</noscript>
		<a href="Accueil.php" ><input type="button" value="BACK" onclick="history.go(-2)"></a>
        </td>
    </tr>

	</table> 

		</li>
		<li>

		<?php

			if(isset($_POST['Valider2']))
			{
				$fichierouvert21 = fopen ("JSON.php", 'r');

				$ligne = fgets($fichierouvert21);
				echo $ligne;

				fclose ($fichierouvert21);    
			}

		?>

		</li>

	</ul>

      </div>

    </div>	

  </body>

</html>