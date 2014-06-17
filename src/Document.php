<?php namespace EndyJasmi;

class Document
{
	protected $properties = array();

	public function getProperties()
	{
		return $this->properties;
	}

	public function getProperty($property)
	{
		if (!$this->propertyExists($property)) {
			return null;
		}

		return $this->properties[$property];
	}

	public function propertyExists($property)
	{
		return array_key_exists($property, $this->properties);
	}

	public function setProperties(array $properties)
	{
		$this->properties = $properties;

		return $this;
	}

	public function setProperty($property, $value)
	{
		$this->properties[$property] = $value;

		return $this;
	}

	public function toArray()
	{
		return $this->properties;
	}

	public function toJson()
	{
		return json_encode($this->properties);
	}
}