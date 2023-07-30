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
  return $this-> prenom
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

 
</html>