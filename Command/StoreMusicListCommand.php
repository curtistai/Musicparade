<?php
   include_once 'Command.php';

    class StoreMusicListCommand extends Command
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new StoreMusicListCommand();
        }
        
        /*
         @uses Receive the music list name, and send it to system controller for storing the music list into database
         @return Return if the storing result is successful or not. True for ok, flase for fail
        */
        public function execute(){
            #parent::print_test('Run StoreMusicListCommand');
            parent::print_test('');

            $musListName = $_SESSION['musListName'];
            
            $sysControl = $_SESSION['sysControl'];
            return $sysControl::storeMusicList();
            
        }
        
    }
?>