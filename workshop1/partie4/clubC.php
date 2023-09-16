<?php  
        require "club.php";
        require "config.php";

        class clubC{
            public function afficherClub(){
                $conx=config::getConnexion();
                     try{
                        $req = 'SELECT * FROM club';
                        $query = $conx->prepare($req);
                        $query->execute();
                        $club = $query->fetchAll(PDO::FETCH_ASSOC);
                      }catch(PDOException $e){
                         echo $e->getMessage();
                      }
                     return $club;
                
                   }
                
                
             public function ajouterClub($Club){
                $conx=config::getConnexion();
                
                   try{
                         $req = 'INSERT INTO club(id, nom, description, adresse, domaine) VALUE 
                         (:id, :nom, :desc, :adresse,:domaine)';
                         $query = $conx->prepare($req);
                         $query->execute(array(
                            'id' => $Club->GetId(),
                            'nom' => $Club->GetNom(),
                            'desc' => $Club->GetDesc(),
                            'adresse' => $Club->GetAdresse(),
                            'domaine' => $Club->GetDomaine()
                         ));
                         header("location: afficherClub.php");
                         echo 'ajout';
                       
                        }catch(PDOException $e){
          
                           echo $e->getMessage();
                        }
                         
                      }
        }