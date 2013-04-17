<?php
include_once 'MainActionControl.php';

class LoginFacebookActionControl extends MainActionControl
{
    private $facebookUserId;
    private $fbLName;
    private $fbFName;
    private $token;
    
    public function getTokenFromFacebook(){
        header("Location: https://m.facebook.com/dialog/oauth/?client_id=114535922062373&response_type=token&redirect_uri=http://".$_SERVER['HTTP_HOST']."/3100/ActionController/LoginFacebookActionControl.php?action=recall&scope=email");
    }
    
    public function redirectBackFromFacebook(){
                echo <<<EOD
<script type="text/javascript">window.location.href = window.location.href.replace(/#/g,'?'); 
</script>
EOD;
    }
    
    public function login(){
        $token = $_GET['access_token'];
        if (!isset($token)){
            echo <<<EOD
<script type="text/javascript">window.location.href = window.location.href.replace(/#/g,'?'); 
</script>
EOD;
        }else{
            $xml = file_get_contents('https://graph.facebook.com/me?access_token='.$token);
            echo $xml;

            $obj = json_decode($xml);

            $facebookUserId = $obj->{'id'};
            $fbFName = $obj->{'first_name'};
            $fbLName = $obj->{'last_name'};
            
            $_SESSION['facebookUserId'] = $facebookUserId;
    
            header( 'Location: app.php' ) ;
            
            // Call Command
        }

    }

}


$controller = new LoginFacebookActionControl();
if ($_GET['action']=="login")
    $controller->getTokenFromFacebook();
else if ($_GET['action']=="recall"){
    $controller->login();
}


?>