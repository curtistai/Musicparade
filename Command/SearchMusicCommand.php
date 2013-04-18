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
         @uses Add the music from user selection by music serial, send the serial to system controller to insert into database
        */
        public function execute(){
            parent::print_test('Run SearchMusicCommand');
            parent::print_test('');
            
            $musicName = $_SESSION['musicName'];
                        
            $sysControl = $_SESSION['sysControl'];
            return $sysControl::searchMusic($musicName);
        }
        
    }

?>