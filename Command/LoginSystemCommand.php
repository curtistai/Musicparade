<?php
   include_once 'Command.php';

    class LoginSystemCommand extends Command
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new LoginSystemCommand();
        }
        
        /*
         @uses Receive the music list name, and send it to system controller for storing the music list into database
         @return Return if the storing result is successful or not. True for ok, flase for fail
        */
        public function execute(){
            parent::print_test('Run LoginSystemCommand');
            parent::print_test('');

            $facebookUserId = $_SESSION['facebookUserId'];
            
            $sysControl = $_SESSION['sysControl'];
            return $sysControl::loginSystem($facebookUserId);
            
        }
        
    }
?>