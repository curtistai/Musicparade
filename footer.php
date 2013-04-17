<?php

function printFooter(){
	echo <<<EOD
<div data-theme="a" data-role="footer" data-position="fixed">
<div class="ui-grid-b" style="text-align: center;">
	<div class="ui-block-a"><h3 id="footerMsg">Bring you the best Music</h3></div>
	<div class="ui-block-b"><a id="addList" href="index.html" data-role="button" data-icon="plus" data-iconpos="left">Add To List</a></div>
	<div class="ui-block-c"><a id="addFav"href="index.html" data-role="button" data-icon="star" data-iconpos="left">Favourite</a></div>
</div>
</div>
EOD;
}

?>