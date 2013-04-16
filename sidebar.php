<?php
	
function printSiderBar(){
	echo <<<EOF
<div data-role="panel" id="functions" data-theme="a"
	data-position="left" data-display="push">
<button type="button" data-theme="c"
	onclick="window.location = '#favourite';">Favourite</button>
<button type="button" data-theme="c">Popular</button>
<button type="button" data-theme="c">Logout</button>

</div>
EOF;

}



?>