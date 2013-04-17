<?php
session_start();
include_once 'MainActionControl.php';

class StoreListMusicActionControl extends MainActionControl
{

	public function addMusicToList(){
		//$_SESSION['musSerai'];
		self::redirect();
	}

	public function saveCurrentMusicList(){
		//$_SESSION['musSerai'];
		self::redirect();

	}

	public function removeMusicFromList(){
		//$_SESSION['musSerai'];
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