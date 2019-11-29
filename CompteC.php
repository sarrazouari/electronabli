<?PHP
include "../config.php";
class CompteC
{

    function afficherCompte()
	{
		$sql = "SELECT * From compte";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }
    
    function ajouterCompte($Compte)
	{
		$sql = "insert into Compte (Nom,Prenom,AdresseEmail,Adresse,Ville,Pays,CodePostal,Telephone,Fax,Societe,Motdepasse) values (:Nom, :Prenom,:AdresseEmail,:Adresse,:Adresse, :Ville,:Pays ,:CodePostal ,:Telephone ,:Fax ,:Societe ,:Motdepasse)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$Nom = $compte->getNom();
			$Prenom = $compte->getPrenom();
			$AdresseEmail = $compte->getAdresseEmail();
			$Adresse = $compte->getAdresse();
            $Ville = $compte->getVille();
            $Pays = $compte->getPays();
			$CodePostal = $compte->getCodePostal();
			$Telephone = $compte->getTelephone();
			$Fax = $compte->getFax();
            $Societe = $compte->getSociete();
            $Motdepasse = $compte->Motdepasse();
            

			$req->bindValue(':Nom', $Nom);
			$req->bindValue(':Prenom', $Prenom);
			$req->bindValue(':AdresseEmail', $AdresseEmail);
			$req->bindValue(':Adresse', $Adresse);
            $req->bindValue(':Ville', $Ville);

            $req->bindValue(':Pays', $Pays);
			$req->bindValue(':CodePostal', $CodePostal);
			$req->bindValue(':Telephone', $Telephone);
			$req->bindValue(':Fax', $Fax);
            $req->bindValue(':Societe', $Societe);
            $req->bindValue(':Motdepasse', $Motdepasse);

			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	
}