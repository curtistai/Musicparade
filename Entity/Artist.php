<?php
require_once('Database_connection.php');
require_once('Music.php');

class Artist
{
	private $artSerial;
	private $artName;
	
    // constructor
	
	public function __construct($serial, $name)
	{
		$this->artSerial = $serial;
		$this->artName = $name;
	}
	
	
	// get
	
	public function getArtSerial()
	{
	  return $this->artSerial;
	}
	
	public function getArtName()
	{
	  return $this->artName;
	}
	
	// set
    
	public function setArtSerial($serial){ $this->artSerial = $serial; }

    public function setArtName($name){ $this->artName = $name; } 
	
	
	// insert
    public function insert($artN)
	{
	   $insertArtist = mysql_query("INSERT INTO Artist (artName) VALUES ('".$artN.'\')');
	   
	   if (!$insertArtist) 
		{die('Invalid query: ' . mysql_error());}
	
	}
	
	
	// update
	public function update($artS,$artN)
	{
	   $updateArtName= mysql_query("UPDATE Artist SET artName = '$artN' WHERE artSerial = $artS");
	   
	   if (!$updateArtName) 
		{die('Invalid query: ' . mysql_error());}
		
	}
	
	// Query
	
	
	// Find All artist
	
	public function findAllArtist()
	{
		$rawMusTypeList = mysql_query("SELECT * FROM Artist");
		$musTypeList = array();
		while (($record = mysql_fetch_array($rawMusTypeList)))
		{
			$musTypeList[$record[0]] = new Artist($record[0], $record[1]);
		}

		return $musTypeList;
	}
	
	// Find Artist by artSerial
	
	public function findArtistByArtSerial($artS)
	{
		$rawMusTypeList = mysql_query("SELECT * FROM Artist WHERE artSerial = $artS");
		$musTypeList = array();
		while (($record = mysql_fetch_array($rawMusTypeList)))
		{
			$musTypeList[$record[0]] = new Artist($record[0], $record[1]);
		}

		return $musTypeList;
	}
}
?>