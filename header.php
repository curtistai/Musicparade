<?php
function printHeader($subPageName){
	echo <<< EOD
<div id="header" data-theme="b" data-role="header" data-position="fixed">
	<a href="#functions" data-icon="bars" data-iconpos="notext" data-shadow="false" data-iconshadow="false">Menu</a> 
	<a href="ActionController/LoginFacebookActionControl.php?action=login"
			data-icon="gear" class="ui-btn-right">
EOD;
	if (isset($_SESSION['fbName'])){
		echo $_SESSION['fbName'];
	}else
		echo "Login";
	
	echo <<<EOD
</a>

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
			echo " | ".$subPageName;
			
		}
		echo <<< EOD
</h3>
</div>	
EOD;
	}
	
?>