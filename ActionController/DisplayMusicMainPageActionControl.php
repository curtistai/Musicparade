<?php
include_once 'MainActionControl.php';
include_once '../Command/DisplayMainPageCommand.php';
include_once '../Command/SearchMusicCommand.php';
include_once '../Command/DisplayMusicListCommand.php';



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
		$displayPageCommand = new DisplayMainPageCommand();
		$musicList = $displayPageCommand->execute();
		print_r($musicList);
		
		foreach ($musicList as $music)
		{
			$musSerial = $music->getSerial();
			$musName = $music->getMusName();
			$musPath = $music->getMusStoredPath();
			
			self::printSongList("http://".$_SERVER['HTTP_HOST']."/3100/media/Music/".$musPath, $musName, $musSerial);
		}
		
		self::printSongList("http://localhost:8888/3100/media/Music/Taylor Swift-I Knew You Were Trouble.mp3",
				    "Taylor Swift - I knew you where in trouble",1);
		self::printSongList("http://data1.act.qq.com/200810/15/11/122404198538790.mp3?stdfrom=3&bg=0xcddff3&leftbg=0x357dce&lefticon=0xf2f2f2&rightbg=0x357dce&rightbghover=0x4499ee&righticon=0xf2f2f2&righticonhover=0xffffff&text=0x357dce&slider=0x357dce&track=0xffffff&border=0xffffff&loader=0x8ec2f4&autostart=yes&loop=yes&3",
				    "SHE - ABC",2);
		self::printSongList("http://www.xsdcsx.com/sourcefile/0/0/2/2601.mp3",
				    "SHE - CDE",3);
		self::printSongList("http://view.33591.com:586/2012/11/11/15/1006625.mp3",
				    "PSY - Gungnam Style",4);
	}
	
	public function displaySearchList()
	{
		$searchMusicCommand = new SearchMusicCommand();
		$musicList = $searchMusicCommand->execute();
		print_r($musicList);
		
		foreach ($musicList as $music)
		{
			$musSerial = $music->getSerial();
			$musName = $music->getMusName();
			$musPath = $music->getMusStoredPath();
			
			self::printSongList("http://".$_SERVER['HTTP_HOST']."/3100/media/Music/".$musPath, $musName, $musSerial);
		}
		
		self::printSongList("http://localhost:8888/3100/media/Music/Taylor Swift-I Knew You Were Trouble.mp3",
				    "Taylor Swift - I knew you where in trouble",5);
		self::printSongList("http://data1.act.qq.com/200810/15/11/122404198538790.mp3?stdfrom=3&bg=0xcddff3&leftbg=0x357dce&lefticon=0xf2f2f2&rightbg=0x357dce&rightbghover=0x4499ee&righticon=0xf2f2f2&righticonhover=0xffffff&text=0x357dce&slider=0x357dce&track=0xffffff&border=0xffffff&loader=0x8ec2f4&autostart=yes&loop=yes&3",
				    "SHE - ABC",6);
		self::printSongList("http://www.xsdcsx.com/sourcefile/0/0/2/2601.mp3",
				    "SHE - CDE",7);
		self::printSongList("http://view.33591.com:586/2012/11/11/15/1006625.mp3",
				    "PSY - Gungnam Style",8);
		
	}
	
	public function displayFavouriteList()
	{
		self::printSongList("http://localhost:8888/3100/media/Music/Taylor Swift-I Knew You Were Trouble.mp3",
				    "Taylor Swift - I knew you where in trouble",9);
		self::printSongList("http://data1.act.qq.com/200810/15/11/122404198538790.mp3?stdfrom=3&bg=0xcddff3&leftbg=0x357dce&lefticon=0xf2f2f2&rightbg=0x357dce&rightbghover=0x4499ee&righticon=0xf2f2f2&righticonhover=0xffffff&text=0x357dce&slider=0x357dce&track=0xffffff&border=0xffffff&loader=0x8ec2f4&autostart=yes&loop=yes&3",
				    "SHE - ABC",10);
		self::printSongList("http://www.xsdcsx.com/sourcefile/0/0/2/2601.mp3",
				    "SHE - CDE",11);
		self::printSongList("http://view.33591.com:586/2012/11/11/15/1006625.mp3",
				    "PSY - Gungnam Style",12);
		
	}
	
	public function displayPlaylist()
	{
		$displayMusicListCommand = new DisplayMusicListCommand();
		$musicList = $displayMusicListCommand->execute();
		print_r($musicList);
		
		foreach ($musicList as $music)
		{
			$musSerial = $music->getSerial();
			$musName = $music->getMusName();
			$musPath = $music->getMusStoredPath();
			
			self::printSongList("http://".$_SERVER['HTTP_HOST']."/3100/media/Music/".$musPath, $musName, $musSerial);
		}
		
		
		self::printSongList("http://localhost:8888/3100/media/Music/Taylor Swift-I Knew You Were Trouble.mp3",
				    "Taylor Swift - I knew you where in trouble",13);
		self::printSongList("http://data1.act.qq.com/200810/15/11/122404198538790.mp3?stdfrom=3&bg=0xcddff3&leftbg=0x357dce&lefticon=0xf2f2f2&rightbg=0x357dce&rightbghover=0x4499ee&righticon=0xf2f2f2&righticonhover=0xffffff&text=0x357dce&slider=0x357dce&track=0xffffff&border=0xffffff&loader=0x8ec2f4&autostart=yes&loop=yes&3",
				    "SHE - ABC",14);
		self::printSongList("http://www.xsdcsx.com/sourcefile/0/0/2/2601.mp3",
				    "SHE - CDE",15);
		self::printSongList("http://view.33591.com:586/2012/11/11/15/1006625.mp3",
				    "PSY - Gungnam Style",16);

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