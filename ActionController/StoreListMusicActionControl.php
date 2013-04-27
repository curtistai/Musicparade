<?php
session_start();
include_once 'MainActionControl.php';
include_once '../Command/AddMusicInListCommand.php';
include_once '../Command/RemoveMusicInListCommand.php';

/* store music in list */

class StoreListMusicActionControl extends MainActionControl
{
	/* add music into list*/
	public function addMusicToList(){
		
		$addMusicListCommand = new AddMusicInListCommand();/* call command*/
		$addMusicListCommand->execute();
		self::redirect();/* for reload*/
	}

	/* save the current list*/
	public function saveCurrentMusicList(){
		self::redirect();/* for reload*/

	}

	/* remove music from list */
	public function removeMusicFromList(){
		$removeMusicListCommand = new RemoveMusicInListCommand();/* call command*/
		$removeMusicListCommand->execute();
		self::redirect();/* for reload*/

	}
	
	public function redirect(){
		ob_start();
		header("Location: ./ActionController/DisplayMusicMainPageActionControl.php?action=playlist");
		ob_end_flush();
		exit;
	}
}

/* handle by get request */
$controller = new StoreListMusicActionControl();
$action = $_GET['action'];

if ($action == "add")
	$controller->addMusicToList();
else if($action == "save")
	$controller->addMusicToList();
else if($action == "rm")
	$controller->addMusicToList();



?>