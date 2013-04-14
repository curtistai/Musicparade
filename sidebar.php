<?php
	
function printSiderBar(){
	echo <<<EOF
<div data-role="panel" id="functions" data-theme="a"
	data-position="left" data-display="push"><input type="search"
	name="password" id="search" value=""
	placeholder="Join our Music Nation...">
<button type="button" data-theme="c"
	onclick="window.location = '#favourite';">Favourite</button>
<button type="button" data-theme="c"
	onclick="window.location = '#magazine';">Magazine</button>
<button type="button" data-theme="c">Popular</button>
</div>
EOF;

}



?>