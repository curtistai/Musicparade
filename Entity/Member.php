<?php
require_once('Database_connection.php');

class Member
{
	
	private $memSerial;
	private $memLName;
	private $memFName;
	private $memEmail;
	private $memRegdate;
	private $memFacebook;

	public function __construct($serial, $lName,$fName,$email,$rDate,$facebook)
	{
		$this->memSerial = $serial;
		$this->memLName = $lName;
		$this->memFName = $fName;
		$this->memEmail = $email;
		$this->memRegdate = $rDate;
		$this->memFacebook = $facebook;
	}
	
	
	public function getMemSerial()
	{
	  return $this->memSerial;
	}
	
	public function getMemLName()
	{
	  return $this->memLName;
	}
	
	public function getMemFName()
	{
	  return $this->memFName;
	}
	
	public function getMemEmail()
	{
	  return $this->memEmail;
	}
	
	public function getMemRegdate()
	{
	  return $this->memRegdate;
	}
	
	public function getMemFacebook()
	{
	  return $this->memFacebook;
	}
	

	public function setMemSerial($serial){ $this->memSerial = $serial; }

    public function setMemLName($lName){ $this->memLName = $lName; } 
	
    public function setMemFName($fName){ $this->memFName = $fName; }
    
	public function setMemEmail($email){ $this->memEmail = $email; }

    public function setMemRegdate($rDate){ $this->memRegdate = $rDate; } 
	
    public function setMemFacebook($facebook){ $this->memFacebook = $facebook; }
    
	//insert
	
	public function insert($memLN,$memFN,$memE,$memFB)
	{
	   $insertMember = mysql_query("INSERT INTO Member(memLName,memFName,memEmail,memRegdate,memFacebook) VALUES ('".$memLN.'\' , \''.$memFN.'\' , \''.$memE.' \' , \''.date("Y-m-d").'\' , \''.$memFB.'\')');
	   
	   
	   if (!$insertMember) 
		{die('Invalid query: ' . mysql_error());}
		
	   $memList = $this->findByEmail($memE);
	   echo key($memList);
	   #return $memList[key($memList)[0]]->getMemSerial();
	}
	
	
	
	//update
	
	public function updateLName($memLN,$memS)
	{
		$updateLName = mysql_query("UPDATE Member SET memLName = '$memLN' WHERE memSerial = $memS");	
		if (!$updateLName) 
		{die('Invalid query: ' . mysql_error());}
	}
	
	public function updateFName($memFN,$memS)
	{
		$updateFName = mysql_query("UPDATE Member SET memFName = '$memFN' WHERE memSerial = $memS");	
		if (!$updateFName) 
		{die('Invalid query: ' . mysql_error());}
	}
	
	public function updateEmail($memE,$memS)
	{
		$updateEmail = mysql_query("UPDATE Member SET memEmail = '$memE' WHERE memSerial = $memS");	
		if (!$updateEmail) 
		{die('Invalid query: ' . mysql_error());}
	}
	
	public function updateRDate($memRDate,$memS)
	{
		$updateRDate = mysql_query("UPDATE Member SET memRegdate = '$memRDate' WHERE memSerial = $memS");	
		if (!$updateRDate) 
		{die('Invalid query: ' . mysql_error());}
	}
	
	public function updateFacebook($memFB,$memS)
	{
		$updateFacebook = mysql_query("UPDATE Member SET memFacebook = '$memFB' WHERE memSerial = $memS");	
		if (!$updateFacebook) 
		{die('Invalid query: ' . mysql_error());}
	}
	
	
	//Query

	
	
	public function findAllMember()
	{
		$rawMusList = mysql_query("SELECT * FROM Member");
		$musList = array();
		
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new Member($record[0], $record[1], $record[2], $record[3],$record[4],$record[5]);
		}

		return $musList;
	}
	
	public function findBySerial($memS)
	{
		$rawMusList = mysql_query("SELECT * FROM Member WHERE memSerial = $memS");
		$musList = array();
		
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new Member($record[0], $record[1], $record[2], $record[3],$record[4],$record[5]);
		}

		return $musList;
	}
	
	
	public function findByEmail($memE)
	{
		$rawMusList = mysql_query("SELECT * FROM Member WHERE memEmail = '$memE'");
		$musList = array();
		
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new Member($record[0], $record[1], $record[2], $record[3],$record[4],$record[5]);
		}

		return $musList;
	}
	

	public function findByFacebook($memFB)
	{
		$rawMusList = mysql_query("SELECT * FROM Member WHERE memFacebook = '$memFB' ");
		$musList = array();
		
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new Member($record[0], $record[1], $record[2], $record[3],$record[4],$record[5]);
		}

		return $musList;
	}
	
	
	
	
	
}
?>