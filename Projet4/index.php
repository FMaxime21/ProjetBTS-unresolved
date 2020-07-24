<?php
if(isset($_POST['Valider']))
{
$User1 = $_POST['User'];
$User2 = 'admin';
$Password1= $_POST["Password"];
$Password2 = 'admin';
    if($User1 === $User2)
    {
        if($Password1 === $Password2)
        {
        header('Location: accueil.php');
        exit();
        }
        else
    {
        header('Location: index.php');
        exit();
    }
    }
    else
    {
        header('Location: index.php');
        exit();
    }
}
?>
<!DOCTYPE HTML>
<html lang="fr">
      <head>
            <meta charset="utf-8">
            <title>Administration</title> 
			<link rel="stylesheet"  type="text/css" href="styles/Menu3.css" />
      </head>
	  <body style="background-color:#3d3d3f;">	
<?php //include "menu.php" ?> <br>

<form action="index.php" method="POST" >

<br><br><br><br><br><br>


<table cellspacing=20 cellpadding=20 width=500 style="background-color:white;">

    <th><h1 class="Rouge">CONNEXION</h1></th>
    <tr>
    <td>
            <div class="CENTRE">
                <p class="Gras">User</p>
                <input type="text" id="User" name="User" required/>
            </div><br>
    </td>
    </tr>        
    <tr>
    <td>
            <div class="CENTRE">
                <p class="Gras"> Password</p>
                <input type="Password" id="Password" name="Password" required/>
            </div><br><br>    
    </td>
    </tr>
    <tr>
    <td>
            <div class="CENTRE">
            <input type="submit" value="Valider" name="Valider"/>
            </div>
    </td>
    </tr>
</table>

</form>    
      </body>
</html>