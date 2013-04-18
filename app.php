<?php
session_start();
?>

<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<title>MusicParade</title>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script	src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
<script src="jsCss/js/soundmanager2.js"></script><!-- soundManager API -->
<script src="jsCss/js/sm.js"></script>
<script src="jsCss/js/page-player.js"></script> <!-- Page Player -->
<script src="jsCss/js/optional-page-player-metadata.js"></script> <!-- Meta UI -->
<script src="jsCss/js/app.js"></script> <!-- Page js -->
<script src="jsCss/js/jquery.session.js"></script> <!-- JQ Session js -->

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" /><!-- soundManager API END-->
<link rel="stylesheet" type="text/css" href="jsCss/css/page-player.css" /><!-- Page player core CSS -->
<link rel="stylesheet" type="text/css" href="jsCss/css/flashblock.css" /><!-- soundManager.useFlashBlock: related CSS -->
<link rel="stylesheet" href="jsCss/css/app.css" />


</head>
<body>
<!-- Popular -->

<div data-role="page" id="popular">
	<div data-role="panel" id="sidebar1" data-theme="a"
	data-position="left" data-display="push">
	</div>

<div id="header1" data-theme="b" data-role="header" data-position="fixed">
</div>	
<div data-role="content">
<ul class="playlist" id="playlistInpopular">
</ul>
</div>

<div id="footer" data-theme="a" data-role="footer" data-position="fixed">
</div>


</div>

<!-- Search -->
<div data-role="page" id="search">
	<div data-role="panel" id="sidebar2" data-theme="a"
	data-position="left" data-display="push">
	</div>
	<div id="header2" data-theme="b" data-role="header" data-position="fixed">
	</div>	
<div id="searchDIV">
<input id="searchbox" value="" placeholder="Join our Music Nation..." /> </div>
<div data-role="content">
<ul class="playlist" id="playlistInSearch">
</ul>
</div>
<div id="searchFooter" data-theme="a" data-role="footer" data-position="fixed">
</div>

</div>

<!-- Favourite -->
<div data-role="page" id="favourite">
	<div data-role="panel" id="sidebar3" data-theme="a"
	data-position="left" data-display="push">
	</div>
	<div id="header3" data-theme="b" data-role="header" data-position="fixed">
	</div>	
<div data-role="content">
<ul class="playlist" id="playlistInfavourite">
</ul>
</div>

<?php $controller->printFavFooter(); ?>
<div id="favfooter" data-theme="a" data-role="footer" data-position="fixed">
</div>
</div>

<!-- Playlist -->
<div data-role="page" id="playlist">
	<div data-role="panel" id="sidebar4" data-theme="a"
	data-position="left" data-display="push">
	</div>
	<div id="header4" data-theme="b" data-role="header" data-position="fixed">
	</div>	
<div data-role="content">
<ul class="playlist" id="playlistInplaylist">
</ul>
</div>
<div id="playlistFooter" data-theme="a" data-role="footer" data-position="fixed">
</div>
</div>


</div>
<div id="songPlaying"></div>

</body>
</html>
