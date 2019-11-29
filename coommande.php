<?PHP
class coommande{
	private $Produit;
	private $Description;
	private $Prix_ar;
	private $Nombre;
	private $Prix_to;
	private $Id_commande;
	private $Id_panier;

  
    
	function __construct($Produit,$Description,$Prix_ar,$Nombre,$Prix_to,$Id_commande,$Id_panier){
		$this->Produit=$Produit;
		$this->Description=$Description;
		$this->Prix_ar=$Prix_ar;
		$this->Nombre=$Nombre;
		$this->Prix_to=$Prix_to;
		$this->Id_commande=$Id_commande;
		$this->Id_panier=$Id_commande;

	}
	
	function getProduit(){
		return $this->Produit;
	}
	function getDescription(){
		return $this->Description;
	}
	function getPrix_ar(){
		return $this->Prix_ar;
	}
	function getNombre(){
		return $this->Nombre;
	}
	function getPrix_to(){
		return $this->Prix_to;
	}
	function getId_commande(){
		return $this->Id_commande;
	}
	function getId_panier(){
		return $this->Id_panier;
	}


	function setProduit(){
	 $this->Produit=$Produit;
	}
	function setDescription($Description){
		$this->Description=$Description;
	}
	function setPrix_ar($Prix_ar){
		$this->Prix_ar=$Prix_ar;
    }
	function setNombre($Nombre){
		$this->Nombre=$Nombre;
	}

	function setPrix_to($Prix_to){
		$this->Prix_to=$Prix_to;
	}
    function setId_commande($Id_commande){
		$this->Id_commande=$Id_commande;
	}
	function setId_panier($Id_panier){
		$this->Id_panier=$Id_panier;
	}
}

?>