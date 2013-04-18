<?php
    function printHeader($subPageName){
        echo <<< EOD
<div id="header" data-theme="b" data-role="header" data-position="fixed">
        <a href="#functions" data-icon="bars" data-iconpos="notext" data-shadow="false" data-iconshadow="false">Menu</a> 
        <a href="./ActionController/LoginFacebookActionControl.php?action=login"
                rel="external"  data-icon="gear" class="ui-btn-right">
EOD;
        if (isset($_SESSION['facebookUserLName'])){
                echo $_SESSION['facebookUserLName'];
        }else
                echo "Login";
        
        echo <<<EOD
</a><h3>MusicParade
EOD;
                if ($subPageName!=""){
                        echo " | ".$subPageName;
                        
                }
                echo <<< EOD
</h3>
</div>  
EOD;
        }
        
	function printFooter(){
                echo <<<EOD
<div data-theme="a" data-role="footer" data-position="fixed">
<div class="ui-grid-c" style="text-align: center;">
	<div class="ui-block-a"><h3 id="footerMsg">Bring you the best Music</h3></div>
	<div class="ui-block-b"><a id="addList" data-role="button" data-icon="plus" data-iconpos="left">Add To List</a></div>
	<div class="ui-block-c"><a id="addFav" data-role="button" data-icon="star" data-iconpos="left">Add to Favourite</a></div>
	<div class="ui-block-d"><a class="share" id="shareFav" rel="external" href="./ActionController/PublishMusicFacebookActionControl.php" data-role="button" data-icon="star" data-iconpos="left">Share to Facebook</a></div>
</div>
</div>
EOD;
        }
        
        function printSearchFooter(){
                echo <<<EOD
<div data-theme="a" data-role="footer" data-position="fixed">
<div class="ui-grid-c" style="text-align: center;">
	<div class="ui-block-a"><h3 id="footerMsg">Bring you the best Music</h3></div>
	<div class="ui-block-b"><a id="addListSearch" data-role="button" data-icon="plus" data-iconpos="left">Add To List</a></div>
	<div class="ui-block-c"><a id="addFavSearch" data-role="button" data-icon="star" data-iconpos="left">Add to Favourite</a></div>
	<div class="ui-block-d"><a class="share" id="shareSearch" rel="external" data-role="button" data-icon="star" data-iconpos="left">Share to Facebook</a></div>

</div>
</div>
EOD;
        }
        
        
        function printFavFooter(){
                echo <<<EOD
<div data-theme="a" data-role="footer" data-position="fixed">
<div class="ui-grid-b" style="text-align: center;">
	<div class="ui-block-a"><h3 id="footerMsgFav">Bring you the best Music</h3></div>
	<div class="ui-block-b"><a id="rmvFav" data-role="button" data-icon="delete" data-iconpos="left">Remove From Favourite</a></div>
	<div class="ui-block-c"><a class="share" id="shareFav" rel="external" data-role="button" data-icon="star" data-iconpos="left">Share to Facebook</a></div>
</div>
</div>
EOD;
        }
        
        function printPlaylistFooter(){
                echo <<<EOD
<div data-theme="a" data-role="footer" data-position="fixed">
<div class="ui-grid-b" style="text-align: center;">
	<div class="ui-block-a"><h3 id="footerMsgPlaylist">Bring you the best Music</h3></div>
	<div class="ui-block-b"><a id="rmvList" data-role="button" data-icon="delete" data-iconpos="left">Remove from List</a></div>
	<div class="ui-block-c"><a class="share" id="sharePlayList" rel="external" data-role="button" data-icon="star" data-iconpos="left">Share to Facebook</a></div>
</div>
</div>
EOD;
        }

        
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