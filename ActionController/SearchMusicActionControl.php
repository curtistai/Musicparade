<?php
include_once 'MainActionControl.php';
echo $_GET["keyword"];

class SearchMusicActionControl extends MainActionControl
{
	private $musSerial;//int
	private $musName;//String


	public function searchMusic($keyword){ // directly echo li item and app.php load
		echo <<<EOD
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5ODk1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDLzc1L2YxMzc1Zjk5OGMxNzVkNGY0Njg2OTc0ZDlkYTZjNDc1Lm1wMyZtPWU5ODg0MjYyZDk3NTE0MDBkYTA0OWFkODZkZTk2ZDIyJnY9bGlzdGVuJm49TXIuVGF4aSZzPcnZxa7KsbT6JTIwJnA9bg==.mp3">Mr
	Taxi ¢X¡V¡±¡Ò¡±k?¡EN</a></li>
EOD;
	}

}

$controller = new SearchMusicActionControl();
$controller->searchMusic($_GET["keyword"]);




?>