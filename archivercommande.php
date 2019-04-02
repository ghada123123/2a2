<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
$commande1C=new commandeC();

if(isset($_GET['id']))
{
  echo $_GET['id'];
   $result=$commande1C->recuperercommande($_GET['id']);
   foreach ($result as $row) 
   {
    $Type=$row['Type'];
    $Taille=$row['Taille'];
    $Couleur=$row['Couleur'];
    $Quantite=$row['Quantite'];
    $Date=$row['Date'];
   }
   
   
   $commande1C->ajouterarchive($Type,$Taille,$Couleur,$Quantite,$Date);

   header('Location: afficherclients.php');
   
}
else 
{
  echo "probleme .....";
  # code...
}

?>