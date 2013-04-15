<?php
   include_once 'PublishMusicCommand.php';

    class PublishMusicViaFacebook extends PublishMusicCommand
    {
        /*
         @uses Factory method, returning itself
        */
        public function createCommand(){
            return new PublishMusicViaFacebook();
        }
        
        /*
         @uses
        */
        public function execute(){
            parent::print_test('Run PublishMusicViaFacebook');
            parent::print_test('');
            
            
            //To be completed
        }
        
    }
?>