<?php

function getAllUsers() {

$con = getConnexionDB();
$requete ="SELECT * from contact";
$rows = $con->query($requete);
return $rows;

}    
  




?>