<?php

require_once("navigation.php");
require_once("person.php");


$personnage = new Person("Legolas", 1200);

echo "Nom :" ." ".$personnage ->getName();
echo"<br>";
echo "Age :"." ".$personnage ->getAge()." "."ans";








?>