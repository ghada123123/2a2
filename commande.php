<?PHP
class commande
{   private $id;
	private $Type;
	private $Taille;
	private $Couleur;
	private $Quantite;
	private $Date;

	function __construct($id,$Type,$Taille,$Couleur,$Quantite,$Date)
	{   $this->id=$id;
		$this->Type=$Type;
		$this->Taille=$Taille;
		$this->Couleur=$Couleur;
		$this->Quantite=$Quantite;
		$this->Date=$Date;

	}
	
	
	function getType()
	{
		return $this->Type;
	}
	
	function getTaille()
	{
		return $this->Taille;
	}
	function getCouleur()
	{
		return $this->Couleur;
	}
	function getQuantite()
	{
		return $this->Quantite;
	}

	function getDate()
	{
		return $this->Date;
	}

	function setType($Type)
	{
		$this->Type=$Type;
	}
	function setTaille($Taille)
	{
		$this->Taille=$Taille;
	}
	
	function setCouleur($Couleur)
	{
		$this->Couleur=$Couleur;
	}
	function setQuantite($Quantite)
	{
		$this->Quantite=$Quantite;
	}	
	function setDate($Date)
	{
		$this->Date=$Date;
	}
}

?>