<?php
	function printHeader($subPageName){
		echo <<< EOD
<div id="header" data-theme="b" data-role="header" data-position="fixed">
	<a href="#functions" data-icon="bars" data-iconpos="notext" data-shadow="false" data-iconshadow="false">Menu</a> 
	<a href="https://m.facebook.com/dialog/oauth/?client_id=114535922062373&redirect_uri=http://curtis.taiserver.tk/3100/app.php"
			data-icon="gear" class="ui-btn-right">Login</a>
	<h3>MusicParade
EOD;
		if ($subPageName!=""){
			echo " | ".$subPageName;
			
		}
		echo <<< EOD
</h3>
</div>	
EOD;
	}
	
?>