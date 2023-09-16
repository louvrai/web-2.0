<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
           
            margin:80px auto;
        }
    </style>
    
</head>
<body>
    <!-- <?php  // var_dump($_GET) ?> -->


    <?php 
      $error = "";
    
    if(isset($_GET["id"]) && isset($_GET["nom"]) && isset($_GET["desc"]) && isset($_GET["adresse"]) && isset($_GET["domaine"])) {
        
        if(!empty($_GET["id"]) && !empty($_GET["nom"]) && !empty($_GET["desc"]) && !empty($_GET["adresse"]) && !empty($_GET["domaine"]) ) {
        
        
        ?>
 <table border="1">
      <tr>
      
         <th>Id</th>
         <th>Nom</th>
         <th>Description</th>
         <th>Adresse</th>
         <th>Domaine</th>

      </tr>
      <tr>
        <td><?php echo $_GET["id"] ?></td>
        <td><?php echo $_GET["nom"] ?></td>
        <td><?php echo $_GET["desc"] ?></td>
        <td><?php echo $_GET["adresse"] ?></td>
        <td><?php echo $_GET["domaine"] ?></td>


      </tr>




 </table>
   <?php }else  {
        $error = "Champs manquants";
        echo "<h3>$error </h3>"  ; 
   } } ?>

</body>
</html>



