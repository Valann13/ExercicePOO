<?php

require_once("navigation.php ");
?>

<h1> Exercice POO</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 1</h2>

<div class="exercice1">
<p>Créez une classe "Circle" avec une propriété privée "radius" et les méthodes suivantes :<br>
Une méthode pour définir le rayon du cercle.<br>
Une méthode pour calculer l'aire du cercle.<br>
Une méthode pour calculer le périmètre du cercle.<br>
</p>

<form  method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                <label for="exampleInputNumber" class="form-label">Entrez le rayon</label>
                <input type="number" name= "number" class="form-control" id="InputNumber" >
                <br>
                <button type="submit" name = "soumettre" class="btn btn-dark ">Soumettre</button>
</form>

<h3>Résultat:</h3>
<hr>





<?php
/* condition pour verifier si la variable exist ISSET ,$_POST fait reference a la method puis on appele le "name" de l'imput */
if( isset($_POST['number'] )){
      $reponse = $_POST ['number'];
}
    
if( isset($_POST['soumettre'] )){
      $soumettre = $_POST ['soumettre'];
}

//création de la classe
class Circle{

//proprieté de la classe
    private $raduis;
   

//setter de la classe
public function setRaduis($raduis){
    $this->raduis= $raduis;
}

//getter de la classe
public function getRaduis(){
    return $this->raduis;
}



//affichage des infos
public function displayInfo(){
        echo  "<br> le rayon est de". " ".$this->raduis .".";
       
       
}
// fonction qui calcul l'aire avec appel du raduis
public function calculAire(){

    $aire =  $this->raduis * $this->raduis * pi();
    echo "<br> l'aire est de". " ". $aire .".";
   }
// fonction qui calcul le perimetre avec appel du raduis
public function calculerPerimetre(){

    $diametre = $this->raduis + $this->raduis;
    $perimetre = $diametre * pi();
    echo "<br> le périmetre est de". " ". $perimetre .".";
}
}
/* condition pour verifier si la variable exist ISSET , fait reference a la variable pour  le resultat seulement au click*/
if(isset($soumettre)){

//Instanciation d'un objet 
$circle = new Circle();


//Utilisation des methodes pour definir les proprieté de l'objet
$circle->setRaduis($reponse);


//utilsation de la methode d'affichage
$circle->displayInfo();

$circle->calculAire();

$circle->calculerPerimetre();

}

?>

