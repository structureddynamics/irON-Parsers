Using the irJSON Parser
=======================

sing the commON parser is quite simple. There is basically 3 main areas:

* Creating the parser's object and parsing the commON document
* Checking for parsing errors
* Getting the parsed data into different formats

The first thing to do is to create the commON's parser object with the commON file we want to parse:

```php
  <?php
	include_once("Dataset.php");
	include_once("InstanceRecord.php");
	include_once("LinkageSchema.php");
	include_once("StructureSchema.php");
	include_once("irJSONParser.php");
  
    $irJSONFileContent = file_get_contents("/tmp/myIrJSONFile.csv");
  
    $parser = new irJSONParser($irJSONFileContent);
  ?>
```

The next thing to do is to check if the parser found any error into the commON file:

```php
  <?php
    if(count($parser->jsonErrors) > 0)
    {
      echo "There are JSON errors!";
	} 
	
    if(count($parser->irjsonErrors) > 0)
    {
      echo "There are irJSON errors!";
	} 
	
    if(count($parser->irjsonNotices) > 0)
    {
      echo "There are irJSON notices!";
	} 
  ?>
```

If there are errors, then we can check what these errors are. There are two kind of errors:

* Errors that come from the JSON file, according to the JSON specification
* Errors that come from the irJSON format, according to the irON+irJSON specification
* irJSON Notices

```php
  <?php
    echo "<h2>Parsing Errors</h2>";

    foreach($parser->jsonErrors as $error)
    {
      echo "$error\n";
    }
	
    foreach($parser->irjsonErrors as $error)
    {
      echo "$error\n";
    }

	foreach($parser->irjsonNotices as $notice)
    {
      echo "$notice\n";
    }
  ?>
```

If there is no errors, then we can output the parsed records in different formats:

```php
  <?php
	echo "<h2>Dataset description</h2>";

	echo "<pre>";
	var_dump($parser->dataset);

	echo "</pre>";

	echo "<h2>Linkage Schema description</h2>";

	echo "<pre>";
	var_dump($parser->linkageSchemas);

	echo "</pre>";

	echo "<h2>Structure Schema description</h2>";

	echo "<pre>";
	var_dump($parser->structureSchemas);

	echo "</pre>";

	echo "<h2>Instance Records</h2>";

	echo "<pre>";
	var_dump($parser->instanceRecords);

	echo "</pre>";
  ?>
```
