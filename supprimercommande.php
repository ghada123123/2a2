<?PHP
include "../core/commandeC.php";
$employeC=new commandeC();
if (isset($_POST["id"])){
	$employeC->supprimercommande($_POST["id"]);
	header('Location: affichercommande.php');
}

?>