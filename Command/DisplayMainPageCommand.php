<?php
   include_once 'Command.php';

    class DisplayMainPageCommand extends Command
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new DisplayMainPageCommand();
        }
        
        /*
         @uses Find the music list for the main page of the website
         @return Return the list of music
        */
        public function execute(){
            #parent::print_test('Run DisplayMainPageCommand');
            parent::print_test('');
            
            $sysControl = $_SESSION['sysControl'];

            return $sysControl::getMusicList();
        }
        
    }

?>