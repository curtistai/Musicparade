<?php
require_once('Database_connection.php');
require_once('Music.php');
require_once('Member.php');


class FavouriteMusic
{
	private $musSerial;
	private $memSerial;
	private $fmusAddDate;

	
	// constructor
	
	public function __construct($serial, $mSerial,$addDate)
	{
		$this->musSerial = $serial;
		$this->memSerial = $mSerial;
		$this->fmusAddDate = $addDate;
	}
	
	// get
	
	public function getMusSerial()
	{
	  return $this->musSerial;
	}
	
	public function getMemSerial()
	{
	  return $this->memSerial;
	}
	
	public function getFmusAddDate()
	{
	  return $this->fmusAddDate;
	}

	// set
	
	public function setMusSerial($serial){ $this->musSerial = $serial; }

    public function setMemSerial($mSerial){ $this->memSerial = $mSerial; } 
	
    public function setFmusAddDate($addDate){ $this->fmusAddDate = $addDate; }
    
	
	//insert
    public function insert($musS,$memS)
	{
	   $insertFavouriteMusic = mysql_query("INSERT INTO FavouriteMusic VALUES ('".$musS.'\' ,\''.$memS.'\' , \''.date("Y-m-d").'\')');
	
		if (!$insertFavouriteMusic) 
		{die('Invalid query: ' . mysql_error());}
	
	}
	
	
	//Query 
	
	
	// find music by memSerial
	
	public function findMusicByMemSerial($memS)
	{
		$rawMusList = mysql_query("SELECT * FROM FavouriteMusic WHERE memSerial = $memS ");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new FavouriteMusic($record[0], $record[1], $record[2]);
		}

		return $musList;
	}
	
	// find music by musSerial
	
	public function findMusicByMusSerial($musS)
	{
		$rawMusList = mysql_query("SELECT * FROM FavouriteMusic WHERE musSerial = $musS ");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new FavouriteMusic($record[0], $record[1], $record[2]);
		}

		return $musList;
	}
	
	
	
}
?>