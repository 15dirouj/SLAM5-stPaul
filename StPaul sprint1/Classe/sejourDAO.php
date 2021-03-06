<?php
Class sejourDAO {
	private $bdd;
		
	public function __construct($bdd)
	{
		$this->setBdd($bdd);
	}
	
	public function get($SejNo)
	{
		$SejNo = (int) $SejNo;

		$results = $this->_bdd->query("SELECT SejDteDeb, SejDuree, SejIntitule, SejMontantMBI, SejNo FROM sejour WHERE SejNo='$SejNo'");
		$sejour = $results->fetch(PDO::FETCH_ASSOC);
		$osejour = new sejour($sejour['SejDteDeb'],$sejour['SejDuree'],$sejour['SejIntitule'],$sejour['SejMontantMBI'],$sejour['SejNo']);
		
		return $osejour;
	}
	
	public function getList()
	{
		$lstsejour = [];
		$results = $this->_bdd->query("SELECT SejDteDeb, SejDuree, SejIntitule, SejMontantMBI, SejNo FROM sejour ORDER BY SejNo DESC");
		while ($sejour = $results->fetch(PDO::FETCH_ASSOC))
		{
			$lstsejour[] = new sejour($sejour['SejDteDeb'],$sejour['SejDuree'],$sejour['SejIntitule'],$sejour['SejMontantMBI'],$sejour['SejNo']);
		}
		return $lstsejour;
	}
	
	public function setBdd(PDO $bdd)
	{
		$this->_bdd = $bdd;
	}
}
?>