$(document).ready(function(){
	    $("#searchbox").keypress(function(event) {
	    	$("#playlistInSearch").load("ActionController/searchMusicActionControl.php");
	    });
	    $('#addList').hide();
	    $('#addFav').hide();
	    $('#addListSearch').hide();
	    $('#addFavSearch').hide();            
	    $('#rmvList').hide();
	    $('#rmvFav').hide();
            $('#songPlaying').hide();

            $('#addFav').click(function(){
                        $("#playlistInfavourite").load("ActionController/FavoriteMusicActionControl.php?action=add");       
            });
            $('#addFavSearch').click(function(){
                        $("#playlistInfavourite").load("ActionController/FavoriteMusicActionControl.php?action=add");       
            });
            $('#rmvFav').click(function(){
                        $("#playlistInfavourite").load("ActionController/FavoriteMusicActionControl.php?action=rm");       
            });

                        
            $('.song').click(function(){
                        $('#songPlaying').load("ActionController/SetSessionActionController.php?name=song&value="+$(this).attr('id'));
            });      
});