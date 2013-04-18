<?php
include_once 'MainActionControl.php';
include_once './Command/DisplayMainPageCommand.php';
include_once './Command/SearchMusicCommand.php';
include_once './Command/DisplayMusicListCommand.php';



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
	
	public function printHeader($subPageName){
	echo <<< EOD
	<a href="#functions" data-icon="bars" data-iconpos="notext" data-shadow="false" data-iconshadow="false">Menu</a> 
	<a href="./ActionController/LoginFacebookActionControl.php?action=login"
		rel="external"	data-icon="gear" class="ui-btn-right">
EOD;
	if (isset($_SESSION['facebookUserLName'])){
		echo $_SESSION['facebookUserLName'];
	}else
		echo "Login";
	
	echo <<<EOD
</a><h3>MusicParade
EOD;
		if ($subPageName!=""){
			echo " | ".$subPageName;
			
		}
		echo <<< EOD
</h3>
EOD;
	}
	
	public function printFooter(){
		echo <<<EOD
<div class="ui-grid-c" style="text-align: center;">
	<div class="ui-block-a"><h3 id="footerMsg">Bring you the best Music</h3></div>
	<div class="ui-block-b"><a id="addList" data-role="button" data-icon="plus" data-iconpos="left">Add To List</a></div>
	<div class="ui-block-c"><a id="addFav" data-role="button" data-icon="star" data-iconpos="left">Add to Favourite</a></div>
	<div class="ui-block-d"><a class="share" id="shareFav" rel="external" href="./ActionController/PublishMusicFacebookActionControl.php" data-role="button" data-icon="star" data-iconpos="left">Share to Facebook</a></div>
</div>
EOD;
	}
	
	public function printSearchFooter(){
		echo <<<EOD
<div class="ui-grid-c" style="text-align: center;">
	<div class="ui-block-a"><h3 id="footerMsg">Bring you the best Music</h3></div>
	<div class="ui-block-b"><a id="addListSearch" data-role="button" data-icon="plus" data-iconpos="left">Add To List</a></div>
	<div class="ui-block-c"><a id="addFavSearch" data-role="button" data-icon="star" data-iconpos="left">Add to Favourite</a></div>
	<div class="ui-block-d"><a class="share" id="shareSearch" rel="external" data-role="button" data-icon="star" data-iconpos="left">Share to Facebook</a></div>

</div>
EOD;
	}
	
	
	public function printFavFooter(){
		echo <<<EOD
<div class="ui-grid-b" style="text-align: center;">
	<div class="ui-block-a"><h3 id="footerMsgFav">Bring you the best Music</h3></div>
	<div class="ui-block-b"><a id="rmvFav" data-role="button" data-icon="delete" data-iconpos="left">Remove From Favourite</a></div>
	<div class="ui-block-c"><a class="share" id="shareFav" rel="external" data-role="button" data-icon="star" data-iconpos="left">Share to Facebook</a></div>
</div>
EOD;
	}
	
	public function printPlaylistFooter(){
		echo <<<EOD
<div class="ui-grid-b" style="text-align: center;">
	<div class="ui-block-a"><h3 id="footerMsgPlaylist">Bring you the best Music</h3></div>
	<div class="ui-block-b"><a id="rmvList" data-role="button" data-icon="delete" data-iconpos="left">Remove from List</a></div>
	<div class="ui-block-c"><a class="share" id="sharePlayList" rel="external" data-role="button" data-icon="star" data-iconpos="left">Share to Facebook</a></div>
</div>
EOD;
	}

	
	function printSiderBar(){
		echo <<<EOF
<button type="button" data-theme="c"
	onclick="window.location = '#popular';">Popular</button>
<button type="button" data-theme="c"
	onclick="window.location = '#favourite';">Favourite</button>
<button type="button" data-theme="c"
	onclick="window.location = '#playlist';">PlayList</button>
<button type="button" data-theme="c"
	onclick="window.location = '#search';">Search</button>

<button type="button" data-theme="c"
	onclick="window.location = '#logout';">Logout</button>
EOF;

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
	else if ($_GET['action']=="sidebar")
		$controller->printSiderBar();
	else if ($_GET['action']=="header")
		$controller->printHeader($_GET['pageName']);		
	else if ($_GET['action']=="searchFooter")
		$controller->printSearchFooter();
	else if ($_GET['action']=="footer")
		$controller->printFooter();
	else if ($_GET['action']=="playlistfooter")
		$controller->printPlaylistFooter();
	else if ($_GET['action']=="favfooter")
		$controller->printFavFooter();
}

?>