<?php

/*!	 @brief Structure Schema item description
						
		\n
		
		@author Frederick Giasson, Structured Dynamics LLC.
	
		\n\n\n
*/

class StructureSchema
{
	/*! @brief Version of the linkage schema */				
	public $version;
	
	/*! @brief List of atributes linked by the schema */				
	public $attributeList = array();
	
	/*! @brief List of types linked by the schema */				
	public $typeList = array();
	
	/*!	 @brief Set the value of the version
							
			\n
			
			@param[in] $version Version of the linkage schema
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/	
	public function setVersion($version)
	{
		$this->version = $version;
	}


	/*!	 @brief Define an attribute in the structure schema
							
			\n
			
			@param[in] $property Attribute name to be described
			@param[in] $valueType Expected type of the value
			@param[in] $format Expected format of the balue
			@param[in] $equivalentPropertyTo Equivalent property relationships
			@param[in] $subPropertyOf Sub-property relationships
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/	
	public function setPropertyX($property, $valueType, $format, $equivalentPropertyTo, $subPropertyOf)
	{
		$this->addProperty($this->attributeList[$property], $valueType, $format, $equivalentPropertyTo, $subPropertyOf);			
	}

	/*!	 @brief Define a type in the structure schema
							
			\n
			
			@param[in] $type Attribute name to be described
			@param[in] $equivalentTypeTo Equivalent type relationships
			@param[in] $subTypeOf Sub-type relationships
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/	
	public function setTypeX($type, $equivalentTypeTo, $subTypeOf)
	{
		$this->addType($this->typeList[$type], $equivalentTypeTo, $subTypeOf);			
	}

	private function addProperty(&$property, $valueType, $format, $equivalentPropertyTo, $subPropertyOf)
	{
		if(!is_array($property))
		{
			$property = array(array("valueType" => $valueType, "format" => $format, "equivalentPropertyTo" => $equivalentPropertyTo, "subPropertyOf" => $subPropertyOf));
		}
		else
		{
			array_push($property, array("valueType" => $valueType, "format" => $format, "equivalentPropertyTo" => $equivalentPropertyTo, "subPropertyOf" => $subPropertyOf));
		}
	}
	
	private function addType(&$type, $equivalentTypeTo, $subTypeOf)
	{
		if(!is_array($type))
		{
			$type = array(array("equivalentPropertyTo" => $equivalentPropertyTo, "subPropertyOf" => $subPropertyOf));
		}
		else
		{
			array_push($type, array("equivalentPropertyTo" => $equivalentPropertyTo, "subPropertyOf" => $subPropertyOf));
		}
	}
	
	public function getPropertyTypes($property)
	{
		// Only one type which is not an array in JSON.
		if(!is_array($this->attributeList[$property][0]["valueType"]) && $this->attributeList[$property][0]["valueType"] != "")
		{
			return array($this->attributeList[$property][0]["valueType"]);
		}
		
		if(count($this->attributeList[$property][0]["valueType"]) > 0)
		{
			return($this->attributeList[$property][0]["valueType"]);
		}
		
		return(FALSE);
	}
}

?>