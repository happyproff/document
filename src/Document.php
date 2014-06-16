<?php namespace EndyJasmi;

class Document
{
	protected $properties = array();

	public function getProperties()
	{
		return $this->properties;
	}

	public function setProperties(array $properties)
	{
		$this->properties = $properties;

		return $this;
	}
}