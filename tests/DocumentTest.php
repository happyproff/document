<?php namespace EndyJasmi;

use PHPUnit_Framework_TestCase as TestCase;

class DocumentTest extends TestCase
{
	public function testDocumentPropertiesMethod()
	{
		$document = new Document;

		$getDocumentPropertiesBeforeSet = $document->getProperties();
		$returnDocumentAfterSet = $document->setProperties(array(
			'property' => 'value'
			));
		$getDocumentPropertiesAfterSet = $document->getProperties();

		$this->assertEmpty($getDocumentPropertiesBeforeSet);
		$this->assertInstanceOf('EndyJasmi\Document', $returnDocumentAfterSet);
		$this->assertNotEmpty($getDocumentPropertiesAfterSet);
	}

	public function testDocumentPropertyMethod()
	{
		$document = new Document;

		$documentPropertyExistsBeforeSet = $document->propertyExists('property');
		$getDocumentPropertyBeforeSet = $document->getProperty('property');
		$returnDocumentAfterSet = $document->setProperty('property', 'value');
		$documentPropertyExistsAfterSet = $document->propertyExists('property');
		$getDocumentPropertyAfterSet = $document->getProperty('property');

		$this->assertFalse($documentPropertyExistsBeforeSet);
		$this->assertNull($getDocumentPropertyBeforeSet);
		$this->assertInstanceOf('EndyJasmi\Document', $returnDocumentAfterSet);
		$this->assertTrue($documentPropertyExistsAfterSet);
		$this->assertEquals('value', $getDocumentPropertyAfterSet);
	}

	public function testDocumentMorphMethod()
	{
		$document = new Document;
		$document->setProperty('property', 'value');

		$returnArrayDocument = $document->toArray();
		$returnJsonDocument = $document->toJson();

		$this->assertNotEmpty($returnArrayDocument);
		$this->assertEquals('{"property":"value"}', $returnJsonDocument);
	}
}