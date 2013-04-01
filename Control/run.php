<html>
    <body>
<?php
    include 'AddMusicInListCommand.php';
    
    $cmd = new AddMusicInListCommand();
    #$cmd = new ReflectionClass('AddMusicInListCommand');
    $cmd->execute();
    
    $cmd = new AddMusicInListCommand();
    #$cmd = new ReflectionClass('AddMusicInListCommand');
    $cmd->execute();
?>
    </body>
</html>