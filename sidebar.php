<?php
	
function printSiderBar(){
	echo <<<EOF
<div data-role="panel" id="functions" data-theme="a"
	data-position="left" data-display="push">
<button type="button" data-theme="c"
	onclick="window.location = '#favourite';">Favourite</button>
<button type="button" data-theme="c"
	onclick="window.location = '#magazine';">Magazine</button>
<button type="button" data-theme="c">Popular</button>
</div>
EOF;

}



?>