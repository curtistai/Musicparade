<?php
include_once 'MainActionControl.php';
include_once '../Command/DisplayMainPageCommand.php';
include_once '../Command/SearchMusicCommand.php';
include_once '../Command/DisplayMusicListCommand.php';
include_once '../Command/DisplayFavouriteMusicCommand.php';



class DisplayMusicMainPageActionControl extends MainActionControl
{
	
	public function printSongList($url,$name,$id){ // Need to change
		echo '<li><a class="song" id="'.$id.'" href="'.$url;
		echo <<<EOF
">
EOF;
		echo $name;
		echo <<<EOF
 </a></li>
EOF;
	}


	public function displayPopularList()
	{
		#error_reporting(0);

		$displayPageCommand = new DisplayMainPageCommand();
		$musicList = $displayPageCommand->execute();
		
		foreach ($musicList as $music)
		{
			$musSerial = $music->getSerial();
			$musName = $music->getMusName();
			$musPath = $music->getMusStoredPath();
			
			self::printSongList("http://curtis.taiserver.tk/3100/media/Music/".$musPath, $musName, $musSerial);
		}
		
	}
	
	public function displaySearchList()
	{
		#error_reporting(0);
		$searchMusicCommand = new SearchMusicCommand();
		$musicList = $searchMusicCommand->execute();
				
		foreach ($musicList as $music)
		{
			$musSerial = $music->getSerial();
			$musName = $music->getMusName();
			$musPath = $music->getMusStoredPath();
			
			self::printSongList("http://curtis.taiserver.tk/3100/media/Music/".$musPath, $musName, $musSerial);
		}
		
	}
	
	public function displayFavouriteList()
	{
		$displayFavouriteMusicCommand = new DisplayFavouriteMusicCommand();
		$musicList = $displayFavouriteMusicCommand->execute();
				
		foreach ($musicList as $music)
		{
			$musSerial = $music->getSerial();
			$musName = $music->getMusName();
			$musPath = $music->getMusStoredPath();
			
			self::printSongList("http://curtis.taiserver.tk/3100/media/Music/".$musPath, $musName, $musSerial);
		}
		
		
	}
	
	public function displayPlaylist()
	{
		#error_reporting(0);

		$displayMusicListCommand = new DisplayMusicListCommand();
		$musicList = $displayMusicListCommand->execute();
		
		foreach ($musicList as $music)
		{
			$musSerial = $music->getSerial();
			$musName = $music->getMusName();
			$musPath = $music->getMusStoredPath();
			
			self::printSongList("http://curtis.taiserver.tk/3100/media/Music/".$musPath, $musName, $musSerial);
		}
	}
	
}

if (isset($_GET['action']))
{
	$controller = new DisplayMusicMainPageActionControl();
	if ($_GET['action']=="fav")
		$controller->displayFavouriteList();
	else if ($_GET['action']=="playlist")
		$controller->displayPlaylist();
	else if ($_GET['action']=="search")
		$controller->displaySearchList();
	else if ($_GET['action']=="popular")
		$controller->displayPopularList();
}

?>