<?php

	/*!	 @brief commON serialization parsing class
			 @details This class will parse a commON CSV file and parse it to extract commON instance records.
							
			\n

			@todo Implementing the "&&dataset" processing keyword
			@todo Implementing the "metaFile" keyword
			@todo Implementing the structure Schema & "schema" keyword
			@todo Implementing the "listSeparator" keyword
			@todo Implementing the "listSeparatorEscape" keyword
			@todo Implementing the "seqNum" keyword
		
			@author Frederick Giasson, Structured Dynamics LLC.
		
			\n\n\n
	*/	
	class CommonParser
	{
		/*! @brief All CSV records extracted from the CSV file */
		
		/*
		 
		 	The structure of this variable looks like:
		 	
			Array
			(
			    [0] => &&recordList
			)
			Array
			(
			    [0] => &id
			    [1] => &type
			    [2] => &prefLabel
			    [3] => &homepage
			    [4] => &authorClaimsPage
			    [5] => &isAuthorOfTitle
			    [6] => &isAuthorOfTitle&prefURL
			)
			Array
			(
			    [0] => info:lib:am:2009-02-18:maria_francisca_abad_garcia
			    [1] => Person
			    [2] => Maria Francisca Abad-Garcia
			    [3] =>
			    [4] => http://authorclaim.org/profile/pab1/
			    [5] => Acceso Abierto y revistas médicas españolas
			    [6] => http://eprints.rclis.org/11490/1/open_acces_Medicina_Cl%C3%ADnica_2006_versi%C3%B3n_aceptada_del_autor.pdf
			)
		 	
		 	...
		 	
		 	The "&&recordList" processor keyword tells the parser that a recordList is introduced.
		 	
		 	Then you have the CSV column structure that tels the parser how to recreate the key/value pairs
		 	
		 	And then you have a series of records.

		 */
		private $csvRecords = array();
		
		/*! @brief Array with all parsed commON records */
		
		/*
		 	The structure looks like:
		 	
			Array
			(
			    [0] => Array
			        (
			            [&id] => Array
			                (
			                    [0] => Array
			                        (
			                            [value] => info:lib:am:2009-02-18:maria_francisca_abad_garcia
			                            [reify] =>
			                        )
			
			                )
			
			            [&type] => Array
			                (
			                    [0] => Array
			                        (
			                            [value] => Person
			                            [reify] =>
			                        )
			
			                )
			
			            [&prefLabel] => Array
			                (
			                    [0] => Array
			                        (
			                            [value] => Maria Francisca Abad-Garcia
			                            [reify] =>
			                        )
			
			                )

                        [&homepage] => Array
			                (
			                    [0] => Array                        
			                        (
			                            [value] => Personal Data in a Large Digital Library.
			                            [reify] => Array
			                                (
			                                    [&prefURL] => Array
			                                        (
			                                            [0] => http://dblp.uni-trier.de/db/conf/ercimdl/ecdl2000.html#CruzKK00
			                                        )
			
			                                )
			
			                        )
							)
			                
						...
					)
					
				...
			
			)
			
			Where the first array is an array of records. Then for each record item, you have a list of attributes. Each attribute
			is a list of values. Then each value is an array with two keys: "value" and "reify". "value" is the value of the triple:
			<record> <attribute> <value>. "reify" is an array of meta data (reifications) attribute/value pairs about the triple
			statement.
		 	
		*/
		private $commonRecords = array();
		
		/*! @brief Array describing the linkage schema (if defined) of a commON file */
		
		/*

			The structure of this variable looks like:
			
			Array
			(
			    [description] => Array
			        (
			            [&version] => Array
			                (
			                    [0] => 0.1
			                )
			
			            [&linkageType] => Array
			                (
			                    [0] => rdf
			                )
			
			        )
			
			    [properties] => Array
			        (
			            [0] => Array
			                (
			                    [&attributeList] => Array
			                        (
			                            [0] => prefLabel
			                        )
			
			                    [&mapTo] => Array
			                        (
			                            [0] => http://www.w3.org/2000/01/rdf-schema#label
			                        )
			
			                )
			
			            [1] => Array
			                (
			                    [&attributeList] => Array
			                        (
			                            [0] => homepage
			                        )
			
			                    [&mapTo] => Array
			                        (
			                            [0] => http://xmlns.com/foaf/0.1/homepage
			                        )
			
			                )
			
			            [2] => Array
			                (
			                    [&attributeList] => Array
			                        (
			                            [0] => prefURL
			                        )
			
			                    [&mapTo] => Array
			                        (
			                            [0] => http://purl.org/ontology/bibo/uri
			                        )
			
			                )
			
			        )
			
			    [types] => Array
			        (
			            [0] => Array
			                (
			                    [&typeList] => Array
			                        (
			                            [0] => Person
			                        )
			
			                    [&mapTo] => Array
			                        (
			                            [0] => http://xmlns.com/foaf/0.1/Person
			                        )
			
			                )
			
			        )
			
			)
			

		 */
		private $commonLinkageSchema = array();
		
		/*! @brief Parsing errors stack */
		private $errors = array();
		
		/*!	 @brief Constructor. It takes the commON CSV file content as input.
								
				\n
				
				@param[in] $content commON CSV file content
				
				@author Frederick Giasson, Structured Dynamics LLC.
			
				\n\n\n
		*/			
		function __construct($content)
		{
			$this->content = $content;
			
			// Parse the CSV file
			$this->csvParser();
			
			// Parse the commON records
			$this->commonParser();
		}
		
		/*!	 @brief Returns the array of records parsed from the CSV file
								
				\n
				
				@return returns an array of records.
				
				@author Frederick Giasson, Structured Dynamics LLC.
			
				\n\n\n
		*/			
		public function getCsvRecords()
		{
			return($this->csvRecords);
		}

		
		/*!	 @brief Returns the array of parsed commON records
								
				\n
				
				@return returns an array of commON records.
				
				@author Frederick Giasson, Structured Dynamics LLC.
			
				\n\n\n
		*/			
		public function getCommonRecords()
		{
			return($this->commonRecords);
		}
		
		/*!	 @brief Returns the array of the parsed linkage schema.
								
				\n
				
				@return returns an array of the parsed linkage schema
				
				@author Frederick Giasson, Structured Dynamics LLC.
			
				\n\n\n
		*/			
		public function getLinkageSchema()
		{
			return($this->commonLinkageSchema);
		}		

		/*!	 @brief Check for errors
								
				\n
				
				@return Return FALSE if no errors; returns an array of error messages if any.
				
				@author Frederick Giasson, Structured Dynamics LLC.
			
				\n\n\n
		*/			
		public function getErrors()
		{
			if(count($this->errors) == 0)
			{
				return(FALSE);
			}
			
			return($this->errors);
		}
		
		/*!	 @brief Parse a CSV files to produce the structure used by the commonParser function.
								
				\n
				
				@author Frederick Giasson, Structured Dynamics LLC.
			
				\n\n\n
		*/			
		private function csvParser()
		{
			/*! @brief Index pointing to the begenning of a record in the CSV file string */
			$startRecord = 0;

			/*! @brief Index pointing to the end of a record in the CSV file string */
			$endRecord = 0;

			/*! @brief Tells the parser if we started to parse the CSV file */
			$start = TRUE;
			
			/*! @brief A single record that get extracted from the CSV file */
			
			/*
				The structure of this record looks like:
				
				Array
				(
				    [0] => info:lib:am:2009-02-18:maria_francisca_abad_garcia
				    [1] => Person
				    [2] => Maria Francisca Abad-Garcia
				    [3] =>
				    [4] => http://authorclaim.org/profile/pab1/
				    [5] => Acceso Abierto y revistas médicas españolas
				    [6] => http://eprints.rclis.org/11490/1/open_acces_Medicina_Cl%C3%ADnica_2006_versi%C3%B3n_aceptada_del_autor.pdf
				)

				Each keys refer to columns description such as:

				Array
				(
				    [0] => &id
				    [1] => &type
				    [2] => &prefLabel
				    [3] => &homepage
				    [4] => &authorClaimsPage
				    [5] => &isAuthorOfTitle
				    [6] => &isAuthorOfTitle&prefURL
				)
				
			 	Key/value pairs can be recreated by binding the keys,  such as: "&type -> Person"
			 	
			 */
			$record = array();
			
			/*! @brief Check if a string is in double quotes (necessary for proper escaping) */			
			$inDoubleQuotes = FALSE;
			
			// Remove all extra carrier return. We normalize with "\r"
			$this->content = preg_replace("/[\r\n]+/", "\r", $this->content);
			
			// First initial and final spaces within double quotes to fix issues introduced by OpenOffice
			$this->content = str_replace(array('" ', ' "'), '"', $this->content);
			
			for($i = 0; $i < strlen($this->content); $i++)
			{
				if($inDoubleQuotes)
				{
					// If we are in double quotes, we get everything until we read the other double quotes.
					if($this->content[$i] == '"')
					{
						// check if the next char is another double quote, if it is, we ignore it
						if($this->content[$i+1] != '"')
						{
							$inDoubleQuotes = FALSE;
	
							// Check if the next character is a comma, or a return charrier. If it is not, we got an error
							if(($this->content[$i+1] != "," && ($this->content[$i+1] == " " && $this->content[$i+2] != ",")) &&
							   ($this->content[$i+1] != "\r" && ($this->content[$i+1] == " " && $this->content[$i+2] != "\r")))
							{
								array_push($this->errors, "CSV parser: A comma or a return carrier is expected after an un-escaped double quotes.");
								return;
							}
						}
						else
						{
							// We move the pointer to skip the next double quote
							$i++;	
						}
					}
				}
				elseif($start && substr($this->content, 0, 1) == '"')
				{
					// First thing we have to check is if we start with double quotes
					$inDoubleQuotes = TRUE;
					
					$startRecord++;
					$start = FALSE;
				}
				else
				{
					// If we are not in double quotes, we get everything until we reach a comma or a line break.
					if(($this->content[$i] == "\n") || ($this->content[$i] == "\r") || ($this->content[$i] == "\r" && $this->content[$i+1] == "\n"))
					{
						// add the last value of the record
						// remove ending space if existing
						if($this->content[$i-1] == " ")
						{
							if($this->content[$i-2] == '"')
							{
								$endRecord = $i-2;
							}
							else
							{
								$endRecord = $i-1;
							}
						}
						else
						{
							if($this->content[$i-1] == '"')
							{
								$endRecord = $i-1;
							}
							else
							{
								$endRecord = $i;
							}
						}
						
						array_push($record, str_replace('""', '"', substr($this->content, $startRecord, ($endRecord - $startRecord))));
	
						// remove leading space if existing
						if($this->content[$i+1] == " ")
						{					
							$startRecord = $i+2;
						}
						else
						{
							$startRecord = $i+1;
						}					
	
						
						// Add this new record to the records list
						array_push($this->commonRecords, $record);
						$record = array();
						
						if($this->content[$i] == "\r" && $this->content[$i+1] == "\n")
						{
							$i++;
						}	
					}
					elseif($this->content[$i] == ",")
					{
						// remove ending space if existing
						if($this->content[$i-1] == " ")
						{
							if($this->content[$i-2] == '"')
							{
								$endRecord = $i-2;
							}
							else
							{
								$endRecord = $i-1;
							}
						}
						else
						{
							if($this->content[$i-1] == '"')
							{
								$endRecord = $i-1;
							}
							else
							{
								$endRecord = $i;
							}
						}
						
						array_push($record, str_replace('""', '"', substr($this->content, $startRecord, ($endRecord - $startRecord))));
						
						// remove leading space if existing
						if($this->content[$i+1] == " ")
						{					
							$startRecord = $i+2;
						}
						else
						{
							$startRecord = $i+1;
						}
					}
					elseif($this->content[$i] == '"')
					{
						
						if($this->content[$i-1] == " ")
						{
							if($this->content[$i-2] == ",")
							{
								$inDoubleQuotes = TRUE;
								$startRecord = $i+1;
							}
							else
							{
								array_push($this->errors, "CSV parser: An un-escaped double quote has been detected.");
								return;
								
							}
						}
						else
						{
							if($this->content[$i-1] == "," || $this->content[$i-1] == "\r")
							{
								$inDoubleQuotes = TRUE;
								$startRecord = $i+1;
							}
							else
							{	
								array_push($this->errors, "CSV parser: An un-escaped double quote has been detected (around: '... ".str_replace(array("\n", "\r"), " ", substr($this->content, $i-5, 10))." ... (char #$i)').");
								return;
							}					
						}
					}
				}
			}			
		}
		
		/*!	 @brief Create the commON records form the parsed CSV records
								
				\n
				
				@author Frederick Giasson, Structured Dynamics LLC.
			
				\n\n\n
		*/	
		private function commonParser()
		{
			/*! @brief Check what is the current section being processed: (1) record, (2) dataset or (3) linkage */			
			$currentSection = "";
			
			/*! @brief Reference on the current record being processed */			
			$currentRecord = "";
			
			/*! @brief A commON record description */			
			$commonRecord = array();
	
			/*! @brief The record structure where to match commON record descriptions to their values */			
			$recordStructure = array();

			$shouldBeRecordDescription = FALSE;
			
			foreach($this->commonRecords as $record)
			{
				// Check for blank lines.
				$blank = TRUE;
				
				foreach($record as $value)
				{
					if($value != "")
					{
						$blank = FALSE;
						break;
					}				
				}
				
				// If we have a blank line, with skip it and continue
				if($blank)
				{
					continue;
				}
				
				// Change the section pointer.
				if($record[0][0] == "&" && $record[0][1] == "&")
				{
					switch($record[0])
					{
						case "&&recordList":
							$currentSection = "record";
							$shouldBeRecordDescription = TRUE;
						break;
						case "&&dataset":
							$currentSection = "dataset";
						break;
						case "&&linkage":
							$currentSection = "linkage";
							$shouldBeRecordDescription = TRUE;
						break;
						
						default:
							return("Unknown section $record[0]");
						break;
					}
				}
				else
				{	
					if($shouldBeRecordDescription === FALSE && $currentSection == "linkage" && $record[0][0] == "&")
					{
						// We are expecting the description of a commonRecord
						$shouldBeRecordDescription = TRUE;
					}
					
					if($shouldBeRecordDescription)
					{
						$recordStructure = array();
						
						// Lets define the record structure for the next records to parse
						foreach($record as $property)
						{
							if($property != "")
							{
								if($property[0] == "&")
								{
									array_push($recordStructure, $property);
								}
								else
								{
									array_push($this->errors, "commON Parser: A record structure property has been defined without starting with '&' ($property)");
									return;
								}
							}
						}
						
						if(count($recordStructure) <= 0)
						{
							array_push($this->errors, "commON Parser: No properties defined for this record structure");
							return;
						}
						
						$shouldBeRecordDescription = FALSE;
					}
					else
					{
						// Depending on the processing section, we populate different parsing structures
						switch($currentSection)
						{
							// We are parsing a record.
							case "record":
								if(count($recordStructure) > count($record))
								{
									// Pad the record with empty properties values
									for($i = 0; $i < (count($recordStructure) - count($record)); $i++)
									{
										array_push($record, "");
									}	
								}
								
								if(count($recordStructure) < count($record))
								{
									array_push($this->errors, "commON Parser: Too many properties defined for the record according to the record structure");
									return;
								}
								
								foreach($recordStructure as $key => $rs)
								{
									if($rs == "&id")
									{
										if($currentRecord != $record[$key] && $record[$key] != "")
										{
											if($currentRecord == "")
											{
												// Change the reference
												$currentRecord = $record[$key];
												
												// Set th ID
												$commonRecord[$rs] = array(array("value" => $record[$key], "reify" => ""));
											}
											else
											{
												// Change the reference
												$currentRecord = $record[$key];
												
												// Archive the record before processing the next one
												array_push($this->commonRecords, $commonRecord);
												
												// Reinitialize the commRecord structure
												$commonRecord = array();
												
												// Set th ID
												$commonRecord[$rs] = array(array("value" => $record[$key], "reify" => ""));
											}
										}
									}
									// Check if it is a reification attribute
									elseif(($reifiedAttribute = $this->getReifiedAttribute($rs)) !== FALSE)	
									{
										if(isset($commonRecord[$reifiedAttribute["attribute"]]))
										{
											if(strpos($record[$key], "|") === FALSE)
											{
												$reificationStatementId = count($commonRecord[$reifiedAttribute["attribute"]]) - 1;
												
												if($record[$key] != "")
												{
													if(is_array($commonRecord[$reifiedAttribute["attribute"]][$reificationStatementId]["reify"]))
													{
														array_push(	$commonRecord[$reifiedAttribute["attribute"]][$reificationStatementId]["reify"][$reifiedAttribute["reifiedAttribute"]], 
																			$record[$key]);	
													}
													else
													{
														$commonRecord[$reifiedAttribute["attribute"]][$reificationStatementId]["reify"][$reifiedAttribute["reifiedAttribute"]] = array($record[$key]);
													}
												}
											}
											else
											{
												if(is_array($commonRecord[$reifiedAttribute["attribute"]]["reify"]))
												{
													$commonRecord[$reifiedAttribute["attribute"]]["reify"] = array();
												}
												
												$vs = explode("|", $record[$key]);
												
												foreach($vs as $v)
												{
													array_push($commonRecord[$reifiedAttribute["attribute"]]["reify"], $v);
												}
											}										
										}
									}
									else
									{
										if(strpos($record[$key], "|") === FALSE)
										{
											if($record[$key] != "")
											{
												if(is_array($commonRecord[$rs]))
												{
													array_push($commonRecord[$rs], array("value" => $record[$key], "reify" => ""));	
												}
												else
												{
													$commonRecord[$rs] = array(array("value" => $record[$key], "reify" => ""));
												}
											}
										}
										else
										{
											if(is_array($commonRecord[$rs]))
											{
												$commonRecord[$rs] = array();
											}
											
											$vs = explode("|", $record[$key]);
											
											foreach($vs as $v)
											{
												array_push($commonRecord[$rs], array("value" => $v, "reify" => ""));
											}
										}
									}
								}
							break;
							
							// We are parsing a linkage schema
							case "linkage":
								if(array_search("&attributeList", $recordStructure) !== FALSE)
								{
									// Description of the linkage schema.
									if(count($recordStructure) > count($record))
									{
										// Pad the record with empty properties values
										for($i = 0; $i < (count($recordStructure) - count($record)); $i++)
										{
											array_push($record, "");
										}	
									}
									
									if(count($recordStructure) < count($record))
									{
										array_push($this->errors, "commON Parser: Too many properties defined for the record according to the linkage schema record structure");
										return;
									}
	
									if(!is_array($this->commonLinkageSchema["properties"]))
									{
										$this->commonLinkageSchema["properties"] = array();	
									}
	
									$propertiesRecord = array();
									foreach($recordStructure as $key => $rs)
									{
										if(strpos($record[$key], "|") === FALSE)
										{
											$propertiesRecord[$rs] = array($record[$key]);
										}
										else
										{
											$propertiesRecord[$rs] = explode("|", $record[$key]);
										}
									}
									
									array_push($this->commonLinkageSchema["properties"], $propertiesRecord);
								}
								elseif(array_search("&typeList", $recordStructure) !== FALSE)
								{
									// Description of the linkage schema.
									if(count($recordStructure) > count($record))
									{
										// Pad the record with empty properties values
										for($i = 0; $i < (count($recordStructure) - count($record)); $i++)
										{
											array_push($record, "");
										}	
									}
									
									if(count($recordStructure) < count($record))
									{
										array_push($this->errors, "commON Parser: Too many properties defined for the record according to the linkage schema record structure");
										return;
									}
	
									if(!is_array($this->commonLinkageSchema["types"]))
									{
										$this->commonLinkageSchema["types"] = array();	
									}
	
									$typesRecord = array();
									foreach($recordStructure as $key => $rs)
									{
										if(strpos($record[$key], "|") === FALSE)
										{
											$typesRecord[$rs] = array($record[$key]);
										}
										else
										{
											$typesRecord[$rs] = explode("|", $record[$key]);
										}
									}
									
									array_push($this->commonLinkageSchema["types"], $typesRecord);								
								}
								else
								{
									// Description of the linkage schema.
									if(count($recordStructure) > count($record))
									{
										// Pad the record with empty properties values
										for($i = 0; $i < (count($recordStructure) - count($record)); $i++)
										{
											array_push($record, "");
										}	
									}
									
									if(count($recordStructure) < count($record))
									{
										array_push($this->errors, "commON Parser: Too many properties defined for the record according to the linkage schema record structure");
										return;
									}
	
									if(!is_array($this->commonLinkageSchema["description"]))
									{
										$this->commonLinkageSchema["description"] = array();	
									}
	
									foreach($recordStructure as $key => $rs)
									{
										if(strpos($rs, "|") === FALSE)
										{
											$this->commonLinkageSchema["description"][$rs] = array($record[$key]);
										}
										else
										{
											$this->commonLinkageSchema["description"][$rs] = explode("|", $record[$key]);
											
										}
									}
									
									$shouldBeRecordDescription = TRUE;
								}
							break;
						}
					}
				}	
			}
			
			array_push($this->commonRecords, $commonRecord);
		}		

		/*!	 @brief Check if an attribute is a reification attribute.
								
				\n
				
				@return return FALSE if it is not a reification attribute, return the structure array( "attribute" => "...", "reifidAttribute" => "...") structure.
				
				@author Frederick Giasson, Structured Dynamics LLC.
			
				\n\n\n
		*/	
		private function getReifiedAttribute($attribute)
		{
			// Check if it is a reification attribute
			if(($pos = strpos($attribute, "&", 1)) !== FALSE)
			{
				return(array("attribute" => substr($attribute, 0, $pos), "reifiedAttribute" => substr($attribute, $pos, strlen($attribute) - $pos)));
			}
			
			return(FALSE);
		}
		
	}
	
?>