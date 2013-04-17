<?php
session_start();
include_once 'MainActionControl.php';


class FavoriteMusicActionControl extends MainActionControl
{
	private $musSerial;//int
	private $musName;//String

	public function addFavoriteMusic()
	{
		//$_SESSION['song'];
		self::redirect();
	}

	public function removeFavoriteMusic()
	{
		//$_SESSION['song'];
		self::redirect();
	}
	
	public function redirect(){
		ob_start();
		header("Location: ./ActionController/DisplayMusicMainPageActionControl.php?action=fav");
		ob_end_flush();
		exit;
	}
}
$controller = new FavoriteMusicActionControl();
		echo "xxx".$_SESSION['facebookUserId'];

if ($_GET['action']=="add")
	$controller->addFavoriteMusic();
else if ($_GET['action']=="rm")
	$controller->removeFavoriteMusic();



?>