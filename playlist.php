<?php


function printSongList($url,$name){
	echo <<<EOF
<li><a
		href="
EOF;
	echo $url;
	echo <<<EOF
">
EOF;
	echo $name;
	echo <<<EOF
 </a></li>
EOF;
}


?>