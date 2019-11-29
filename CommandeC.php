<?PHP
include "../config.php";
class CommandeC
{

    function afficherCommandes()
	{
		$sql = "SELECT * From commande";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficherCommande($commande)
	{
		echo "Id_commande: " . $commande->getId_commande() . "<br>";
		echo "Datecommande: " . $commande->getDatecommande() . "<br>";
		echo "Livraison: " . $commande->getLivraison() . "<br>";
	
	}

	function ajouterCommande($commande)
	{
		$sql = "insert into commande (Id_commande,Datecommande,Livraison) values (NULL, NOW(),:Livraison)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			//$Id_commande = $commande->getId_commande();
		//	$Datecommande = $commande->getDatecommande();
			$Livraison = $commande->getLivraison();
		
		//	$req->bindValue(':Id_commande', $Id_commande);
		//	$req->bindValue(':Datecommande', $Datecommande);
			$req->bindValue(':Livraison', $Livraison);
		
			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function supprimerCommande($Id_commande)
	{
		$sql = "DELETE FROM commande where Id_commande= :Id_commande";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':Id_commande', $Id_commande);
		try {
			$req->execute();
			 header('Location: afficherCommande.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function modifierCommande($commande)
	{
		$sql = "UPDATE commande SET  Datecommande=:Datecommande,Livraison=:Livraison WHERE Id_commande=:Id_commande";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try {
			$req = $db->prepare($sql);
	
			$Datecommande = $commande->getDatecommande();
			$Livraison = $commande->getLivraison();
			$Id_commande = $commande->getId_commande();
			$datas = array(':Datecommande' => $Datecommande, ':Livraison' => $Livraison);
			$req->bindValue(':Datecommande', $Datecommande);
			$req->bindValue(':Livraison', $Livraison);
			$req->bindValue(':Id_commande', $Id_commande);
		
			$s = $req->execute();

			// header('Location: index.php');
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			echo " Les datas : ";
			print_r($datas);
		}
	}
	
	function recupererCommande($Id_commande)
	{
		$sql = "SELECT * from commande where Id_commande=$Id_commande";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	
}