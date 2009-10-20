<?php

/*!	 @brief Instance Record item description
						
		\n
		
		@todo Enhance setAttributeXRef() to be able to define other MetaData attributes than prefLabel and prefURL.
		
		@author Frederick Giasson, Structured Dynamics LLC.
	
		\n\n\n
*/
class InstanceRecord
{
	/*! @brief Local ID of the instance record */				
	public $id;
	
	/*! @brief Type of the instance record */				
	public $type;
	
	/*! @brief Preferred label of the instance record */				
	public $prefLabel = "";
	
	/*! @brief Description of the instance record */				
	public $description;
	
	/*! @brief List of attributes describing the instance record */				
	public $attributeList = array();

	/*!	 @brief Set the value of the ID
							
			\n
			
			@param[in] $id ID of the instance record
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/	
	public function setId($id)
	{
		if($id != "")
		{
			$this->id = array($id);

			$this->id["valueType"] = "string";
		}
	}

	/*!	 @brief Set the value of the type
							
			\n
			
			@param[in] $type Type of the instance record
			@param[in] $valueType Value type of the type value (generally "string" or "array(string)")
			
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/	
	public function setType($type, $valueType)
	{
		// case unsensitive;
		//$type = strtolower($type);
				
		if($type != "")
		{	
			if(!is_array($this->type))
			{		
				$this->type = array($type);
			}
			else
			{
				array_push($this->type, $type);
			}	
			
			$this->type["valueType"] = $valueType;
		}
	}
	
	/*!	 @brief Set the value of the prefLabel
							
			\n
			
			@param[in] $prefLabel Preferred label of the dataset
			@param[in] $valueType Value type of the label value
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/		
	public function setLabel($prefLabel, $valueType)
	{
		if($prefLabel != "" && $this->prefLabel == "")
		{		
			$this->prefLabel = array($prefLabel);
			
			$this->prefLabel["valueType"] = $valueType;
		}
	}

	/*!	 @brief Set the value of the altLabel
							
			\n
			
			@param[in] $altLabel Alternative label(s) to refer to this dataset
			@param[in] $valueType Value type of the label value (normally one of: "string" or "array(string)"
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/	
	public function setAltLabel($altLabel, $valueType)
	{
		if($altLabel != "")
		{		
			if(!is_array($this->altLabel))
			{		
				$this->altLabel = array($altLabel);
			}
			else
			{
				$this->altLabel = array($altLabel);
			}
			
			$this->altLabel["valueType"] = $valueType;
		}
	}
	
	/*!	 @brief Set the value of the description
							
			\n
			
			@param[in] $description Description of the dataset
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/			
	public function setDescription($description)
	{
		if($description != "")
		{
			$this->description = array($description);

			$this->description["valueType"] = "string";
		}
	}
	
	/*!	 @brief Set an attribute/value pairs describing the instance record
							
			\n
			
			@param[in] $attr Attribute to be added
			@param[in] $value Value of the attribute
			@param[in] $valueType Type of the value
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/			
	public function setAttributeX($attr, $value, $valueType)
	{
		if($value != "")
		{
			if(!is_array($this->attributeList[$attr]))
			{		
				$this->attributeList[$attr] = array($value);
			}
			else
			{
				array_push($this->attributeList[$attr], $value);
			}
			
			$this->attributeList[$attr]["valueType"] = $valueType;
		}
	}	

	/*!	 @brief Set an attribute/value pairs describing the instance record, where the value is a reference
							
			\n
			
			@param[in] $attr Attribute to be added
			@param[in] $prefLabel MetaData: preferred label of the referred instance record
			@param[in] $prefURL MetaData: preferred URL of the referred instance record
			@param[in] $ref Local or global referrence to the instance record
			@param[in] $valueType Type of the value of the property (usually object or array(object))
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/			
	public function setAttributeXRef($attr, $prefLabel, $prefURL, $ref, $valueType)
	{
		$this->addRef($this->attributeList[$attr], $prefLabel, $prefURL, $ref, $valueType);			
	}

	/*!	 @brief Create a reference to a source, creator, curator or maintenainer of a dataset
							
			\n
			
			@param[in] $prefLabel MetaData: preferred label of the reference
			@param[in] $prefURL MetaData: preferred URL of the reference
			@param[in] $ref Reference to the local or global ID of the reference
			@param[in] $valueType Value type of the reference value
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/		
	private function addRef(&$attr, $prefLabel, $prefURL, $ref, $valueType)
	{
		if($prefLabel != "" || $prefURL != "" || $ref != "")
		{		
			if(!is_array($attr))
			{
				$attr = array(array("prefLabel" => $prefLabel, "prefURL" => $prefURL, "ref" => $ref));
			}
			else
			{
				array_push($attr, array("prefLabel" => $prefLabel, "prefURL" => $prefURL, "ref" => $ref));
			}
			
			$attr["valueType"] = $valueType;
		}
	}
	
	/*!	 @brief Get the valueType of an attribute
							
			\n
			
			@param[in] $property Target property you want to get the valueType
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/		
	public function getValueType($property)
	{
		if(isset($this->{$property}["valueType"]))
		{
			return($this->{$property}["valueType"]);
		}
		else
		{
			// Check if it is part of "attributeList"
			if(isset($this->{"attributeList"}[$property]["valueType"]))
			{
				return($this->{"attributeList"}[$property]["valueType"]);
			}

			return(FALSE);
		}
	}
}

?>