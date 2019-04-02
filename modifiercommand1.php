<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";

if (isset($_POST['Type']) and isset($_POST['Taille']) and isset($_POST['Couleur']) and isset($_POST['Quantite']))
{
	$datetime=date_create()->format('Y-m-d H:i:s');
//$commande1=new commande($_POST['Type'],$_POST['Taille'],$_POST['Couleur'],$_POST['Quantite'],$datetime);
$commande1C=new commandeC();
$commande1C->ajoutercommande($_POST['Type'],$_POST['Taille'],$_POST['Couleur'],$_POST['Quantite'],$datetime);




header('Location: affichercommande.php');
	
}else{
	echo "vérifier les champs";
}



?>