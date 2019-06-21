<?php 

function homepage(){
    $statement =  get_inhoud('homepage');
    include 'homepage.php';
  }

  function alle_plantjes(){
    $inhoud = get_inhoud('over-ons');
    include 'over-ons.php';
  }

?>