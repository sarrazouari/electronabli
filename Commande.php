
  <?PHP
class commande{
	private $Id_commande;
	private $Datecommande;
	private $Livraison;

  
    
	function __construct($Id_commande,$Datecommande,$Livraison){
		$this->Id_commande=$Id_commande;
		$this->Datecommande=$Datecommande;
		$this->Livraison=$Livraison;
	}
	
	
	function getId_commande(){
		return $this->Id_commande;
	}
	function getDatecommande(){
		return $this->Datecommande;
	}
	function getLivraison(){
		return $this->Livraison;
	}

	
    
    function setId_commande($Id_commande){
		$this->Id_commande=$Id_commande;
	}

	function setNom($Datecommande){
		$this->Datecommande=$Datecommande;
	}
	function setLivraison($Livraison){
		$this->Livraison=$Livraison;
    }
	
	
}

?>