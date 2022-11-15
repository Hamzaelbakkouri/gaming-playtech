<?php
  
  $con = mysqli_connect("localhost","root","","playtech");
  if(!$con){
     echo "Vous n'êtes pas connecté à la base de donnée";
  }
?>