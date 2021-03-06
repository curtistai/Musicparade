<?php
    include_once 'MusicSysControl.php';
    
    abstract class Command
    {
        protected $systemControl;
        
        public function __construct()
        {
            try{
                error_reporting(0);
                
                session_start() or die();
                
                //If system controller has not been instantiate
                //Put one into session
                if ($_SESSION['sysControl'] == NULL){
        
                    $systemControl = new MusicSysControl();
                    $_SESSION['sysControl'] = $systemControl;
                    self::print_test('Music System Control initialized');
                    
                    #$systemControl->setTest();

                }
                
                #$systemControl = $_SESSION['sysControl'];
                #echo $systemControl->getTest();
                
                error_reporting(-1);
            }
            catch(Exception $ex)
            {
                echo 'Exception Caught in Command class';    
            }
        }
        
        abstract protected function createCommand();
        abstract protected function execute();
        
        protected function print_test($var)
        {
            echo "<div>$var</div>";
        }
    }

?>