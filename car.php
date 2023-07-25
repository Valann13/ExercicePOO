<?php

require_once("navigation.php ");

?>

<h1> Exercice POO</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 2</h2>

<div class="exercice1">
<p>Créez une classe "Car" avec les propriétés privées "brand" et "model", ainsi que les méthodes suivantes :<br>
Une méthode pour définir la marque et le modèle de la voiture.<br>
Une méthode pour afficher la marque et le modèle de la voiture.<br>

</p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
         
              <div class=" col mb-3">
                <label for="exampleInputText1" class="form-label"></label>
                <input type="text" class="form-control" name="marque" id="exampleInputName1" placeholder="Marque">

                <label for="exampleInputText2" class="form-label"></label>
                <input type="text" class="form-control" name="modele" id="exampleInputName1" placeholder="Modele">
                <button type="submit" name="soumettre" class="btn btn-dark ">Soumettre</button>
                 
                </div>
                </form>
                <br>
<h3>Résultat:</h3>
<hr>

<?php
/* condition pour verifier si la variable exist ISSET ,$_POST fait reference a la method puis on appele le "name" de l'imput */
if( isset($_POST['marque'] )){
    $marque = $_POST ['marque'];
}
  
if( isset($_POST['modele'] )){
    $model = $_POST ['modele'];
}

if( isset($_POST['soumettre'] )){
    $soumettre = $_POST ['soumettre'];
}

//création de la classe
class Car{

//proprieté de la classe
    private $brand;
    private $model;

 //setter : Methode pour definir une propriete
public function setBrand($brand){
        $this->brand= $brand;
}
public function setModel($model){
    $this->model= $model;

}
//Getter methode pour obtenir une proprieté

public function getBrand(){
    return $this->brand;
}
public function getModel(){
    return $this->model;

}
//methode pour afficher des informations

public function displayInfo(){
    echo "La marque est : " .$this->brand."."."<br>" ."le modèle est : ".$this->model.".";
}

}   

if(isset($soumettre)){
//Instanciation d'un objet "Person" apres la class
$nouveauVehicule = new Car();

//Utilisation des methodes pour definir les proprieté de l'objet
$nouveauVehicule->setBrand($marque);
$nouveauVehicule->setModel($model);

//utilsation de la methode d'affichage
$nouveauVehicule->displayInfo();
}