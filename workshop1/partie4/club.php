<?php 
     class Club{
        private string $id;
        private string $nom;
        private string $desc;
        private string $domaine;
        private string $adresse;

        public function __construct(string $id ,string $nom, string $desc ,string $adresse , string $domaine){
            $this->id = $id ;
            $this->nom = $nom;
            $this->desc = $desc;
            $this->adresse = $adresse;
            $this->domaine = $domaine;

        }

        public function GetId(){
            return $this->id;
        }
        public function  GetNom(){
            return $this->nom;
        }
        public function  GetDesc(){
            return $this->desc;
        }
        public function  GetAdresse(){
            return $this->adresse;
        }
        public function  GetDomaine(){
            return $this->domaine;
        } 
        public function afficherClub(){
            echo"<table border='1'>
            <tr>
            
               <th>Id</th>
               <th>Nom</th>
               <th>Description</th>
               <th>Adresse</th>
               <th>Domaine</th>
      
            </tr>
            <tr>
              <td>  $this->id</td>
              <td>  $this->nom </td>
              <td>  $this->desc </td>
              <td>  $this->adresse </td>
              <td>  $this->domaine </td>
      
      
            </tr>
      
      
      
      
       </table>";
        }
        
     }

























?>