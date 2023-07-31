<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    
    <?php
class Utilisateur {
  private String $nom;
  private String $Prenom;
  private String $email;

  public function __construct(String $nom, String $prenom, $email) {
    $this-> nom = $nom;
    $this-> prenom = $prenom;
    $this->email = $email;
  }

  public function getNom() : String{
    return $this->nom;
  }

  public function setNom(String $nom) {
  $this -> nom = $nom;
  }

  public function getPrenom() :String {
  return $this-> prenom;
  }

  public function setPrenom(String $prenom) {
    $this-> prenom = $prenom;
  }
  

  public function getEmail() :String {
  return $this -> email;
  }

  public function setEmail(String $email) {
    $this-> email = $email;
  }
}
?> 
<p>Dans cet exemple ,la classe 'Utilisateur a des propriétés privées(nom, prenom, email) qui ne peuvent etre accédés diréctement. Les accesseurs (getters et mutatteurs (setters)  sont utilisés pour lire et mdifier les valeurs des propriétés respectivement.</p>

<h2> Utilisation de la portée "protected":</h2>

    <?php

class Animal {
  protected String $nom;
  public function setNom(String $nom) {
  $this -> nom = $nom;
  }
}

class Chat extends Animal {
  public function getNom() :String {
    return $this->nom;
  }
}

$monChat = new Chat();
$monChat-> setNom("Minou");
echo $monChat-> getNom(); // affiche "Minou"
?>
<p>
  Dans cet exemple , la propriété 'nom' de la classe "Animal" est définie avec une portée 'protected'.
  Cela signifie que la propriété n'est pas accessible depuis l'extérieur de la classe , mais est accessible par les osus-classes (ici, la classe 'Chat'). Les accesseurs ne sont pas nécéssaires, car la propriété est accessible par la sous-classe.
</p>
    
  
 
</html>