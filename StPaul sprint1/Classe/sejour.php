<?php
Class sejour {
	private $SejDteDeb;
	private $SejDuree;
	private $SejIntitule;
	private $SejMontantMBI;
	private $SejNo;
	
	function __construct($SejDteDeb, $SejDuree, $SejIntitule, $SejMontantMBI, $SejNo)
	{
		$this->SejDteDeb = $SejDteDeb;
		$this->SejDuree = $SejDuree;
		$this->SejIntitule = $SejIntitule;
		$this->SejMontantMBI = $SejMontantMBI;
		$this->SejNo = $SejNo;
	}
	
	/**
	 * @return mixed
	 */
	public function getSejDteDeb()
	{
		return $this->SejDteDeb;
	}
	
	/**
	 * @param mixed $SejDteDeb
	 */
	public function setSejDteDeb($SejDteDeb)
	{
		$this->SejDteDeb = $SejDteDeb;
	}
	
	/**
	 * @return mixed
	 */
	public function getSejDuree()
	{
		return $this->SejDuree;
	}
	
	/**
	 * @param mixed $SejDuree
	 */
	public function setTitre($SejDuree)
	{
		$this->SejDuree = $SejDuree;
	}
	
	/**
	 * @return mixed
	 */
	public function getSejIntitule()
	{
		return $this->SejIntitule;
	}
	
	/**
	 * @param mixed $SejIntitule
	 */
	public function setDate($SejIntitule)
	{
		$this->SejIntitule = $SejIntitule;
	}
	
	/**
	 * @return mixed
	 */
	public function getSejMontantMBI()
	{
		return $this->SejMontantMBI;
	}
	
	/**
	 * @param mixed $SejMontantMBI
	 */
	public function setSEJMONTANTMBI($SejMontantMBI)
	{
		$this->SejMontantMBI = $SejMontantMBI;
	}
	
	/**
	 * @return mixed
	 */
	public function getSejNo()
	{
		return $this->SejNo;
	}
	
	/**
	 * @param mixed $SejNo
	 */
	public function setSejNo($SejNo)
	{
		$this->SejNo = $SejNo;
	}
}
?>