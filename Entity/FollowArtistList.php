<?php
require_once('Database_connection.php');
require_once('Member.php');
require_once('Artist.php');

class FollowArtlistList
{
	
	private $memSerial;
	private $artSerial;
	private $followDate;

	public function __construct($serial, $aSerial,$fDate)
	{
		$this->memSerial = $serial;
		$this->artSerial = $aSerial;
		$this->followDate = $fDate;
	}
	
	
	public function getMemSerial()
	{
	  return $this->memSerial;
	}
	
	public function getArtSerial()
	{
	  return $this->artSerial;
	}
	
	public function getFollowDate()
	{
	  return $this->followDate;
	}

	public function setMemSerial($serial){ $this->memSerial = $serial; }

    public function setArtSerial($aSerial){ $this->artSerial = $aSerial; } 
	
    public function setFollowDate($fDate){ $this->followDate = $fDate; }
    
	
	//insert
	public function insert($memS,$artS)
	{
	   $insertFollowArtistList = mysql_query("INSERT INTO FavouriteMusic VALUES ('".$memS.'\' ,\''.$artS.'\' , \''.date("Y-m-d").'\')');
		if (!$insertFollowArtistList) 
		{die('Invalid query: ' . mysql_error());}
	}
	
	
	//Query
	
	public function findAllFollowArtistList()
	{
		$rawMusList = mysql_query("SELECT * FROM FollowArtistList");
		$musList = array();
		
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new FollowArtistList($record[0], $record[1], $record[2], $record[3]);
		}

		return $musList;
	}
	
	// find by memSerial
	
	public function findByMemSerial($memS)
	{
		$rawMusList = mysql_query("SELECT * FROM FollowArtistList WHERE memSerial = $memS ");
		$musList = array();
		
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new FollowArtistList($record[0], $record[1], $record[2], $record[3]);
		}

		return $musList;
	}
	
	/// find by artSerial
	
	public function findByArtSerial($artS)
	{
		$rawMusList = mysql_query("SELECT * FROM FollowArtistList WHERE artSerial = $artS ");
		$musList = array();
		
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new FollowArtistList($record[0], $record[1], $record[2], $record[3]);
		}

		return $musList;
	}
	
}
?>