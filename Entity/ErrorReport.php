<?php
require_once('Database_connection.php');
require_once('Member.php');

class ErrorReport
{
    private $errorSerial; 
	private $errorDescription;
	private $errorReportDate;
	private $memSerial;
	
	// constructor

	public function __construct($errorS,$desccription, $reportDate,$memS)
	{
	    $this->errorSerial = $errorS;
		$this->errorDescription = $desccription;
		$this->errorReportDate = $reportDate;
		$this->memSerial = $memS;
	}
	
	
	// get
	
	public function getErrorSerial()
	{
	  return $this->errorSerial;
	}
	
	public function getErrorDescription()
	{
	  return $this->errorDescription;
	}
	
	public function getErrorReportDate()
	{
	  return $this->errorReportDate;
	}
	
	public function getMemSerial()
	{
	  return $this->memSerial;
	}
	
	// set
	
	public function setErrorSerial($errS){ $this->errorSerial = $errS; }
	
	public function setErrorDescription($desccription){ $this->errorDescription = $desccription; }

    public function setErrorReportDate($reportDate){ $this->errorReportDate = $reportDate; } 
	
	 public function setMemSerial($memS){ $this->memSerial = $memS; } 
    
	
	
	//insert
	public function insert($errorDesc,$memS)
	{
		$insertError = mysql_query("INSERT INTO ErrorReport (errorDescription,errorReportDate,memSerial) VALUES ('".$errorDesc.'\' ,\''.date("Y-m-d").'\' ,\''$memS'\' )');	
		if (!$insertError) 
		{die('Invalid query: ' . mysql_error());}
	}
	
	
	//update
	public function update($errorDesc,$errorS)
	{
		$updateError = mysql_query("UPDATE ErrorReport SET ErrorDescription = '$errorDesc' WHERE errorSerial = $errorS ");
		if (!$updateError) 
		{die('Invalid query: ' . mysql_error());}
	}
	
	
	
	///////////////Query///////////////
	
	
	// find all report
	
	public function findAllReport($errS)
	{
		$rawMusList = mysql_query("SELECT * FROM ErrorReport");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new Music($record[0], $record[1], $record[2],$record[3]);
		}

		return $musList;
	}
	
	// find report by errSerial
	
	public function findReportByErrSerial($errS)
	{
		$rawMusList = mysql_query("SELECT * FROM ErrorReport WHERE errorSerial = $errS ");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new ErrorReport($record[0], $record[1], $record[2],$record[3]);
		}

		return $musList;
	}
	
	// find report by memSerial
	
	public function findReportByMemSerial($memS)
	{
		$rawMusList = mysql_query("SELECT * FROM ErrorReport WHERE memSerial = $memS ");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new ErrorReport($record[0], $record[1], $record[2],$record[3]);
		}

		return $musList;
	}
	
	// find report desc
	
	
	public function findReportByDesc($desc)
	{
		$rawMusList = mysql_query("SELECT * FROM ErrorReport WHERE errorDescription LIKE %'$desc'%");
		$musList = array();
		while (($record = mysql_fetch_array($rawMusList)))
		{
			$musList[$record[0]] = new ErrorReport($record[0], $record[1], $record[2],$record[3]);
		}

		return $musList;
	}
	
	
}
?>