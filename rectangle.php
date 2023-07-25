<?php

require_once("navigation.php ");
?>

<h1> Exercice POO</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 3</h2>

<div class="exercice1">
<p>
Créez une classe "Rectangle" avec les propriétés privées "width" et "height", ainsi que les méthodes suivantes :<br>
Une méthode pour définir la largeur et la hauteur du rectangle.<br>
Une méthode pour calculer la surface du rectangle.<br>
Une méthode pour calculer le périmètre du rectangle.<br>

</p>


<h3>Résultat:</h3>
<hr>


<form  method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                <label for="exampleInputNumber" class="form-label">Entrez la largeur</label>
                <input type="number" name= "largeur" class="form-control" id="InputNumber" >
                <label for="exampleInputNumber" class="form-label">Entrez la hauteur</label>
                <input type="number" name= "hauteur" class="form-control" id="InputNumber" >
                
                <br>
                <button type="submit" name = "soumettre" class="btn btn-dark ">Soumettre</button>
</form>



<?php
/* condition pour verifier si la variable exist ISSET ,$_POST fait reference a la method puis on appele le "name" de l'imput */
if( isset($_POST['largeur'] )){
    $longueur = $_POST ['largeur'];
}
  
if( isset($_POST['hauteur'] )){
    $hauteur = $_POST ['hauteur'];
}

if( isset($_POST['soumettre'] )){
    $soumettre = $_POST ['soumettre'];
}
//création de la classe
class Rectangle{

    private $width;
    private $height;


//construct : Methode pour definir une propriete

public function __construct($width, $height){

    $this->width= $width;
    $this->height= $height;
}

//Getter methode pour obtenir une proprieté
public function getWidth(){
    return $this->width;
}

public function getHeight(){
    return $this->height;
}

//methode pour afficher des informations
public function displayInfo(){
    echo  "<br> la largeur est de". " ".$this->width .".";
    echo  "<br> la hauteur est de". " ".$this->height .".";
     
}
//fonction pour calculer la surface
public function calculSurface(){

    $surface = $this->width * $this->height;
    echo "<br> la surface est de". " ". $surface .".";
}
//fonction pour calculer le perimetre
public function calculerPerimetre(){

    $perimetre = $this->width + $this->height + $this->width + $this->height;
    echo "<br> le périmetre est de". " ". $perimetre .".";
}
}

// condition pour verifier si la variable exist ISSET , fait reference a la variable pour  le resultat au click
if(isset($soumettre)){

//Instanciation d'un objet "Person" apres la class
    $rectangle = new Rectangle($longueur,$hauteur);


//utilsation de la methode d'affichage
    
    $rectangle->displayInfo();
    
    $rectangle->calculSurface();
    
    $rectangle->calculerPerimetre();
    
}

?>