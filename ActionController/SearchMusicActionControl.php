<?php
include_once 'MainActionControl.php';

/* Handle search function */
class SearchMusicActionControl extends MainActionControl
{
	private $musSerial;//int
	private $musName;//String
	private $command;
	

	//public function SearchMusicActionControl(){
	//	$command = new SearchMusicCommand();
	//	$command = $command->createCommand();
	//}

	// Keyword saved in the session, just directly call command
	public function searchMusic(){ 
		$searchMusicCommand = new SearchMusicCommand();
		$musicList = $searchMusicCommand->execute();
		echo $musicList;
	}

}

/* handle by direct link */
$controller = new SearchMusicActionControl();
$controller->searchMusic();

?>