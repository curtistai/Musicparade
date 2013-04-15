<?php
require_once('Database_connection.php');
require_once('Music.php');


class MusicPlayListDetail 
//del music list detail by serial(listSerial) rmb to return the deleted listserial ,
//insert music list detail by key(listSerial)
{
	
	private $musSerial;
	private $musListSerial;
	

	public function __construct($serial, $mSerial)
	{
		$this->musSerial = $serial;
		$this->musListSerial = $mSerial;
		
		
	}
	
	// get method
	public function getMusSerial()
	{
	  return $this->musSerial;
	}
	
	public function getMusListSerial()
	{
	  return $this->musListSerial;
	}
	
	
	// set method
	public function setMusSerial($serial){ $this->musSerial = $serial; }
    public function setMusListSerial($mSerial){ $this->musListSerial = $mSerial; } 
	
    //insert
	public function insert($musS,$musListS)
	{
	   $insertMusicPlayListDetail = mysql_query("INSERT INTO MusicPlayListDetail VALUES ('".$musS.'\' ,\''.$musListS.'\')');
	   
	   if (!$insertMusicPlayListDetail) 
		{die('Invalid query: ' . mysql_error());}
	}
	
	
	//Delete
	public function delete($musS,$musListS)
	{
	   $deleteMusicPlayList = mysql_query("DELETE FROM MusicPlaylistDetail WHERE musListSerial = $musListS AND musSerial = $musS");
	   
	   if (!$deleteMusicPlayList) 
		{die('Invalid query: ' . mysql_error());}
	   else
	     return $musListS ;
	}
	
	
	//Query

	
	public function findAllMusicPlayListDetail ()
	{
		$rawMusList = mysql_query("SELECT * FROM MusicPlayListDetail ");
		$musList = array();
		
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new MusicPlayListDetail ($record[0], $record[1]);
		}

		return $musList;
	}
	
	public function findByMusListSerial ($musLSerial)
	{
		$rawMusList = mysql_query("SELECT * FROM MusicPlayListDetail WHERE musListSerial = $musLSerial  ");
		$musList = array();
		
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new MusicPlayListDetail ($record[0], $record[1]);
		}

		return $musList;
	}
	
}
?>