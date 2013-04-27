<?php
    include_once 'FavoriteMusicCommand.php';

    class AddFavoriteMusic extends FavoriteMusicCommand
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new AddFavoriteMusic();
        }
        
        /*
         @uses Add the music from user selection by music serial, send the serial to system controller to insert into database
        */
        public function execute(){
            parent::print_test('Run AddFavoriteMusic');
            parent::print_test('');
            
            $musicSerial = $_SESSION['musicSerial'];
                        
            $sysControl = $_SESSION['sysControl'];
            $sysControl::addFavoriteMusic($musicSerial);
        }
        
    }

?>