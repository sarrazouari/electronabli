<?PHP
class compte{
	private $Nom;
	private $Prenom;
	private $AdresseEmail;
    private $Adresse;
    private $Ville;
    private $Pays;
    private $CodePostal;
    private $Telephone;
    private $Fax;
    private $Societe;
    private $Motdepasse;
  
    
	function __construct($Nom,$Prenom,$AdresseEmail,$Adresse,$Ville,$Pays,$CodePostal,$Telephone,$Fax,$Societe,$Motdepasse){
		$this->Nom=$Nom;
		$this->Prenom=$Prenom;
		$this->AdresseEmail=$AdresseEmail;
        $this->Adresse=$Adresse;
        $this->Ville=$Ville;
        $this->Pays=$Pays;
        $this->CodePostal=$CodePostal;
        $this->Telephone=$Telephone;
        $this->Fax=$Fax;
        $this->Societe=$Societe;
        $this->Motdepasse=$Motdepasse;
        
    }
    
	function getNom(){
		return $this->Nom;
	}
	function getPrenom(){
		return $this->Prenom;
	}
	function getAdresseEmail(){
		return $this->AdresseEmail;
	}
	function getAdresse(){
		return $this->Adresse;
    }
    function getVille(){
		return $this->Ville;
    }
    function getPays(){
		return $this->Pays;
    }
    function getCodePostal(){
		return $this->CodePostal;
    }
    function getTelephone(){
		return $this->Telephone;
    }
    function getFax(){
		return $this->Fax;
    }
    function getSociete(){
		return $this->Societe;
    }
    function getMotdepasse(){
		return $this->Motdepasse;
	}
	
    
    function setNom($Nom){
		$this->Nom=$Nom;
	}

	function setPrenom($Prenom){
		$this->Prenom=$Prenom;
  }
  
	function setAdresseEmail($AdresseEmail){
    $this->AdresseEmail=$AdresseEmail;
    }

    function set($Adresse){
      $this->Adresse=$Adresse;
   }
   
    function set($Ville){
      $this->Ville=$Ville;
   }
  
   function set($Pays){
    $this->Pays=$Pays;
   }
    function set($CodePostal){
    $this->CodePostal=$CodePostal;
    }
    function set($Telephone){
    $this->Telephone=$Telephone;
    }
    function set($Fax){
    $this->Fax=$Fax;
    }
    function set($Societe){
    $this->Societe=$Societe;
    }
    function set($Motdepasse){
    $this->Motdepasse=$Motdepasse;
    }
	
	
}

?>