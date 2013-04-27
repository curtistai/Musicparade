<?php
    include_once 'Command.php';

    class ErrorFoundCommand extends Command
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new ErrorFoundCommand();
        }
        
        /*
         @uses Add the music from user selection by music serial, send the serial to system controller to insert into database
        */
        public function execute(){
            parent::print_test('Run ErrorFoundCommand');
            parent::print_test('');
            
            $errorDescription = $_SESSION['errorDescription'];
                        
            $sysControl = $_SESSION['sysControl'];
            return $sysControl::systemErrorFound($errorDescription);
        }
        
    }

?>