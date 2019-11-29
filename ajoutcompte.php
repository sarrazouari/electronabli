<?PHP
include "../entities/compte.php";
include "../core/CompteC.php";

if (isset($_POST['Nom']) and isset($_POST['Prenom']) and isset($_POST['AdresseEmail']) and isset($_POST['Adresse']) and isset($_POST['Ville']) and isset($_POST['Pays']) and isset($_POST['CodePostal']) and isset($_POST['Telephone']) and isset($_POST['Fax']) and isset($_POST['Societe']) and isset($_POST['Motdepasse'])){
$compte1=new compte($_POST['Nom'],$_POST['Prenom'],$_POST['AdresseEmail'], $_POST['Adresse'],$_POST['Ville'],$_POST['Pays'],$_POST['CodePostal'],$_POST['Telephone'], $_POST['Fax'], $_POST['Societe'], $_POST['Motdepasse']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$CompteC=new CompteC();
$Compte1C->ajoutCompte($Compte1);
header('Location: afficherCompte.php');
	
}else{
	echo "vérifier les champs";
}