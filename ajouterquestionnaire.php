
<?PHP
	include "../core/questionnaireC.php";
	include "../entities/questionnaire.php";



if (isset($_POST['type_lunette']) and isset($_POST['lunette_vu']) and isset($_POST['prix_lunette'])){
	//$datetime=date_create()->format('Y-m-d H:i:s');
	//$questionnaire=new questionnaire($_POST['type_lunette'],$_POST['lunette_vu'],$_POST['prix_lunette']);
	$commande1C=new questionnaireC();
	
	$commande1C->ajouterquestionnaire($_POST['type_lunette'],$_POST['lunette_vu'],$_POST['prix_lunette']);
header('Location: afficherquestionnaire.php');

	
	

}
else{
	echo "vérifier les champs";
}




?>