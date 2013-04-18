<?php
   include_once 'Command.php';

    class DisplayFavouriteMusicCommand extends Command
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new DisplayFavouriteMusicCommand();
        }
        
        /*
         @uses Find the music list for the main page of the website
         @return Return the list of music
        */
        public function execute(){
            #parent::print_test('Run DisplayFavouriteMusicCommand');
            parent::print_test('');
            
            $sysControl = $_SESSION['sysControl'];

            return $sysControl::getFavoriteMusicList();
        }
        
    }

?>