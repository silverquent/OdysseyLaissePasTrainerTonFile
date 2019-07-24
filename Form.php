<?php 


class Personnage{

  private $nom ;
  private $prenom;
  private $adresse;
  private $dateDeNaissance;
  

  public function __construct($nom){
    $this->nom= $nom;
  }


public function getNom()
{
  return $this->nom;
}

public function setNom($nom)
{
  $this->nom=$nom;
}

public function getPrenom()
{
  return $this->prenom;
}
public function setPrenom($prenom)
{
  $this->prenom=$prenom;
}

public function getAdresse()
{
  return $this->adresse;
}
public function setAdresse($adresse)
{
  $this->adresse= $adresse;
}

public function getAnneeDeNaissance()
{
  return $this->anneeDeNaissance ;
}

public function setAnneeDeNaissance($anneeDeNaissance)
{
  $this->anneeDeNaissance=$anneeDeNaissance;
}



  public function sePresenter()
  {
    echo "Je me présente je m'appel " . $this->nom ." ". $this->prenom ." ". "mon adresse est : " . $this->adresse ." je suis de :". $this->anneeDeNaissance . "<br>";
  }

  public function calculAge()
  {

    echo  "J'ai " . (date('Y') - $this->anneeDeNaissance) . "ans" ;
  
}


}
?>