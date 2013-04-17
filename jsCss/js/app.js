$(document).ready(function(){
	    $("#searchbox").keypress(function(event) {
	    	$("#playlistInSearch").load("ActionController/searchMusicActionControl.php");
	    });
	    $('#addList').hide();
	    $('#addFav').hide();
});