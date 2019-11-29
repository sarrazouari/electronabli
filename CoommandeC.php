<?PHP
include "../config.php";
class CoommandeC
{

	function afficherCoommandes()
	{
		$sql = "SELECT * From coommande";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficherCommande($coommande)
	{
		echo "Produit: " . $coommande->getProduit() . "<br>";
		echo "Description: " . $coommande->getDescription() . "<br>";
		echo "Prix_ar: " . $coommande->getPrix_ar() . "<br>";
		echo "Nombre: " . $coommande->getNombre() . "<br>";
		echo "Prix_to: " . $coommande->getPrix_to() . "<br>";
		echo "Id_commande: " . $coommande->getId_commande() . "<br>";
		echo "Id_panier: " . $coommande->getId_panier() . "<br>";	
	
	}
	
}