<?php
class Beer
{
	private $name;
	private $type;
	private $country;
	private $productor;
	private $grade;

	public function __construct($name, $type, $county, $productor, $grade)
	{
		$this->name = $name;
		$this->type = $type;
		$this->country = $country;
		$this->productor = $productor;
		$this->grade = $grade;
	
	}
	public function getName()
	{
		return $this->name;
	}
	public function getType()
	{
		return $this->type;
	}
	public function getCountry()
	{
		return $this->country;
	}

	public function getProductor()
	{
		return $this->productor;
	}
	public function getGrade()
	{
		return $this->grade;
}