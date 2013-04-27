<?php
session_start();
include_once 'MainActionControl.php';
include_once '../Command/AddFavoriteMusic.php';
include_once '../Command/RemoveFavoriteMusic.php';

/* for adding and remove music from favoruite music list*/


class FavoriteMusicActionControl extends MainActionControl
{
	private $musSerial;//int
	private $musName;//String

	/* add to favourite list */
	public function addFavoriteMusic()
	{
		$addFavoriteMusicCommand = new AddFavoriteMusic();
		$addFavoriteMusicCommand->execute(); /* call command to execute */
		self::redirect(); /* redirect back to main page */
	}

	public function removeFavoriteMusic()
	{
		$removeFavoriteMusicCommand = new RemoveFavoriteMusic();
		$removeFavoriteMusicCommand->execute();/* call command to execute */
		self::redirect();/* redirect back to main page */
	}
	
	public function redirect(){
		ob_start();
		header("Location: ./ActionController/DisplayMusicMainPageActionControl.php?action=fav");
		ob_end_flush();
		exit;
	}
}
/* handle by GET request */
$controller = new FavoriteMusicActionControl();

if ($_GET['action']=="add")
	$controller->addFavoriteMusic();
else if ($_GET['action']=="rm")
	$controller->removeFavoriteMusic();



?>