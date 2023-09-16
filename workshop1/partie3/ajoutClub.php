<?php     
      require "../partie2/club.php";
              var_dump($_POST);
              $error = "";
              if(isset($_POST["id"]) && isset($_POST["nom"]) && isset($_POST["desc"]) && isset($_POST["adresse"]) && isset($_POST["domaine"])) {
        
                if(!empty($_POST["id"]) && !empty($_POST["nom"]) && !empty($_POST["desc"]) && !empty($_POST["adresse"]) && !empty($_POST["domaine"]) ) {
      $club1 = new Club("1","Club robotique","Test","Esprit ghazela","Electromecanique");
      $club1->afficherClub();
                }else{
                    $error = "Champs manquants";
                    echo "<h3>$error </h3>"  ; 
                }
            }