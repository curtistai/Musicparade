<?php
session_start();

require_once("header.php");
require_once("sidebar.php");
require_once("footer.php"); ?>

<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<title>MusicParade</title>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script	src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
<script src="jsCss/js/soundmanager2.js"></script><!-- soundManager API -->
<script src="jsCss/js/sm.js"></script>
<script src="jsCss/js/page-player.js"></script> <!-- Page Player -->
<script src="jsCss/js/optional-page-player-metadata.js"></script> <!-- Meta UI -->
<script src="jsCss/js/app.js"></script> <!-- Page js -->

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" /><!-- soundManager API END-->
<link rel="stylesheet" type="text/css" href="jsCss/css/page-player.css" /><!-- Page player core CSS -->
<link rel="stylesheet" type="text/css" href="jsCss/css/flashblock.css" /><!-- soundManager.useFlashBlock: related CSS -->
<link rel="stylesheet" href="jsCss/css/app.css" />


</head>
<body>
<!-- Popular -->

<div data-role="page" id="popular">

<?php 
echo printSiderBar();
echo printHeader("Popular");
 ?>
<div data-role="content">
<ul class="playlist" id="playlistInpopular">
	<li><a
		href="http://localhost:8888/3100/media/Music/Taylor Swift-I Knew You Were Trouble.mp3">Taylor Swift - I knew you where in trouble</a></li>
	<li><a
		href="http://data1.act.qq.com/200810/15/11/122404198538790.mp3?stdfrom=3&bg=0xcddff3&leftbg=0x357dce&lefticon=0xf2f2f2&rightbg=0x357dce&rightbghover=0x4499ee&righticon=0xf2f2f2&righticonhover=0xffffff&text=0x357dce&slider=0x357dce&track=0xffffff&border=0xffffff&loader=0x8ec2f4&autostart=yes&loop=yes&3">安?了
	－S.H.E </a></li>
	<li><a href="http://www.xsdcsx.com/sourcefile/0/0/2/2601.mp3">五月天
	－S.H.E</a></li>
	<li><a
		href="http://infinitinb.net/COFFdD0xMzYwNTk4OTI1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92Mi9mYWludFFDLzUzL2QxLzg0YjczZWNiZmE3MzliZTlkYzBhMWZkN2E3YjZkMTUzLm1wMyZtPWUyZjVjMTBjMDZmNzQxNDJkNGZmYTIwMWFlOTM1YzY5JnY9bGlzdGVuJm49w/zUy7XEvKrL+yZzPbCivKrX0CZwPW4=.mp3">命運的吉他
	阿吉仔 </a></li>
	<li><a href="http://view.33591.com:586/2012/11/11/15/1006625.mp3">PSY - Gungnam Style</a></li>
</ul>
</div>

<?php echo printFooter(); ?>

</div>

<!-- Search -->
<div data-role="page" id="search">

<?php 
echo printSiderBar();
echo printHeader("Search");
 ?>
<div id="searchDIV">
<input id="searchbox" value="" placeholder="Join our Music Nation..." /> </div>
<div data-role="content">
<ul class="playlist" id="playlistInSearch">
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5NTQzJmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDL2Y3LzgyM2E5YTk5MTc0ODg1M2Y5NTc3MTFmZDBlMmE3MGY3Lm1wMyZtPTlkNDU5YjFjNzUzOTBjMTg4ZTYwNzZkNmExY2IwNDg4JnY9bGlzdGVuJm49u6jT1r+qusPByyZzPXMuaC5lJTIwJnA9bg==.mp3">花又?好了
	－S.H.E</a></li>
	<li><a
		href="http://data1.act.qq.com/200810/15/11/122404198538790.mp3?stdfrom=3&bg=0xcddff3&leftbg=0x357dce&lefticon=0xf2f2f2&rightbg=0x357dce&rightbghover=0x4499ee&righticon=0xf2f2f2&righticonhover=0xffffff&text=0x357dce&slider=0x357dce&track=0xffffff&border=0xffffff&loader=0x8ec2f4&autostart=yes&loop=yes&3">安?了
	－S.H.E </a></li>
	<li><a href="http://www.xsdcsx.com/sourcefile/0/0/2/2601.mp3">五月天
	－S.H.E</a></li>
	<li><a
		href="http://infinitinb.net/COFFdD0xMzYwNTk4OTI1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92Mi9mYWludFFDLzUzL2QxLzg0YjczZWNiZmE3MzliZTlkYzBhMWZkN2E3YjZkMTUzLm1wMyZtPWUyZjVjMTBjMDZmNzQxNDJkNGZmYTIwMWFlOTM1YzY5JnY9bGlzdGVuJm49w/zUy7XEvKrL+yZzPbCivKrX0CZwPW4=.mp3">命運的吉他
	阿吉仔 </a></li>
	<li><a href="http://view.33591.com:586/2012/11/11/15/1006625.mp3">江南Style
	－PSY</a></li>
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5ODk1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDLzc1L2YxMzc1Zjk5OGMxNzVkNGY0Njg2OTc0ZDlkYTZjNDc1Lm1wMyZtPWU5ODg0MjYyZDk3NTE0MDBkYTA0OWFkODZkZTk2ZDIyJnY9bGlzdGVuJm49TXIuVGF4aSZzPcnZxa7KsbT6JTIwJnA9bg==.mp3">Mr
	Taxi －少女?代</a></li>
</ul>
</div>

<?php echo printFooter(); ?>

</div>

<!-- Favourite -->
<div data-role="page" id="favourite">

<?php 
echo printSiderBar();
echo printHeader("Favourite");
 ?>
<div data-role="content">
<ul class="playlist" id="playlistInfavourite">
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5NTQzJmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDL2Y3LzgyM2E5YTk5MTc0ODg1M2Y5NTc3MTFmZDBlMmE3MGY3Lm1wMyZtPTlkNDU5YjFjNzUzOTBjMTg4ZTYwNzZkNmExY2IwNDg4JnY9bGlzdGVuJm49u6jT1r+qusPByyZzPXMuaC5lJTIwJnA9bg==.mp3">花又?好了
	－S.H.E</a></li>
	<li><a
		href="http://data1.act.qq.com/200810/15/11/122404198538790.mp3?stdfrom=3&bg=0xcddff3&leftbg=0x357dce&lefticon=0xf2f2f2&rightbg=0x357dce&rightbghover=0x4499ee&righticon=0xf2f2f2&righticonhover=0xffffff&text=0x357dce&slider=0x357dce&track=0xffffff&border=0xffffff&loader=0x8ec2f4&autostart=yes&loop=yes&3">安?了
	－S.H.E </a></li>
	<li><a href="http://www.xsdcsx.com/sourcefile/0/0/2/2601.mp3">五月天
	－S.H.E</a></li>
	<li><a
		href="http://infinitinb.net/COFFdD0xMzYwNTk4OTI1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92Mi9mYWludFFDLzUzL2QxLzg0YjczZWNiZmE3MzliZTlkYzBhMWZkN2E3YjZkMTUzLm1wMyZtPWUyZjVjMTBjMDZmNzQxNDJkNGZmYTIwMWFlOTM1YzY5JnY9bGlzdGVuJm49w/zUy7XEvKrL+yZzPbCivKrX0CZwPW4=.mp3">命運的吉他
	阿吉仔 </a></li>
	<li><a href="http://view.33591.com:586/2012/11/11/15/1006625.mp3">江南Style
	－PSY</a></li>
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5ODk1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDLzc1L2YxMzc1Zjk5OGMxNzVkNGY0Njg2OTc0ZDlkYTZjNDc1Lm1wMyZtPWU5ODg0MjYyZDk3NTE0MDBkYTA0OWFkODZkZTk2ZDIyJnY9bGlzdGVuJm49TXIuVGF4aSZzPcnZxa7KsbT6JTIwJnA9bg==.mp3">Mr
	Taxi －少女?代</a></li>
</ul>
</div>

<?php echo printFooter(); ?>

</div>

<!-- Playlist -->
<div data-role="page" id="playlist">

<?php 
echo printSiderBar();
echo printHeader("Playlist");
 ?>
<div data-role="content">
<ul class="playlist" id="playlistInplaylist">
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5NTQzJmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDL2Y3LzgyM2E5YTk5MTc0ODg1M2Y5NTc3MTFmZDBlMmE3MGY3Lm1wMyZtPTlkNDU5YjFjNzUzOTBjMTg4ZTYwNzZkNmExY2IwNDg4JnY9bGlzdGVuJm49u6jT1r+qusPByyZzPXMuaC5lJTIwJnA9bg==.mp3">花又?好了
	－S.H.E</a></li>
	<li><a
		href="http://data1.act.qq.com/200810/15/11/122404198538790.mp3?stdfrom=3&bg=0xcddff3&leftbg=0x357dce&lefticon=0xf2f2f2&rightbg=0x357dce&rightbghover=0x4499ee&righticon=0xf2f2f2&righticonhover=0xffffff&text=0x357dce&slider=0x357dce&track=0xffffff&border=0xffffff&loader=0x8ec2f4&autostart=yes&loop=yes&3">安?了
	－S.H.E </a></li>
	<li><a href="http://www.xsdcsx.com/sourcefile/0/0/2/2601.mp3">五月天
	－S.H.E</a></li>
	<li><a
		href="http://infinitinb.net/COFFdD0xMzYwNTk4OTI1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92Mi9mYWludFFDLzUzL2QxLzg0YjczZWNiZmE3MzliZTlkYzBhMWZkN2E3YjZkMTUzLm1wMyZtPWUyZjVjMTBjMDZmNzQxNDJkNGZmYTIwMWFlOTM1YzY5JnY9bGlzdGVuJm49w/zUy7XEvKrL+yZzPbCivKrX0CZwPW4=.mp3">命運的吉他
	阿吉仔 </a></li>
	<li><a href="http://view.33591.com:586/2012/11/11/15/1006625.mp3">江南Style
	－PSY</a></li>
	<li><a
		href="http://lianzidi.com/COFFdD0xMzYwNTk5ODk1Jmk9NjEuMTM1LjIwOS4yMDMmdT1Tb25ncy92MS9mYWludFFDLzc1L2YxMzc1Zjk5OGMxNzVkNGY0Njg2OTc0ZDlkYTZjNDc1Lm1wMyZtPWU5ODg0MjYyZDk3NTE0MDBkYTA0OWFkODZkZTk2ZDIyJnY9bGlzdGVuJm49TXIuVGF4aSZzPcnZxa7KsbT6JTIwJnA9bg==.mp3">Mr
	Taxi －少女?代</a></li>
</ul>
</div>

<?php echo printFooter(); ?>

</div>


</div>

</body>
</html>
