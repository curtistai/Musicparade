<?php
    include_once 'FavoriteMusicCommand.php';

    class RemoveFavoriteMusic extends FavoriteMusicCommand
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new RemoveFavoriteMusic();
        }
        
        /*
         @uses Add the music from user selection by music serial, send the serial to system controller to insert into database
        */
        public function execute(){
            #parent::print_test('Run RemoveFavoriteMusic');
            parent::print_test('');
            
            $musicSerial = $_SESSION['musSerial'];
                        
            $sysControl = new MusicSysControl();
            $sysControl->removeFavoriteMusic($musicSerial);
        }
        
    }

?>