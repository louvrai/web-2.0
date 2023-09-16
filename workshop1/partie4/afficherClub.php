<?php  
          require "clubC.php";
          $club = new clubC();
          $liste = $club->afficherClub();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
      <tr>
      
         <th>Id</th>
         <th>Nom</th>
         <th>Description</th>
         <th>Adresse</th>
         <th>Domaine</th>

      </tr>
      <?php foreach($liste as $list) {?>
      <tr>
        <td><?= $list["id"] ?></td>
        <td><?= $list["nom"] ?></td>
        <td><?= $list["description"] ?></td>
        <td><?= $list["adresse"] ?></td>
        <td><?= $list["domaine"] ?></td>


      </tr>
      <?php }?>



 </table>
</body>
</html>