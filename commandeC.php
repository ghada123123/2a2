<?PHP
include "../config.php";
class commandeC {
function affichercommande($Commande){
		echo "Type: ".$Commande->getType()."<br>";
		echo "Taille: ".$Commande->getTaille()."<br>";
		echo "Couleur: ".$Commande->getCouleur()."<br>";
		echo "Quantite: ".$Commande->getQuantite()."<br>";
		echo "Date: ".$Commande->getDate()."<br>";

	}
	
	function ajoutercommande($Type,$Taille,$Couleur,$Quantite,$datetime){

		$sql="insert into commande (Type,Taille,Couleur,Quantite,Date) values (:Type,:Taille,:Couleur,:Quantite,:datetime)";
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

		$req->bindValue(':Type',$Type);
		$req->bindValue(':Taille',$Taille);
		$req->bindValue(':Couleur',$Couleur);
		$req->bindValue(':Quantite',$Quantite);
		$req->bindValue(':datetime',$datetime);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function ajouterarchive($Type,$Taille,$Couleur,$Quantite,$datetime){

		$sql="insert into archive (Type,Taille,Couleur,Quantite,Date) values (:Type,:Taille,:Couleur,:Quantite,:datetime)";
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

		$req->bindValue(':Type',$Type);
		$req->bindValue(':Taille',$Taille);
		$req->bindValue(':Couleur',$Couleur);
		$req->bindValue(':Quantite',$Quantite);
		$req->bindValue(':datetime',$datetime);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function affichercommandes(){
		
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimercommande($id){
		$sql="DELETE FROM commande where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function modifiercommande($typee,$Taille,$Couleur,$Quantite,$datetime,$Type){


		$sql="UPDATE commande SET Type=:typee, Taille=:Taille,Couleur=:Couleur,Quantite=:Quantite,Date=:datetime WHERE Type=:Type";
		
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
$datas = array(':typee'=>$typee, ':Type'=>$Type, ':Taille'=>$Taille,':Couleur'=>$Couleur,':Quantite'=>$Quantite,':datetime'=>$datetime);

		$req->bindValue(':typee',$typee);
			$req->bindValue(':Type',$Type);
		$req->bindValue(':Taille',$Taille);
		$req->bindValue(':Couleur',$Couleur);
		$req->bindValue(':Quantite',$Quantite);
		$req->bindValue(':datetime',$datetime);

            $s=$req->execute();
			

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
    print_r($datas);
        }
		
	}
	function recuperercommande($id){
		$sql="SELECT * from commande where id='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recuperercommandee($Type){
		$sql="SELECT * from commande where Type='$Type'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function recherchercommande($Type){
		$sql="SELECT * from commande where Type='$Type'";
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