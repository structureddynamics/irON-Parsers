<?php

/*!	 @brief JSON parsing class
						
		\n
		
		@todo Implementing the "metaFile" keyword
		
		@author Frederick Giasson, Structured Dynamics LLC.
	
		\n\n\n
*/

class irJSONParser
{
	/*! @brief Array of instance record objects of the parsed irJSON file */			
	public $instanceRecords  = array();

	/*! @brief Array of Linkage Schema objects of the parsed irJSON file */			
	public $linkageSchemas = array();

	/*! @brief Array of Structure Schema objects of the parsed irJSON file */			
	public $structureSchemas = array();
	
	/*! @brief Dataset object of the parsed irJSON file */			
	public $dataset;
	
	/*! @brief JSON Parsing errors */			
	public $jsonErrors = array();

	/*! @brief irJSON Parsing errors */			
	public $irjsonErrors = array();
	
	/*! @brief irJSON Parsing notices */			
	public $irjsonNotices = array();
	
	/*! @brief irJSON content file to be parsed */			
	private $jsonContent = "";
	
	/*! @brief Default Structure Schema used by the irJSON Parser */			
	private $irvStructureSchema = "{
										\"schema\": {
											\"version\": \"0.1\",
											
											\"attributeList\": {
												\"id\": {
													\"valueType\": \"string\"
												},
												\"prefLabel\": {
													\"valueType\": \"string\"
												},
												\"altLabel\": {
													\"valueType\": [\"string\", \"array(string)\"]
												},
												\"description\": {
													\"valueType\": \"string\"
												},
												\"source\": {
													\"valueType\": [\"object\", \"array(object)\"]
												},
												\"createDate\": {
													\"valueType\": \"string\",
													\"format\": \"date\"
												},
												\"creator\": {
													\"valueType\": [\"object\", \"array(object)\"]
												},
												\"curator\": {
													\"valueType\": [\"object\", \"array(object)\"]
												},
												\"maintainer\": {
													\"valueType\": [\"object\", \"array(object)\"]
												},
												\"linkage\": {
													\"valueType\": \"array(string)\"
												},
												\"schema\": {
													\"valueType\": \"string\"
												},
												\"valueType\": {
													\"valueType\": [\"string\", \"array(string)\"]
												},
												\"prefURL\": {
													\"valueType\": \"string\",
													\"format\": \"url\"
												},
												\"ref\": {
													\"valueType\": \"string\"
												},
												\"version\": {
													\"valueType\": \"string\"
												},
												\"linkedType\": {
													\"valueType\": \"string\"
												},
												\"prefixList\": {
													\"valueType\": \"object\"
												},
												\"attributeList\": {
													\"valueType\": \"object\"
												},
												\"typeList\": {
													\"valueType\": \"object\"
												},
												\"format\": {
													\"valueType\": \"string\"
												},			
												\"mapTo\": {
													\"valueType\": \"string\"
												},		
												\"add\": {
													\"valueType\": \"string\"
												},	
												\"subPropertyOf\": {
													\"valueType\": \"string\"
												},			
												\"equivalentPropertyTo\": {
													\"valueType\": \"string\"
												},			
												\"subTypeOf\": {
													\"valueType\": \"string\"
												},			
												\"equivalentTypeTo\": {
													\"valueType\": \"string\"
												},
												\"type\": {
													\"valueType\": \"string\"
												}
											}
										}
									}";

	/*!	 @brief Constructor. It takes the irJSON file content as input.
							
			\n
			
			@param[in] $content irJSON file content
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/	
	function __construct($content) 
	{
		// Parse the JSON content
		$this->jsonContent = json_decode($content);
		
	    if (strnatcmp(phpversion(),'5.3.0') >= 0)
	    {
			// Additional parsing errors. Only for PHP >= 5.3
			
			$error = json_last_error();

			if($error != JSON_ERROR_NONE)
			{
		        switch($error)
		        {
		            case JSON_ERROR_DEPTH:
						array_push($this->jsonErrors, "Maximum stack depth exceeded. Can't parse:  '$content'");
	                break;
		            case JSON_ERROR_CTRL_CHAR:
						array_push($this->jsonErrors, "Unexpected control character found. Can't parse: '$content'");
	                break;
		            case JSON_ERROR_SYNTAX:
						array_push($this->jsonErrors, "Syntax error, malformed JSON. Can't parse: '$content'");
	                break;
		        }	
						
				return FALSE;
			}
	    }
		
		if($this->jsonContent === NULL)
		{
			array_push($this->jsonErrors, "Syntax error, malformed JSON. Cant parse: '$content'");

			return FALSE;		
		}
		else
		{
			$this->parse();
		}
	}
	
	/*!	 @brief Parser function that parse the JSON file to populate the irJSON objects
							
			\n
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/		
	private function parse() 
	{
		// Populate the Dataset object
		$this->dataset = new Dataset();

		// Set ID
		if(isset($this->jsonContent->dataset->id))
		{
			$this->dataset->setId($this->jsonContent->dataset->id);
		}
		else
		{
			array_push($this->irjsonErrors, "Dataset ID not specified");
		}
		
		// Set label
		if(is_array($this->jsonContent->dataset->prefLabel))
		{
			foreach($this->jsonContent->dataset->prefLabel as $label)
			{
				$this->dataset->setLabel($label, "string");
				array_push($this->irjsonNotices, "Attribute 'prefLabel' can't have an array as value. First item of the array is used as the string for label, other items are ignored.");
				
				break;	
			}
		}
		else
		{
			$this->dataset->setLabel($this->jsonContent->dataset->prefLabel, "string");
		}
		
		// set Meta
		if(isset($this->jsonContent->dataset->meta))
		{
			array_push($this->irjsonErrors, "Attribute 'meta' not currently supported. Ignored.");
		}

		// Set altLabel
		if(is_array($this->jsonContent->dataset->altLabel))
		{
			foreach($this->jsonContent->dataset->altLabel as $altLabel)
			{
				$this->dataset->setAltLabel($altLabel, "array(string)");	
			}
		}
		else
		{
			$this->dataset->setAltLabel($this->jsonContent->dataset->altLabel, "string");
		}		
		
		// Set description
		$this->dataset->setDescription($this->jsonContent->dataset->description);
				
		// Set sources		
		if(is_array($this->jsonContent->dataset->source))
		{
			foreach($this->jsonContent->dataset->source as $source)
			{
				$this->dataset->setSource($source->prefLabel, $source->prefURL, $source->ref, "array(object)");	
			}		
		}
		else
		{
			$this->dataset->setSource($this->jsonContent->dataset->source->prefLabel, $this->jsonContent->dataset->source->prefURL, $this->jsonContent->dataset->source->ref, "object");
		}


		// Set createDate
		$this->dataset->setCreateDate($this->jsonContent->dataset->createDate);		

		// Set creator		
		if(is_array($this->jsonContent->dataset->creator))
		{
			foreach($this->jsonContent->dataset->creator as $creator)
			{
				$this->dataset->setCreator($creator->prefLabel, $creator->prefURL, $creator->ref, "array(object)");	
			}		
		}
		else
		{
			$this->dataset->setCreator($this->jsonContent->dataset->creator->prefLabel, $this->jsonContent->dataset->creator->prefURL, $this->jsonContent->dataset->creator->ref, "object");
		}

		// Set curator		
		if(is_array($this->jsonContent->dataset->curator))
		{
			foreach($this->jsonContent->dataset->curator as $curator)
			{
				$this->dataset->setCurator($curator->prefLabel, $curator->prefURL, $curator->ref, "array(object)");	
			}		
		}
		else
		{
			$this->dataset->setCurator($this->jsonContent->dataset->curator->prefLabel, $this->jsonContent->dataset->curator->prefURL, $this->jsonContent->dataset->curator->ref, "object");
		}
		
		// Set maintainer		
		if(is_array($this->jsonContent->dataset->maintainer))
		{
			foreach($this->jsonContent->dataset->maintainer as $maintainer)
			{
				$this->dataset->setMaintainer($maintainer->prefLabel, $maintainer->prefURL, $maintainer->ref, "array(object)");	
			}		
		}
		else
		{
			$this->dataset->setMaintainer($this->jsonContent->dataset->maintainer->prefLabel, $this->jsonContent->dataset->maintainer->prefURL, $this->jsonContent->dataset->maintainer->ref, "object");
		}		
		
		// Structured Schema
		
		// Load the internal structure schema in the schemas array.
		$structureSchemas = array();
		
		$parsedContent = json_decode($this->irvStructureSchema);

		if($parsedContent === NULL)
		{
			array_push($this->jsonErrors, "Syntax error while parsing core structure schema, malformed JSON");
			
			return FALSE;		
		}
		
		array_push($structureSchemas, $parsedContent);
		
		
		if(isset($this->jsonContent->dataset->schema))
		{
			array_push($structureSchemas, $this->jsonContent->dataset->schema);
		}
		
		// Get the decoded schema
		if(gettype($this->jsonContent->dataset->schema) != "object")
		{
			// It is a URL link to a linkage schema
			if(isset($this->jsonContent->dataset->schema))
			{
				// Save the URL reference
				$this->dataset->setStructureSchema($this->jsonContent->dataset->schema);
				
				$ch = curl_init();
				
				curl_setopt($ch, CURLOPT_URL, $this->jsonContent->dataset->schema);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				
			
				$data = curl_exec($ch);
				
				if(curl_errno($ch)) 
				{
					array_push($this->irjsonNotices, "Cannot access the structure schema from: ".$this->jsonContent->dataset->schema." - Ignored");
					
					curl_close($ch);
				}
				else
				{
					$data = trim($data);
	
					curl_close($ch);
	
					$parsedContent = json_decode($data);
	
					if($parsedContent === NULL)
					{
						array_push($this->jsonErrors, "Syntax error while parsing structure schema '".$this->jsonContent->dataset->schema."', malformed JSON");
						
						return FALSE;		
					}
	
					array_push($structureSchemas, $parsedContent);
				}
			}
		}
		else
		{
			if(isset($this->jsonContent->dataset->schema))
			{
				array_push($structureSchemas, $this->jsonContent->dataset->schema);
			}
		}		
		
		// Now populate the schema object.
		foreach($structureSchemas as $structureSchema)
		{
			$structureSchema = $structureSchema->schema;
			$tempSchema = new StructureSchema();
			
			// Set version
			$tempSchema->setVersion($structureSchema->version);			

			// Set properties structureSchemas
			if(isset($structureSchema->attributeList))
			{
				foreach($structureSchema->attributeList as $property => $values)
				{
					$tempSchema->setPropertyX($property, $values->valueType, $values->format, $values->equivalentPropertyTo, $values->subPropertyOf);
				}
			}
			
			// Set types
			if(isset($structureSchema->typeList))
			{
				foreach($structureSchema->typeList as $type => $values)
				{
					$tempSchema->setTypeX($type, $values->mapTo, $values->equivalentTypeTo, $values->subTypeOf);
				}
			}

			array_push($this->structureSchemas, $tempSchema);
		}
		
		// Linkage Schemas
		$linkageSchemas = array();

		// Get the decoded schema
		if(gettype($this->jsonContent->dataset->linkage) != "object")
		{
			// It is a URL link to a linkage schema
			if(isset($this->jsonContent->dataset->linkage))
			{
				$data;

				foreach($this->jsonContent->dataset->linkage as $ls)
				{
					if(gettype($ls) != "object")
					{
						// It is a URL
						
						// Save the URL reference
						$this->dataset->setLinkageSchema($ls);
						
						$ch = curl_init();
						
						curl_setopt($ch, CURLOPT_URL, $ls);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
						
						$data = curl_exec($ch);
						
						if(curl_errno($ch) || $data == "") 
						{
							array_push($this->irjsonNotices, "Cannot access the linkage schema from: $ls - Ignored");
							curl_close($ch);
							continue;
						}
						
						$data = trim($data);
	
						curl_close($ch);
					}
					else
					{
						// It is an embedded linkage schema.
						array_push($linkageSchemas, $ls);
					}
				}

				if($data != "")
				{
					$parsedContent = json_decode($data);
	
					if($parsedContent === NULL)
					{
						array_push($this->jsonErrors, "Syntax error while parsing core linkage schema '".$url."', malformed JSON");
						
						return FALSE;		
					}
	
					array_push($linkageSchemas, $parsedContent);
				}
			}
		}
		else
		{
			if(isset($this->jsonContent->dataset->linkage))
			{
				array_push($linkageSchemas, $this->jsonContent->dataset->linkage);
			}
		}
		
		// Now populate the linkage schema object.
		foreach($linkageSchemas as $linkageSchema)
		{
			$tempSchema = new LinkageSchema();
			
			// Set version
			$tempSchema->setVersion($linkageSchema->version);			

			// Set linkedType
			$tempSchema->setLinkedType($linkageSchema->linkedType);
			
			// Set prefixes
			if(isset($linkageSchema->prefixList))
			{
				foreach($linkageSchema->prefixList as $prefix => $uri)
				{
					$tempSchema->setPrefix($prefix, $uri);
				}
			}
			
			// Set propertieslinkageSchemas
			if(isset($linkageSchema->attributeList))
			{
				foreach($linkageSchema->attributeList as $property => $values)
				{
					// Throw an error if mapTo is used without specifying a linkedType attribute.
					if(!isset($linkageSchema->linkedType) && isset($values->mapTo))
					{
						array_push($this->irjsonErrors, "A 'linkedType' attribute has to be defined for this schema since the 'mapTo' attribute is used in the schema.");					
					}
					
					$error = "";
					
					$tempSchema->setPropertyX($property, $values->mapTo, $error);
					
					if($error != "")
					{
						array_push($this->irjsonErrors, $error);
					}
				}
			}
			
			// Set types
			if(isset($linkageSchema->typeList))
			{
				foreach($linkageSchema->typeList as $type => $values)
				{
					$adds = array();
					
					if(isset($values->add))
					{
						foreach($values->add as $key => $value)
						{
							$adds[$key] = $value;
						}
					}
					
					$error = "";
					
					$tempSchema->setTypeX($type, $values->mapTo, $adds, $error);
					
					if($error != "")
					{
						array_push($this->irjsonErrors, $error);
					}
				}
			}
			
			array_push($this->linkageSchemas, $tempSchema);
		}

		$this->instanceRecords = array();

		foreach($this->jsonContent->recordList as $ir)
		{
			$instanceRecord = new InstanceRecord();

			// Set ID
			if(isset($ir->id))
			{
				$instanceRecord->setId($ir->id);
			}
			else
			{
				// Generate a random ID for that instance record
				$instanceRecord->setId(md5(microtime()));
			}

			// Set type
			if(isset($ir->type))
			{
				if(is_array($ir->type))
				{
					foreach($ir->type as $type)
					{
						$instanceRecord->setType($type, "array(string)");	
					}
				}
				else
				{
					$instanceRecord->setType($ir->type, "string");
				}
			}
			else
			{
				$instanceRecord->setType("thing", "string");
			}
			
			// Set label
			if(is_array($ir->prefLabel))
			{
				foreach($ir->prefLabel as $label)
				{
					$instanceRecord->setLabel($label, "string");
					array_push($this->irjsonNotices, "Attribute 'prefLabel' can't have an array as value. First item of the array is used as the string for label, other items are ignored.");
					break;	
				}
			}
			else
			{
				$instanceRecord->setLabel($ir->prefLabel, "string");
			}

			// set Meta
			if(isset($ir->meta))
			{
				array_push($this->irjsonNotices, "Attribute 'meta' not currently supported. Ignored.");
			}

			// Set altLabel
			if(is_array($ir->altLabel))
			{
				foreach($ir->altLabel as $altLabel)
				{
					$instanceRecord->setAltLabel($altLabel, "array(string)");	
				}
			}
			else
			{
				$instanceRecord->setAltLabel($ir->altLabel, "string");
			}

			
			// Set description
			$instanceRecord->setDescription($ir->description);
			
			// Set attributeX
			foreach($ir as $attribute => $value)
			{
				if(	$attribute != "id" &&
					$attribute != "type" &&
					$attribute != "prefLabel" &&
					$attribute != "altLabel" &&
					$attribute != "description")
				{

					// Check if we have an array of something
					if(is_array($ir->{$attribute}))
					{
						foreach($ir->{$attribute} as $arrayValue)
						{
							if(gettype($arrayValue) == "string")
							{
								$instanceRecord->setAttributeX($attribute, $arrayValue, "array(string)");
							}
							
							if(gettype($arrayValue) == "object")
							{
								$instanceRecord->setAttributeXRef($attribute, $arrayValue->prefLabel, $arrayValue->prefURL, $arrayValue->ref, "array(object)");
							}
						}		
					}
					else
					{
						if(gettype($value) == "string")
						{
							$instanceRecord->setAttributeX($attribute, $value, "string");							
						}
						
						if(gettype($value) == "object")
						{
							$instanceRecord->setAttributeXRef($attribute, $value->prefLabel, $value->prefURL, $value->ref, "object");
						}
					}
				}	
			}	

			array_push($this->instanceRecords, $instanceRecord);
		}
		
		// Now lets validate the types of the values of the attributes that have been parsed.
			
		// Dataset types.
		
		foreach($this->dataset as $property => $value)
		{
			if($this->dataset->getValueType($property) === FALSE)
			{
				// Property not defined.
				continue;
			}
			
			$possibleTypes = array();
			$defined = FALSE;

			foreach($this->structureSchemas as $structureSchema)
			{
				$validType = FALSE;
				
				if($structureSchema->getPropertyTypes($property) !== FALSE)
				{
					$defined = TRUE;
					foreach($structureSchema->getPropertyTypes($property) as $valueType)
					{
						// array(object) and object; and; array(string) and string are the same types
						$t = $valueType;
						
						if(strpos($t, "array") !== FALSE)
						{
							$t = substr($t, 6, strlen($t) - 7);
						}

						$prop = $this->dataset->getValueType($property);

						if(strpos($prop, "array") !== FALSE)
						{
							$prop = substr($prop, 6, strlen($prop) - 7);
						}
						
						if($t == $prop)
						{
							// The type of the value has been validated by one of the structure schema.
							$validType = TRUE;
							break;
						}
					
						array_push($possibleTypes, $valueType);
					}
				}
				
				if($validType){ break; }		
			}

			if($validType === FALSE && $defined === TRUE)
			{
				// The type of the value is not valid according to the structure schemas.
				array_push($this->irjsonErrors, "Dataset property '".$property."' with value type '".$this->dataset->getValueType($property)."' is not valid according to the definition of the structure schema (should be one of: ".$this->listTypes($possibleTypes)." )");					
			}
				
			if($defined === FALSE)
			{
				// The type of the value is not valid according to the structure schemas.
				array_push($this->irjsonNotices, "Dataset property '".$property."' used without being part of the core structure schema.)");					
			}	
		}
		
		// Instance Record types

		foreach($this->instanceRecords as $key => $instanceRecord)
		{
			foreach($instanceRecord as $attribute => $value)
			{
				if($attribute == "attributeList")
				{
					foreach($value as $attr => $val)
					{
						if($instanceRecord->getValueType($attr) === FALSE)
						{
							// Property not defined.
							continue;
						}
						
						$this->validateAttributeType($instanceRecord, $attr);
					}
				}
				else
				{
					if($instanceRecord->getValueType($attribute) === FALSE)
					{
						// Property not defined.
						continue;
					}

					$this->validateAttributeType($instanceRecord, $attribute);
				}
			}	
		}
	}
	
	/*!	 @brief Validate an attribute type based on the structure schema linked to the dataset.
							
			\n
			
			@param[in] $instanceRecord Instance record to validate
			@param[in] $attribute Attribute name to validate
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/		
	private function validateAttributeType(&$instanceRecord, $attribute)
	{
		$possibleTypes = array();
		$defined = FALSE;		
		
		foreach($this->structureSchemas as $structureSchema)
		{
			$validType = FALSE;
			
			if($structureSchema->getPropertyTypes($attribute) !== FALSE)
			{
				$defined = TRUE;
				foreach($structureSchema->getPropertyTypes($attribute) as $valueType)
				{
					// array(object) and object; and; array(string) and string are the same types
					$t = $valueType;
					
					if(strpos($t, "array") !== FALSE)
					{
						$t = substr($t, 6, strlen($t) - 7);
					}

					$prop = $instanceRecord->getValueType($attribute);

					if(strpos($prop, "array") !== FALSE)
					{
						$prop = substr($prop, 6, strlen($prop) - 7);
					}					
					
					if($t == $prop)
					{
						// The type of the value has been validted by one of the structure schema.
						$validType = TRUE;
						break;
					}
						
					array_push($possibleTypes, $valueType);
				}		
			}
			
			if($validType){ break; }		
		}

		if($validType === FALSE && $defined === TRUE)
		{
			// The type of the value is not valid according to the structure schemas.
			array_push($this->irjsonErrors, "Instance record attribute '".$attribute."' with value type '".$instanceRecord->getValueType($attribute)."' is not valid according to the definition of the structure schema (should be one of: ".$this->listTypes($possibleTypes)." )");
		}
		
		if($defined === FALSE)
		{
			// The type of the value is not valid according to the structure schemas.
			array_push($this->irjsonNotices, "Instance record attribute '".$attribute."' used without being part of the structure schema.)");					
		}	
		
		
		return($validType);				
	}
	
	/*!	 @brief List all types of a types list and seperate each item with a comma.
							
			\n
			
			@param[in] $types An array of type names
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/		
	private function listTypes($types)
	{
		$typeStr = "";
		
		foreach($types as $type)
		{
			$typeStr .= $type.", ";
		}
		
		return(substr($typeStr, 0, strlen($typeStr) - 2));
	}
}


?>