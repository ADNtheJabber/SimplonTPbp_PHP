<?php 

    Class DbAccess {

        public function getConnex(){

            $host = 'localhost';
            $dbname = 'banquepopulaire';
            $user = 'root';
            $pwd = '';
    
            $dsn = "mysql:host=$host;dbname=$dbname";
    
            try {
                return new PDO($dsn, $user, $pwd);
            } catch (PDOException $e) {
                die ('Erreur : '.$e->getMessage());
            }
            return $connex;
       
       }
    }
  
?>