#Document [![Build Status](https://travis-ci.org/endyjasmi/document.svg?branch=0.2.2)](https://travis-ci.org/endyjasmi/document) [![License](https://poser.pugx.org/endyjasmi/document/license.svg)](https://packagist.org/packages/endyjasmi/document)
Provide document helper method like getter and setter. Primarily used by extending this class.

##How to install
You can install this class through composer.
```
{
	require: {
		"endyjasmi/document": "0.2.*"
	}
}
```

##How to use
This class is designed to be extended by other class.
```
use EndyJasmi\Document;

class User extends Document
{}
```

###Setter
You can set properties of the document either in bulk or individually.
```
$user = new User;

$user->setProperties(array(
	'name' => 'Endy Jasmi',
	'born' => 1990
));

// or

$user->setProperty('name', 'Endy Jasmi')
	->setProperty('born', 1990);
```
Do note that you can chain method together to provide a more readable syntax.

###Getter
After you have set the properties, you can fetch the property out again.
```
$userInformation = $user->getProperties();

// or

$name = $user->getProperty('name');
```
If you try to fetch a non-existent property, it will return a null.


###Others
Next would be a helper method to determine wherether the property exists or not.
```
$height = $user->propertyExists('height');
```
`propertyExists($property)` method will return boolean indicating whether the property has already been set. In this case, the value of `$height` would be false because we have yet to set the property.

Document can also morph to other data structure. Currently, it can morph to array and json.
```
$userArray = $user->toArray();
$userJson = $user->toJson();
```

##Question or suggestion
Feel free to create a new issues.