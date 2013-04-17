<?php
include_once 'MainActionControl.php';
session_start();

class PublishMusicFacebookActionControl extends MainActionControl
{
	private $musSerai; //int
	private $musName; //String

	public function publishMusicViaFacebook()
	{
		ob_start();
		$url = "https://m.facebook.com/dialog/feed?app_id=114535922062373&link=http://curtis.taiserver.tk/3100/app.php";
		$url .= "&picture=http://curtis.taiserver.tk/3100/media/pic/icon.jpg&name=MusicParade&%20caption=Listening%20Song";
		$url .= "&%20description=I%20am%20listening%20".$_SESSION['musName'];
		$url .= "%20&%20redirect_uri=http://curtis.taiserver.tk/3100/app.php";
		header("Location: ".$url);
		ob_end_flush();
		exit;

	}
}
$command = new PublishMusicFacebookActionControl();
$command->publishMusicViaFacebook();

?>