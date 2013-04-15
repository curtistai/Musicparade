<?php

$token = $_GET['access_token'];

if (!isset($token)){
    echo <<<EOD
<script type="text/javascript">window.location.href = window.location.href.replace(/#/g,'?'); 
</script>
EOD;
}
else{
    $xml = file_get_contents('https://graph.facebook.com/me?access_token='.$token);

    $obj = json_decode($xml);

    $_SESSION['fbId'] = $obj->{'id'};
    $_SESSION['fbName'] = $obj->{'name'};
    
    header( 'Location: app.php' ) ;
}

?>
