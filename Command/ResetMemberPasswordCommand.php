<?php
    include_once 'Command.php';

    class ResetMemberPasswordCommand extends Command
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new ResetMemberPasswordCommand();
        }
        
        /*
         @uses Add the music from user selection by music serial, send the serial to system controller to insert into database
        */
        public function execute(){
            #parent::print_test('Run ResetMemberPasswordCommand');
            parent::print_test('');
            
            $memberSerial = $_SESSION['memberSerial'];
                        
            $sysControl = $_SESSION['sysControl'];
            return $sysControl::resetMemberPassword(memberSerial);
        }
        
    }

?>