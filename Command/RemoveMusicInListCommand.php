<?php
    include_once 'Command.php';

    class RemoveMusicInListCommand extends Command
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new RemoveMusicInListCommand();
        }
        
        /*
         @uses Remove the music from the list of music by the music serial, send the music serial to system controller for deletion
        */
        public function execute(){
            parent::print_test('Run RemoveMusicInListCommand');
            parent::print_test('');
            
            $removeMusicSerial = $_SESSION['removeMusicSerial'];
                        
            $sysControl = $_SESSION['sysControl'];
            #$sysControl::removeMusicFromList("mus00");

            $sysControl::removeMusicFromList($removeMusicSerial);
        }
        
    }

?>
