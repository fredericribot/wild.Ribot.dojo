<?php
include ("header.php");
echo "</br>";
echo $Porteur = " Frodon "."</br>";
echo $createur= " Sauron "."</br>";
echo $nbMember = 9 ;
echo "</br>";
echo $ringFinger = 'true'. '</br>';
echo $porteur = "Quentin". '</br>';
echo $nbMember = $nbMember +1 ;
echo $middleEarth = "" ;
echo "</br>";

echo $nmPorteur= "L'anneau est porté par"." ". $porteur;
echo  "et "."".strtoupper ($createur = "Sauron")." ". "le recherche "."</br>";

include ("footer.php");
echo "</br>";
$wizard = 'Gandalf';
include ("wizard.php");
echo "</br>";
require ("wizard.php");
?>