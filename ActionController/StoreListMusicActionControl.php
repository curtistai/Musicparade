<?php
include_once 'MainActionControl.php';

class StoreListMusicActionControl extends MainActionControl
{

	public function addMusicToList(){
		$_SESSION['musicSerial'] = ;
		
	}

	public function saveCurrentMusicList(){
	}

	public function removeMusicFromList(){
	}
}

$controller = new StoreListMusicActionControl();
$action = $_GET['action'];

if ($action == "add"){
	
	
}else if($action == "save")


?>