<?php
    include_once 'Command.php';

    class AddMusicInListCommand extends Command
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new AddMusicInListCommand();
        }
        
        /*
         @uses Add the music from user selection by music serial, send the serial to system controller to insert into database
        */
        public function execute(){
            parent::print_test('Run AddMusicInListCommand');
            parent::print_test('');
            
            $addMusicSerial = $_SESSION['addMusicSerial'];
                        
            $sysControl = $_SESSION['sysControl'];
            $sysControl::addMusicIntoList($addMusicSerial);
        }
        
    }

?>