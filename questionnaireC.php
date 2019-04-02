<?PHP
include "../config.php";
class questionnaireC {
function afficherquestionnaire($Questionnaire){
		echo "type_lunette: ".$Questionnaire->getType_lunette()."<br>";
		echo "lunette_vu: ".$Questionnaire->getLunette_vu()."<br>";
		echo "prix_lunette: ".$Questionnaire->getPrix_lunette()."<br>";
		
	}
	
	function ajouterquestionnaire($type_lunette,$lunette_vu,$prix_lunette){

		$sql="insert into questionnaire (type_lunette,lunette_vu,prix_lunette) values (:type_lunette,:lunette_vu,:prix_lunette)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		/*
        $Type=$Commande->getType();
        $Taille=$Commande->getTaille();
        $Couleur=$Commande->getCouleur();
        $Quantite=$Commande->getQuantite();
       	$Date=$Commande->getDate();
         */
		$req->bindValue(':type_lunette',$type_lunette);
		$req->bindValue(':lunette_vu',$lunette_vu);
		$req->bindValue(':prix_lunette',$prix_lunette);

		
            $req->execute();
            
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherquestionnaires(){
		
		$sql="SElECT * From questionnaire";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

function modifierquestionnaire($type_lunette,$lunette_vu,$prix_lunette,$typee_lunette){


		$sql="UPDATE questionnaire SET type_lunette=:typee_lunette, lunette_vu=:lunette_vu,prix_lunette=:prix_lunette WHERE type_lunette=:type_lunette";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		/*$Typee=$commande->getType();
        $Taille=$commande->getTaille();
        $Couleur=$commande->getCouleur();
        $Quantite=$commande->getQuantite();
        $Date=$commande->getDate();
		
		$req->bindValue(':Typee',$Typee);
		$req->bindValue(':Type',$Type);
		$req->bindValue(':Taille',$Taille);
		$req->bindValue(':Couleur',$Couleur);
		$req->bindValue(':Quantite',$Quantite);
		$req->bindValue(':datetime',$datetime);*/
$datas = array(':typee_lunette'=>$typee_lunette, ':type_lunette'=>$type_lunette, ':lunette_vu'=>$lunette_vu,':prix_lunette'=>$prix_lunette);

		$req->bindValue(':typee_lunette',$typee_lunette);
			$req->bindValue(':type_lunette',$type_lunette);
		$req->bindValue(':lunette_vu',$lunette_vu);
		$req->bindValue(':prix_lunette',$prix_lunette);
		
            $s=$req->execute();
			

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
    print_r($datas);
        }
		
	}
	function recupererquestionnaire($type_lunette){
		$sql="SELECT * from questionnaire where type_lunette='$type_lunette'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}
?>