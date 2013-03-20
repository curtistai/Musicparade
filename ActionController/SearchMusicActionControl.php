<?php
include_once 'MainActionControl.php';
echo $_GET["keyword"];

class SearchMusicActionControl extends MainActionControl
{
	private $musSerial;//int
	private $musName;//String


	public function searchMusic($keyword) // should return array
	{
		echo $keyword;
	}

}
$controller = new SearchMusicActionControl();
$controller->searchMusic($_GET["keyword"]);




?>