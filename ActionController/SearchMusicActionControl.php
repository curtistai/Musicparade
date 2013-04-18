<?php
include_once 'MainActionControl.php';


class SearchMusicActionControl extends MainActionControl
{
	private $musSerial;//int
	private $musName;//String
	private $command;
	
	//public function SearchMusicActionControl(){
		//$command = new SearchMusicCommand();
		//$command = $command->createCommand();
	//}


	public function searchMusic(){ // directly echo li item and app.php load
		#$searchMusicCommand = new SearchMusicCommand();
		#$musicList = $searchMusicCommand->execute();
		
		echo <<<EOD
	<li><a
		href="http://curtis.taiserver.tk/3100/media/Music/Boyfriend.mp3">Mr
	Taxi SNSD</a></li>
EOD;
		#echo $musicList;
	}

}

$controller = new SearchMusicActionControl();
$controller->searchMusic();

?>