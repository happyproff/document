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
}