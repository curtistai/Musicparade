<?php
session_start();
include_once 'MainActionControl.php';
include_once '../Command/AddFavoriteMusic.php';
include_once '../Command/RemoveFavoriteMusic.php';


class FavoriteMusicActionControl extends MainActionControl
{
	private $musSerial;//int
	private $musName;//String

	public function addFavoriteMusic()
	{
		$addFavoriteMusicCommand = new AddFavoriteMusic();
		$addFavoriteMusicCommand->execute();
		self::redirect();
	}

	public function removeFavoriteMusic()
	{
		$removeFavoriteMusicCommand = new RemoveFavoriteMusic();
		$removeFavoriteMusicCommand->execute();
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

if ($_GET['action']=="add")
	$controller->addFavoriteMusic();
else if ($_GET['action']=="rm")
	$controller->removeFavoriteMusic();



?>