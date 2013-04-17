<?php
	
function printSiderBar(){
	echo <<<EOF
<div data-role="panel" id="functions" data-theme="a"
	data-position="left" data-display="push">
<button type="button" data-theme="c"
	onclick="window.location = '#popular';">Popular</button>
<button type="button" data-theme="c"
	onclick="window.location = '#favourite';">Favourite</button>
<button type="button" data-theme="c"
	onclick="window.location = '#playlist';">PlayList</button>
<button type="button" data-theme="c"
	onclick="window.location = '#search';">Search</button>

<button type="button" data-theme="c"
	onclick="window.location = '#logout';">Logout</button>

</div>
EOF;

}



?>