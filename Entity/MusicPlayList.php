<?php
	require_once('Database_connection.php');
	require_once('Member.php');


class MusicPlayList
{
	
	private $musListSerial;
	private $memSerial;
	private $musListName;
	private $musListCreateDate;
	

	public function __construct($serial, $mName, $mDate, $mSerial)
	{
		$this->musListSerial = $serial;
		$this->memSerial = $mSerial;
		$this->musListName = $mName;
		$this->musListCreateDate = $mDate;
		
	}
	
	
	public function getMusListSerial()
	{
	  return $this->musListSerial;
	}
	
	public function getMemSerial()
	{
	  return $this->memSerial;
	}
	
	public function getMusListName()
	{
	  return $this->musListName;
	}
	
	public function getMusListCreateDate()
	{
	  return $this->musListCreateDate;
	}
	

	public function setMusListSerial($serial){ $this->musListSerial = $serial; }

	public function setMemSerial($mSerial){ $this->memSerial = $mSerial; } 
	
	public function setMusListName($mName){ $this->musListName = $mName; }
    
	public function setMusListCreateDate($mDate){ $this->musListCreateDate = $mDate; }

    
	//insert
	
	public function insert($memS,$musListN)
	{
	   $insertMusicPlayList = mysql_query("INSERT INTO MusicPlayList (memSerial,musListName,musListCreateDate) VALUES ('".$memS.'\' , \''.$musListN.'\' , \''.date("Y-m-d").'\')');
		if (!$insertMusicPlayList) 
		{die('Invalid query: ' . mysql_error());}
	
	
	}
	
	//update	
	public function updateListName($listN,$listS)
	{
		$updateListName = mysql_query("UPDATE MusicPlayList SET musListName = '$listN' WHERE musListSerial = 'listS'");	
		if (!$updateListName) 
		{die('Invalid query: ' . mysql_error());}
		
		
	}
	
	//Query
	
	public function findAllMusicPlayList($musListS)
	{
		$rawMusList = mysql_query("SELECT * FROM MusicPlayList");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new MusicPlayList($record[0], $record[1], $record[2],$record[3]);
		}

		return $musList;
	}
	
	
	public function findMusPlayListByMusListSerial($musListS)
	{
		$rawMusList = mysql_query("SELECT * FROM MusicPlayList WHERE musListSerial = $musListS");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new MusicPlayList($record[0], $record[1], $record[2],$record[3]);
		}

		return $musList;
	}
	
	public function findMusPlayListByMemSerial($memS)
	{
		$rawMusList = mysql_query("SELECT * FROM MusicPlayList WHERE memSerial = $memS");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new MusicPlayList($record[0], $record[1], $record[2],$record[3]);
		}

		return $musList;
	}
	
	
	public function findMusPlayListByMusListName($musListN)
	{
		$rawMusList = mysql_query("SELECT * FROM MusicPlayList WHERE musListName = '$musListN'");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new MusicPlayList($record[0], $record[1], $record[2],$record[3]);
		}

		return $musList;
	}

}
?>