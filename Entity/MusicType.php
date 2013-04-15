<?php
require_once('Database_connection.php');


class MusicType
{
	
	private $musTypeSerial;
	private $musType;
	
	

	public function __construct($serial, $type)
	{
		$this->musTypeSerial = $serial;
		$this->musType = $type;
		
		
	}
	
	
	public function getMusTypeSerial()
	{
	  return $this->musTypeSerial;
	}
	
	public function getMusType()
	{
	  return $this->musType;
	}
	
	
	
	public function setMusTypeSerial($serial){ $this->musTypeSerial = $serial; }

    public function setMusType($type){ $this->musType = $type; } 
	
 

   
	
	//insert
	public function insert($musT)
	{
	   $insertMusicType= mysql_query("INSERT INTO MusicType (musType) VALUES ('".$musT.'\')');
	   
	   if (!$insertMusicType) 
		{die('Invalid query: ' . mysql_error());}
	
	}
	
	//update
	public function update($musTypeS,$musT)
	{
	   $updateMusicType= mysql_query("UPDATE MusicType SET musType = '$musT' WHERE musTypeSerial = $musTypeS ");
	   if (!$updateMusicType) 
		{die('Invalid query: ' . mysql_error());}
	   
	}
	
	// Query
	public function findAllMusicType()
	{
		$rawMusTypeList = mysql_query("SELECT * FROM MusicType");
		$musTypeList = array();
		while (($record = mysql_fetch_array($rawMusTypeList)))
		{
			$musTypeList[$record[0]] = new MusicType($record[0], $record[1]);
		}

		return $musTypeList;
	}
	
	public function findByMusTypeSerial($musTypeS)
	{
		$rawMusTypeList = mysql_query("SELECT * FROM MusicType WHERE musTypeSerial = $musTypeS");
		$musTypeList = array();
		while (($record = mysql_fetch_array($rawMusTypeList)))
		{
			$musTypeList[$record[0]] = new MusicType($record[0], $record[1]);
		}

		return $musTypeList;
	}
	
	
}
?>