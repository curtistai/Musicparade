<?php
include_once 'MainActionControl.php';
include_once '../Command/DisplayMainPageCommand.php';
include_once '../Command/SearchMusicCommand.php';
include_once '../Command/DisplayMusicListCommand.php';
include_once '../Command/DisplayFavouriteMusicCommand.php';

/*
	Controller to help display songlist in the page
*/


class DisplayMusicMainPageActionControl extends MainActionControl
{
	/* Short function to help print a standard list element
	*/
	
	public function printSongList($url,$name,$id){ 
		echo '<li><a class="song" id="'.$id.'" href="'.$url;
		echo <<<EOF
">
EOF;
		echo $name;
		echo <<<EOF
 </a></li>
EOF;
	}

	/* code for printing popular list*/
	public function displayPopularList()
	{
		#error_reporting(0);

		$displayPageCommand = new DisplayMainPageCommand(); /* call command function */
		$musicList = $displayPageCommand->execute();
		
		foreach ($musicList as $music) /* get result from command */
		{
			$musSerial = $music->getSerial();
			$musName = $music->getMusName();
			$musPath = $music->getMusStoredPath();
			
			self::printSongList("http://curtis.taiserver.tk/3100/media/Music/".$musPath, $musName, $musSerial);
		}
		
	}


	/* code for printing search list*/
	public function displaySearchList()
	{
		#error_reporting(0);
		$searchMusicCommand = new SearchMusicCommand(); /* call command function */
		$musicList = $searchMusicCommand->execute();
				
		foreach ($musicList as $music) /* get result from command */
		{
			$musSerial = $music->getSerial();
			$musName = $music->getMusName();
			$musPath = $music->getMusStoredPath();
			
			self::printSongList("http://curtis.taiserver.tk/3100/media/Music/".$musPath, $musName, $musSerial);
		}
		
	}
	
	/* code for display favourite list */
	public function displayFavouriteList()
	{
		$displayFavouriteMusicCommand = new DisplayFavouriteMusicCommand(); /* call command function */
		$musicList = $displayFavouriteMusicCommand->execute();
				
		foreach ($musicList as $music) /* get result from command */
		{
			$musSerial = $music->getSerial();
			$musName = $music->getMusName();
			$musPath = $music->getMusStoredPath();
			
			self::printSongList("http://curtis.taiserver.tk/3100/media/Music/".$musPath, $musName, $musSerial);
		}
		
		
	}
	
	/* code for playlist*/
	public function displayPlaylist()
	{
		#error_reporting(0);

		$displayMusicListCommand = new DisplayMusicListCommand(); /* call command function */
		$musicList = $displayMusicListCommand->execute();
		
		foreach ($musicList as $music)/* get result from command */
		{
			$musSerial = $music->getSerial();
			$musName = $music->getMusName();
			$musPath = $music->getMusStoredPath();
			
			self::printSongList("http://curtis.taiserver.tk/3100/media/Music/".$musPath, $musName, $musSerial);
		}
	}
	
}

/* requested by GET function */
if (isset($_GET['action']))
{
	$controller = new DisplayMusicMainPageActionControl(); /* open OO object */
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