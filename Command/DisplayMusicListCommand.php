<?php
    include_once 'Command.php';

    class DisplayMusicListCommand extends Command
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new DisplayMusicListCommand();
        }
        
        /*
         @uses Add the music from user selection by music serial, send the serial to system controller to insert into database
        */
        public function execute(){
            parent::print_test('Run DisplayMusicListCommand');
            parent::print_test('');
                        
            $sysControl = $_SESSION['sysControl'];
            return $sysControl::getMusicList();
        }
        
    }

?>