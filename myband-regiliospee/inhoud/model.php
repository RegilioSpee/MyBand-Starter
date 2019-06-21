<?php 

function get_latest_plants() {
    $pdo = dbConnect();
    $query     = 'SELECT * FROM `inhoud` LIMIT 1';
    $statement = $pdo->query( $query );
    
    return $statement;
 
 }

 function get_all_plants() {
    $pdo = dbConnect();
    $query     = 'SELECT * FROM `inhoud` LIMIT 3';
    $statement = $pdo->query( $query );
  
    return $statement;
    
 }

 function get_inhoud($code) {
   $pdo = dbConnect();
   $query     = 'SELECT * FROM `inhoud` WHERE code = "'. $code .'"';
   $statement = $pdo->query( $query );
  
   
   return $statement;

}

?>