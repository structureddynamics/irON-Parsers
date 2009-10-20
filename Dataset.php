<?php


/*!	 @brief Dataset item description
						
		\n
		
		@author Frederick Giasson, Structured Dynamics LLC.
	
		\n\n\n
*/
class Dataset
{
	/*! @brief ID of the dataset. The ID of a dataset is used to create the global reference of local records belonging to the dataset. */			
	public $id;

	/*! @brief Preferred label to refer to this dataset */				
	public $prefLabel = "";

	/*! @brief Alternative labels to refer to this dataset  */				
	public $altLabel;

	/*! @brief Description of the dataset */				
	public $description;

	/*! @brief Sources of the dataset */				
	public $source;

	/*! @brief Creation date of the dataset */				
	public $createDate;

	/*! @brief Creators of the dataset */				
	public $creator;

	/*! @brief Curators of the dataset */				
	public $curator;

	/*! @brief Maintainers of the dataset */				
	public $maintainer;

	/*! @brief Linkage schema related to this dataset */				
	public $linkage;

	/*! @brief Structure schema related to this dataset */				
	public $structure;

	/*!	 @brief Set the value of the ID
							
			\n
			
			@param[in] $id ID of the dataset
			
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
	
	/*!	 @brief Set the value of the prefLabel
							
			\n
			
			@param[in] $prefLabel Preferred label of the dataset
			@param[in] $valueType Value type of the label value
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/	
	public function setLabel($prefLabel, $valueType="string")
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
	
	/*!	 @brief Set the source(s) of the dataset
							
			\n
			
			@param[in] $prefLabel MetaData: preferred label of the source
			@param[in] $prefURL MetaData: preferred URL of the source
			@param[in] $ref Reference to the local or global ID of the source
			@param[in] $valueType Value type of the source value
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/		
	public function setSource($prefLabel, $prefURL, $ref, $valueType)
	{
		$this->addRef($this->source, $prefLabel, $prefURL, $ref, $valueType);
	}
	
	/*!	 @brief Set the value of the creation date
							
			\n
			
			@param[in] $createDate Creation date of the dataset
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/		
	public function setCreateDate($createDate)
	{
		if($createDate != "")
		{
			$this->createDate = array($createDate);

			$this->createDate["valueType"] = "string";
		}
	}
	
	/*!	 @brief Set the creator(s) of the dataset
							
			\n
			
			@param[in] $prefLabel MetaData: preferred label of the creator
			@param[in] $prefURL MetaData: preferred URL of the creator
			@param[in] $ref Reference to the local or global ID of the creator
			@param[in] $valueType Value type of the creator value
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/			
	public function setCreator($prefLabel, $prefURL, $ref, $valueType)
	{
		$this->addRef($this->creator, $prefLabel, $prefURL, $ref, $valueType);
	}
	
	/*!	 @brief Set the curator(s) of the dataset
							
			\n
			
			@param[in] $prefLabel MetaData: preferred label of the curator
			@param[in] $prefURL MetaData: preferred URL of the curator
			@param[in] $ref Reference to the local or global ID of the curator
			@param[in] $valueType Value type of the curator value
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/		
	public function setCurator($prefLabel, $prefURL, $ref)
	{
		$this->addRef($this->curator, $prefLabel, $prefURL, $ref, $valueType);
	}
	
	/*!	 @brief Set the maintainer(s) of the dataset
							
			\n
			
			@param[in] $prefLabel MetaData: preferred label of the maintainer
			@param[in] $prefURL MetaData: preferred URL of the maintainer
			@param[in] $ref Reference to the local or global ID of the maintainer
			@param[in] $valueType Value type of the maintainer value
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/		
	public function setMaintainer($prefLabel, $prefURL, $ref, $valueType)
	{
		$this->addRef($this->maintainer, $prefLabel, $prefURL, $ref, $valueType);
	}
	
	/*!	 @brief Set the linkage schema(s) related to this dataset
							
			\n
			
			@param[in] $linkageSchema preferred label of the maintainer
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/		
	public function setLinkageSchema($linkageSchema)
	{
		if($linkage != "")
		{
			$this->linkage = array($linkage);

			$this->linkage["valueType"] = "array(string)";
		}
	}
	
	/*!	 @brief Set the structure schema(s) related to this dataset
							
			\n
			
			@param[in] $structure preferred label of the maintainer
			
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/		
	public function setStructureSchema($structure)
	{
		if($structure != "")
		{
			$this->structure = array($structure);

			$this->structure["valueType"] = "string";
		}
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
			return(FALSE);
		}
	}
}

?>