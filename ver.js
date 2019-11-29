function verifier() {
var datel=f.Datecommande.value;       
    var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
   

            if (  date < datel )
            {
            alert(" date de commande > date d'aujourd'hui");
        return false;
            }
            else
            {
                return true;
            }
        }
  