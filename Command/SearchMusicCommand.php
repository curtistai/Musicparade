<?php
    include_once 'Command.php';

    class SearchMusicCommand extends Command
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new SearchMusicCommand();
        }
        
        /*
         @uses Search Music by returning the music gets from the controller 
        */
        public function execute(){
            parent::print_test('Run SearchMusicCommand');
            parent::print_test('');
            
            $musicName = $_SESSION['musicName'];
                        
            $sysControl = $_SESSION['sysControl'];
            $sysControl::searchMusic($musicName);
        }
        
    }

?>