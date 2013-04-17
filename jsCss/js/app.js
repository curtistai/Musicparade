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
            $('.share').hide();


            $('#addFav').click(function(){
                        $("#playlistInfavourite").load("ActionController/FavoriteMusicActionControl.php?action=add");       
            });
            $('#addFavSearch').click(function(){
                        $("#playlistInfavourite").load("ActionController/FavoriteMusicActionControl.php?action=add");       
            });
            $('#rmvFav').click(function(){
                        $("#playlistInfavourite").load("ActionController/FavoriteMusicActionControl.php?action=rm");       
            });
            
            $('#addList').click(function(){
                        $("#playlistInplaylist").load("ActionController/StoreListMusicActionControl.php?action=add");       
            });
            $('#addListSearch').click(function(){
                        $("#playlistInplaylist").load("ActionController/StoreListMusicActionControl.php?action=add");       
            });
            $('#rmvList').click(function(){
                        $("#playlistInplaylist").load("ActionController/StoreListMusicActionControl.php?action=rm");       
            });

                        
            $('.song').click(function(){
                        $('#songPlaying').load("ActionController/SetSessionActionController.php?name=musSerai&value="+$(this).attr('id'));
                        $('#songPlaying').load("ActionController/SetSessionActionController.php?name=musName&value="+$(this).text());
            });      
});