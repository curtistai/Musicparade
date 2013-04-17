<?php
session_start();
require_once("./ActionController/DisplayMusicMainPageActionControl.php");

$controller = new DisplayMusicMainPageActionControl()
//require_once("header.php");
//require_once("sidebar.php");
//require_once("footer.php"); ?>

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
$controller->printSiderBar();
$controller->printHeader("Popular");
 ?>
<div data-role="content">
<ul class="playlist" id="playlistInpopular">
	    <?php $controller->displayPopularList(); ?>
</ul>
</div>

<?php $controller->printFooter(); ?>

</div>

<!-- Search -->
<div data-role="page" id="search">

<?php
$controller->printSiderBar();
$controller->printHeader("Search");
 ?>
<div id="searchDIV">
<input id="searchbox" value="" placeholder="Join our Music Nation..." /> </div>
<div data-role="content">
<ul class="playlist" id="playlistInSearch">
	    <?php $controller->displaySearchList(); ?>
</ul>
</div>

<?php $controller->printFooter(); ?>

</div>

<!-- Favourite -->
<div data-role="page" id="favourite">

 <?php
$controller->printSiderBar();
$controller->printHeader("Favourite");
 ?>
<div data-role="content">
<ul class="playlist" id="playlistInfavourite">
	    <?php $controller->displayFavouriteList(); ?>
</ul>
</div>

<?php $controller->printFooter(); ?>

</div>

<!-- Playlist -->
<div data-role="page" id="playlist">

  <?php
$controller->printSiderBar();
$controller->printHeader("Playlist");
 ?>

<div data-role="content">
<ul class="playlist" id="playlistInplaylist">
	    <?php $controller->displayPlaylist(); ?>
</ul>
</div>

<?php $controller->printFooter(); ?>

</div>


</div>

</body>
</html>
