
<?php
include_once "../config.php";

    function getConnexionDB(){
        try {
            $connectPDO = new PDO(
                DB_TYPE.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';charset='.DB_CHARSET,
                DB_LOGIN,
                DB_PWD
            );
                // activation de l'affichage des erreurs
                $connectPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
        
        }catch(Exception $e){
            die($e->getMessage());
        
        }
    }
?>