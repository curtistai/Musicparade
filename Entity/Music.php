<?php
require_once('Database_connection.php');
require_once('Artist.php');

class Music
{
	private $musSerial;
	private $musName;
	private $publishDate;
	private $musTypeSerial;
	private $musStoredPath;
	private $artSerial;
	
	public function __construct($serial, $name, $date, $typeSerial, $storedPath,$artS)
	{
		$this->musSerial = $serial;
		$this->musName = $name;
		$this->publishDate = $date;
		$this->musTypeSerial = $typeSerial;
		$this->musStoredPath = $storedPath;
		$this->artSerial = $artS;
	}

	public function getSerial()
	{
	  return $this->musSerial;
	}
	
	public function getMusName()
	{
	  return $this->musName;
	}
	
	public function getPublishDate()
	{
	  return $this->publishDate;
	}
	
	
	public function getMusTypeSerial()
	{
	  return $this->musTypeSerial;
	}
	
	public function getMusStoredPath()
	{
	  return $this->musStoredPath;
	}
	
	public function getArtSerial()
	{
	  return $this->artSerial;
	}
	
	public function setMusSerial($mSerial){ $this->musSerial = $mSerial; }

	public function setMusName ($mName){ $this->musSerial = $mName; }
	
	public function setPublishDate($pDate){ $this->publishDate = $pDate; }
	
	public function setMusTypeSerial($mTypeSerial){ $this->musTypeSerial = $mTypeSerial; }
	
	public function setMusStoredPath($mStoredPath){ $this->musStoredPath = $mStoredPath; }
	
	public function setArtSerial($artS){ $this->artSerial = $artS; }
	
	
	//insert
	
	public function insert($musN,$musTypeS,$musStoredP,$artS)
	{
	   $insertMusic = mysql_query("INSERT INTO Music ( musName,publishDate,musTypeSerial,musStoredPath,artSerial) VALUES ('".$musN.'\' , \''.date("Y-m-d").'\' , \''.$musTypeS.'\' , \''.$musStoredP.'\' , \''.$artS.'\')');
	
	}
	
	
	//update
	

	public function updateMusicName($musN,$musS)
	{
		$updateMusicName = mysql_query("UPDATE Music SET musName = '$musN' WHERE musSerial = $musS");		
	}
	
	public function updatPublishDate($publishD,$musS)
	{
		$updatPublishDate = mysql_query("UPDATE Music SET publishDate = '$publishD' WHERE musSerial = $musS");	
		
	}
	
	public function updateTypeSerial($musTypeS,$musS)
	{
		$updateTypeSerial = mysql_query("UPDATE Music SET musTypeSerial = $musTypeS WHERE musSerial = $musS");	
		
	}
	
	public function updateMusStoredPath($musStoreP,$musS)
	{
		$updateMusStoredPath = mysql_query("UPDATE Music SET musStoredPath = '$musStoreP' WHERE musSerial = $musS");	
		
	}
	
	public function updateArtSerial($artS,$musS)
	{
		$updateArtSerial = mysql_query("UPDATE Music SET artSerial = $artS WHERE musSerial = $musS");	
		
	}
	
	//Query 
	
	
	
	// find music by musTypeSerial
	public function findMusicByMusicTypeSerial($musTypeS)
	{
		$rawMusList = mysql_query("SELECT * FROM Music WHERE musTypeSerial = $musTypeS");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new Music($record[0], $record[1], $record[2], $record[3], $record[4],$record[5]);
		}

		return $musList;
	}
	
	

	// find music by serial
	public function findMusicBySerial($musicSerial)
	{
		$rawMusList = mysql_query("SELECT * FROM Music WHERE musSerial = $musicSerial");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new Music($record[0], $record[1], $record[2], $record[3], $record[4],$record[5]);
		}

		return $musList;
	}
	
	// find music by ArtSerial
	public function findMusicByArtSerial($artS)
	{
		$rawMusList = mysql_query("SELECT * FROM Music WHERE artSerial = .$artS.");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new Music($record[0], $record[1], $record[2], $record[3], $record[4],$record[5]);
		}

		return $musList;
	}
	
	
	// find music by name
	public function findMusicByName($musicName)
	{
		$rawMusList = mysql_query("SELECT * FROM Music WHERE musName = .$musicName.");
		$musList3 = array();
		while (($record3 = mysql_fetch_array($rawMusList)))
		{
			$musList3[$record3[0]] = new Music($record3[0], $record3[1], $record3[2], $record3[3], $record3[4],$record3[5]);
		}

		return $musList3;
	}
	
	// find music like name
	public function findMusicLikeName($musicName)
	{
		$rawMusList = mysql_query("SELECT * FROM Music WHERE musName like '%.$musicName.'%");
		$musList3 = array();
		while (($record3 = mysql_fetch_array($rawMusList)))
		{
			$musList3[$record3[0]] = new Music($record3[0], $record3[1], $record3[2], $record3[3], $record3[4],$record3[5]);
		}

		return $musList3;
	}
	
	// Return all music
	public function findMusic()
	{
		$rawMusList2 = mysql_query("SELECT * FROM Music");
		$musList2 = array();
		while (($record2 = mysql_fetch_array($rawMusList2)))
		{
			$musList2[$record2[0]] = new Music($record2[0], $record2[1], $record2[2], $record2[3], $record2[4],$record2[5]);
		}

		return $musList2;
	}
}
?>
