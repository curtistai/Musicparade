<?php
include_once 'MainActionControl.php';

class DisplayMusicMainPageActionControl extends MainActionControl
{
	public function printSongList($url,$name){ // Need to change
		echo <<<EOF
<li><a
		href="
EOF;
		echo $url;
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
		echo <<<EOD
	<li><a
		href="http://localhost:8888/3100/media/Music/Taylor Swift-I Knew You Were Trouble.mp3">Taylor Swift - I knew you where in trouble</a></li>
	<li><a
		href="http://data1.act.qq.com/200810/15/11/122404198538790.mp3?stdfrom=3&bg=0xcddff3&leftbg=0x357dce&lefticon=0xf2f2f2&rightbg=0x357dce&rightbghover=0x4499ee&righticon=0xf2f2f2&righticonhover=0xffffff&text=0x357dce&slider=0x357dce&track=0xffffff&border=0xffffff&loader=0x8ec2f4&autostart=yes&loop=yes&3">?w?¡±F
	¢X¡VS.H.E </a></li>
	<li><a href="http://www.xsdcsx.com/sourcefile/0/0/2/2601.mp3">¡±¡Ú¡±?¡±¡X
	¢X¡VS.H.E</a></li>
	<li><a
		href="http://infinitinb.net/COFFdD0xMzYwNTk4OTI1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92Mi9mYWludFFDLzUzL2QxLzg0YjczZWNiZmE3MzliZTlkYzBhMWZkN2E3YjZkMTUzLm1wMyZtPWUyZjVjMTBjMDZmNzQxNDJkNGZmYTIwMWFlOTM1YzY5JnY9bGlzdGVuJm49w/zUy7XEvKrL+yZzPbCivKrX0CZwPW4=.mp3">?R£kB?¡ì?N¡EL
	???N¡EJ </a></li>
	<li><a href="http://view.33591.com:586/2012/11/11/15/1006625.mp3">PSY - Gungnam Style</a></li>

EOD;
	}
	
	public function displaySearchList()
	{
		echo <<<EOD
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5NTQzJmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDL2Y3LzgyM2E5YTk5MTc0ODg1M2Y5NTc3MTFmZDBlMmE3MGY3Lm1wMyZtPTlkNDU5YjFjNzUzOTBjMTg4ZTYwNzZkNmExY2IwNDg4JnY9bGlzdGVuJm49u6jT1r+qusPByyZzPXMuaC5lJTIwJnA9bg==.mp3">?¡P¡±S??n¡±F
	¢X¡VS.H.E</a></li>
	<li><a
		href="http://data1.act.qq.com/200810/15/11/122404198538790.mp3?stdfrom=3&bg=0xcddff3&leftbg=0x357dce&lefticon=0xf2f2f2&rightbg=0x357dce&rightbghover=0x4499ee&righticon=0xf2f2f2&righticonhover=0xffffff&text=0x357dce&slider=0x357dce&track=0xffffff&border=0xffffff&loader=0x8ec2f4&autostart=yes&loop=yes&3">?w?¡±F
	¢X¡VS.H.E </a></li>
	<li><a href="http://www.xsdcsx.com/sourcefile/0/0/2/2601.mp3">¡±¡Ú¡±?¡±¡X
	¢X¡VS.H.E</a></li>
	<li><a
		href="http://infinitinb.net/COFFdD0xMzYwNTk4OTI1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92Mi9mYWludFFDLzUzL2QxLzg0YjczZWNiZmE3MzliZTlkYzBhMWZkN2E3YjZkMTUzLm1wMyZtPWUyZjVjMTBjMDZmNzQxNDJkNGZmYTIwMWFlOTM1YzY5JnY9bGlzdGVuJm49w/zUy7XEvKrL+yZzPbCivKrX0CZwPW4=.mp3">?R£kB?¡ì?N¡EL
	???N¡EJ </a></li>
	<li><a href="http://view.33591.com:586/2012/11/11/15/1006625.mp3">???nStyle
	¢X¡VPSY</a></li>
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5ODk1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDLzc1L2YxMzc1Zjk5OGMxNzVkNGY0Njg2OTc0ZDlkYTZjNDc1Lm1wMyZtPWU5ODg0MjYyZDk3NTE0MDBkYTA0OWFkODZkZTk2ZDIyJnY9bGlzdGVuJm49TXIuVGF4aSZzPcnZxa7KsbT6JTIwJnA9bg==.mp3">Mr
	Taxi ¢X¡V¡±¡Ò¡±k?¡EN</a></li>
EOD;
		
	}
	
	public function displayFavouriteList()
	{
		echo <<<EOD
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5NTQzJmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDL2Y3LzgyM2E5YTk5MTc0ODg1M2Y5NTc3MTFmZDBlMmE3MGY3Lm1wMyZtPTlkNDU5YjFjNzUzOTBjMTg4ZTYwNzZkNmExY2IwNDg4JnY9bGlzdGVuJm49u6jT1r+qusPByyZzPXMuaC5lJTIwJnA9bg==.mp3">?¡P¡±S??n¡±F
	¢X¡VS.H.E</a></li>
	<li><a
		href="http://data1.act.qq.com/200810/15/11/122404198538790.mp3?stdfrom=3&bg=0xcddff3&leftbg=0x357dce&lefticon=0xf2f2f2&rightbg=0x357dce&rightbghover=0x4499ee&righticon=0xf2f2f2&righticonhover=0xffffff&text=0x357dce&slider=0x357dce&track=0xffffff&border=0xffffff&loader=0x8ec2f4&autostart=yes&loop=yes&3">?w?¡±F
	¢X¡VS.H.E </a></li>
	<li><a href="http://www.xsdcsx.com/sourcefile/0/0/2/2601.mp3">¡±¡Ú¡±?¡±¡X
	¢X¡VS.H.E</a></li>
	<li><a
		href="http://infinitinb.net/COFFdD0xMzYwNTk4OTI1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92Mi9mYWludFFDLzUzL2QxLzg0YjczZWNiZmE3MzliZTlkYzBhMWZkN2E3YjZkMTUzLm1wMyZtPWUyZjVjMTBjMDZmNzQxNDJkNGZmYTIwMWFlOTM1YzY5JnY9bGlzdGVuJm49w/zUy7XEvKrL+yZzPbCivKrX0CZwPW4=.mp3">?R£kB?¡ì?N¡EL
	???N¡EJ </a></li>
	<li><a href="http://view.33591.com:586/2012/11/11/15/1006625.mp3">???nStyle
	¢X¡VPSY</a></li>
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5ODk1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDLzc1L2YxMzc1Zjk5OGMxNzVkNGY0Njg2OTc0ZDlkYTZjNDc1Lm1wMyZtPWU5ODg0MjYyZDk3NTE0MDBkYTA0OWFkODZkZTk2ZDIyJnY9bGlzdGVuJm49TXIuVGF4aSZzPcnZxa7KsbT6JTIwJnA9bg==.mp3">Mr
	Taxi ¢X¡V¡±¡Ò¡±k?¡EN</a></li>

EOD;
		
	}
	
	public function displayPlaylist()
	{
		echo <<<EOD
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5NTQzJmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDL2Y3LzgyM2E5YTk5MTc0ODg1M2Y5NTc3MTFmZDBlMmE3MGY3Lm1wMyZtPTlkNDU5YjFjNzUzOTBjMTg4ZTYwNzZkNmExY2IwNDg4JnY9bGlzdGVuJm49u6jT1r+qusPByyZzPXMuaC5lJTIwJnA9bg==.mp3">?¡P¡±S??n¡±F
	¢X¡VS.H.E</a></li>
	<li><a
		href="http://data1.act.qq.com/200810/15/11/122404198538790.mp3?stdfrom=3&bg=0xcddff3&leftbg=0x357dce&lefticon=0xf2f2f2&rightbg=0x357dce&rightbghover=0x4499ee&righticon=0xf2f2f2&righticonhover=0xffffff&text=0x357dce&slider=0x357dce&track=0xffffff&border=0xffffff&loader=0x8ec2f4&autostart=yes&loop=yes&3">?w?¡±F
	¢X¡VS.H.E </a></li>
	<li><a href="http://www.xsdcsx.com/sourcefile/0/0/2/2601.mp3">¡±¡Ú¡±?¡±¡X
	¢X¡VS.H.E</a></li>
	<li><a
		href="http://infinitinb.net/COFFdD0xMzYwNTk4OTI1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92Mi9mYWludFFDLzUzL2QxLzg0YjczZWNiZmE3MzliZTlkYzBhMWZkN2E3YjZkMTUzLm1wMyZtPWUyZjVjMTBjMDZmNzQxNDJkNGZmYTIwMWFlOTM1YzY5JnY9bGlzdGVuJm49w/zUy7XEvKrL+yZzPbCivKrX0CZwPW4=.mp3">?R£kB?¡ì?N¡EL
	???N¡EJ </a></li>
	<li><a href="http://view.33591.com:586/2012/11/11/15/1006625.mp3">PSY - Gungnam Style</a></li>
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5ODk1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDLzc1L2YxMzc1Zjk5OGMxNzVkNGY0Njg2OTc0ZDlkYTZjNDc1Lm1wMyZtPWU5ODg0MjYyZDk3NTE0MDBkYTA0OWFkODZkZTk2ZDIyJnY9bGlzdGVuJm49TXIuVGF4aSZzPcnZxa7KsbT6JTIwJnA9bg==.mp3">Mr
	Taxi ¢X¡V¡±¡Ò¡±k?¡EN</a></li>
EOD;

	}
	
	public function printHeader($subPageName){
	echo <<< EOD
<div id="header" data-theme="b" data-role="header" data-position="fixed">
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
</div>	
EOD;
	}
	
	public function printFooter(){
		echo <<<EOD
<div data-theme="a" data-role="footer" data-position="fixed">
<div class="ui-grid-b" style="text-align: center;">
	<div class="ui-block-a"><h3 id="footerMsg">Bring you the best Music</h3></div>
	<div class="ui-block-b"><a id="addList" href="index.html" data-role="button" data-icon="plus" data-iconpos="left">Add To List</a></div>
	<div class="ui-block-c"><a id="addFav"href="index.html" data-role="button" data-icon="star" data-iconpos="left">Favourite</a></div>
</div>
</div>
EOD;
	}
	
	function printSiderBar(){
		echo <<<EOF
<div data-role="panel" id="functions" data-theme="a"
	data-position="left" data-display="push">
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

</div>
EOF;

	}

}

?>