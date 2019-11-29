<?PHP
include "../core/commandeC.php";
$commandeC=new CommandeC();
/*$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
echo $date->format('Y-m-d');

$date1 = $_POST["Datecommande"];//  ici ta date

	$date1 = strtotime(date("Y-m-d", strtotime($date1)) . " +1 day");
$diffInDays = (int) $date1-$_POST["Datecommande"]->format("%r%a");
echo $diffInDays;*/

if (isset($_POST["Id_commande"]) /*and ($date1<$_POST["Datecommande"])*/){
	$commandeC->supprimerCommande($_POST["Id_commande"]);
	header('Location: afficherCommande.php');

}
else
{
	echo "date inf à 24h ";

	
}

?>
