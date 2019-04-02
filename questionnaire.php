<?PHP
class questionnaire
{   private $id;
	private $type_lunette;
	private $lunette_vu;
	private $prix_lunette;
	

	function __construct($id,$type_lunette,$lunette_vu,$prix_lunette)
	{   $this->id=$id;
		$this->type_lunette=$type_lunette;
		$this->lunette_vu=$lunette_vu;
		$this->prix_lunette=$prix_lunette;
		
	}
	
	
	function getType_lunette()
	{
		return $this->type_lunette;
	}
	
	function getLunette_vu()
	{
		return $this->lunette_vu;
	}
	function getPrix_lunette()
	{
		return $this->prix_lunette;
	}
	

	function setType_lunette($type_lunette)
	{
		$this->type_lunette=$type_lunette;
	}
	function setLunette_vu($lunette_vu)
	{
		$this->lunette_vu=$lunette_vu;
	}
	
	function setPrix($prix_lunette)
	{
		$this->prix_lunette=$prix_lunette;
	}
	
}

?>