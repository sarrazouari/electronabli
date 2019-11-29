
<?PHP
include "../core/CommandeC.php";
$commandeC = new CommandeC();
$listeCommande = $commandeC->afficherCommandes();
?>
function verifier(){
var datel=Datecommande;      

var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var difdate= date-datel

        if (  difdate >1 )
        {
        alert("erreur");
        }
    }