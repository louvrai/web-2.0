
<?php 
   require "clubC.php";
    $ajout = new clubC();
   var_dump($_POST);
   $error = "";
   if(isset($_POST["id"]) && isset($_POST["nom"]) && isset($_POST["desc"]) && isset($_POST["adresse"]) && isset($_POST["domaine"])) {

     if(!empty($_POST["id"]) && !empty($_POST["nom"]) && !empty($_POST["desc"]) && !empty($_POST["adresse"]) && !empty($_POST["domaine"]) ) {
$club1 = new Club($_POST["id"],$_POST["nom"],$_POST["desc"],$_POST["adresse"],$_POST["domaine"]);

$ajout->ajouterClub($club1);

$error = "ajout avec succée ";
     }else{
         $error = "Champs manquants";
          
     }
 }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:2px solid black;
            margin:80px auto;
        }
        h3{
            color:red;
        }
    </style>
    
</head>
<body>
    <form  method="post" action="ajoutClub.php">
    <table >
         <tr >
             <td>Id*</td>
             <td><input type="text" name="id"></td>
         </tr>
         <tr >
             <td>Nom*</td>
             <td><input type="text" name="nom"></td>
         </tr>
         <tr >
             <td>Description*</td>
             <td><input type="text" name="desc"></td>
         </tr>
         <tr >
             <td> Adresse*</td>
             <td><input type="text" name="adresse"></td>
         </tr>
         <tr >
             <td>Domaine*</td>
             <td><input type="text" name="domaine"></td>
         </tr>
         <tr >
             <td></td>
             <td><input type="submit" name="submit" value="envoyer"></td>
         </tr>
         <tr >
             <td></td>
             <td><?php  echo "<h3 color:red;>$error</h3>"  ?></td>
         </tr>
        
    </table>
</form>
</body>
</html>