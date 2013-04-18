<?php
session_start();
include_once 'MainActionControl.php';
include_once '../Command/AddMusicInListCommand.php';
include_once '../Command/RemoveMusicInListCommand.php';

class StoreListMusicActionControl extends MainActionControl
{

	public function addMusicToList(){
		
		$addMusicListCommand = new AddMusicInListCommand();
		$addMusicListCommand->execute();
		self::redirect();
	}

	public function saveCurrentMusicList(){
		self::redirect();

	}

	public function removeMusicFromList(){
		$removeMusicListCommand = new RemoveMusicInListCommand();
		$removeMusicListCommand->execute();
		self::redirect();

	}
	
	public function redirect(){
		ob_start();
		header("Location: ./ActionController/DisplayMusicMainPageActionControl.php?action=playlist");
		ob_end_flush();
		exit;
	}
}

$controller = new StoreListMusicActionControl();
$action = $_GET['action'];

if ($action == "add")
	$controller->addMusicToList();
else if($action == "save")
	$controller->addMusicToList();
else if($action == "rm")
	$controller->addMusicToList();



?>