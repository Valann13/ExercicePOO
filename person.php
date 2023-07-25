<?php

require_once("navigation.php ");
?>

<h1> Exercice POO</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 4</h2>

<div class="exercice1">
<p>
Créez un fichier nommé Person.php contenant la classe Person avec les propriétés privées "name" et "age", ainsi que les méthodes suivantes :<br>
Une méthode pour définir le nom de la personne.<br>
Une méthode pour définir l'âge de la personne.<br>
Une méthode pour obtenir le nom de la personne.<br>
Une méthode pour obtenir l'âge de la personne.<br>
<br>
Créez un fichier nommé index.php pour tester la classe Person :<br>
Incluez le fichier Person.php dans index.php.<br>
Instanciez un objet de la classe Person.<br>
Utilisez les méthodes de l'objet pour définir le nom et l'âge de la personne.<br>
Affichez le nom et l'âge de la personne à l'aide des méthodes de l'objet.<br>
</p>


<h3>Résultat:</h3>
<hr>


<?php

// definir une class person

class Person {

    //Proprieté de la class
    private $name;
    private $age;


    //methose de la class
    //setter : Methode pour definir une propriete

   
public function __construct($name, $age){

    $this->name= $name;
    $this->age= $age;
}


    //Getter methode pour obtenir une proprieté

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }
 
    //methode pour afficher des informations

    public function displayInfo(){
        echo "Nom :" ." ".$this->name."<br>" ."Age :"." ".$this->age." "."ans";
    }
}

    //Instanciation d'un objet "Person" apres la class
    $person= new Person("Gandalf",7000);

    //utilsation de la methode d'affichage

    $person ->displayInfo();
    echo"<br>";






?>