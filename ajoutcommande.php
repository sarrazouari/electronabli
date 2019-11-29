<?PHP
include "../entities/Commande.php";
include "../core/CommandeC.php";

if (/*isset($_POST['Id_commande']) and isset($_POST['Datecommande']) and */isset($_POST['Livraison'])){
	/*codit java*/
$commande1=new commande(0,0,$_POST['Livraison']);

$Commande1C=new CommandeC();
$Commande1C->ajoutercommande($commande1);
header('Location: afficherCommande.php');
	
}else{
	echo "vérifier les champs";
}