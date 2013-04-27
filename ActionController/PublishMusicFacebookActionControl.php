<?php
include_once 'MainActionControl.php';
session_start();

/* handle facebook sharing */

class PublishMusicFacebookActionControl extends MainActionControl
{
	private $musSerai; //int
	private $musName; //String


	/* it will redirect to facebook share page*/
	public function publishMusicViaFacebook()
	{
		ob_start();
		$url = "https://m.facebook.com/dialog/feed?app_id=114535922062373&link=http://".$_SERVER['HTTP_HOST']."/3100/app.php";
		$url .= "&picture=http://".$_SERVER['HTTP_HOST']."/3100/media/pic/icon.jpg&name=MusicParade&%20caption=Listening%20Song";
		$url .= "&%20description=I%20am%20listening%20".$_SESSION['musName'];
		$url .= "%20&%20redirect_uri=http://".$_SERVER['HTTP_HOST']."/3100/app.php";
		header("Location: ".$url);
		ob_end_flush();
		exit;

	}
}

/* handle by direct link*/
$command = new PublishMusicFacebookActionControl();
$command->publishMusicViaFacebook();

?>