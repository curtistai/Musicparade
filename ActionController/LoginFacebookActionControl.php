<?php
include_once 'MainActionControl.php';
include_once '../Command/LoginSystemCommand.php';

class LoginFacebookActionControl extends MainActionControl
{
    private $facebookUserId;
    private $fbLName;
    private $fbFName;
    private $token;
    
    public function getTokenFromFacebook(){
        ob_start();
        header("Location: https://m.facebook.com/dialog/oauth/?client_id=114535922062373&response_type=token&redirect_uri=http://".$_SERVER['HTTP_HOST']."/3100/ActionController/LoginFacebookActionControl.php?action=recall&scope=email");
        ob_end_flush();
        exit;
    }
    
    public function redirectBackFromFacebook(){
        echo <<<EOD
<script type="text/javascript">window.location.href = window.location.href.replace(/#/g,'?'); 
</script>
EOD;
        exit;
    }
    
    public function login(){
        ob_start();
        $token = $_GET['access_token'];
        if (!isset($token)){
            echo <<<EOD
<script type="text/javascript">window.location.href = window.location.href.replace(/#/g,'&'); 
</script>
EOD;
        }else{
            session_start();
            $xml = file_get_contents('https://graph.facebook.com/me?access_token='.$token);

            $obj = json_decode($xml);

            $facebookUserId = $obj->{'id'};
            $fbFName = $obj->{'first_name'};
            $fbLName = $obj->{'last_name'};
            $fbUEmail = $obj->{'email'};
            
            $_SESSION['facebookUserId'] = $facebookUserId;             
            $_SESSION['facebookUserLName'] = $fbLName;
            $_SESSION['facebookUserFName'] = $fbFName;
            $_SESSION['facebookUserEmail'] = $fbUEmail;
            
            $command = new LoginSystemCommand();
            print_r($command->execute());
            
 
            header( 'Location: ../app.php' ) ;
            // Call Command
        }
        ob_end_flush();
        exit;

    }

}


$controller = new LoginFacebookActionControl();
if ($_GET['action']=="login")
    $controller->getTokenFromFacebook();
else if ($_GET['action']=="recall"){
    $controller->login();
}else{
    ob_start();
    header( 'Location: ../app.php' ) ;
    ob_end_flush();
}


?>