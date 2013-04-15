<?php

# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_localhost_MySQL = "127.0.0.1";
$database_localhost_MySQL = "3100";
$username_localhost_MySQL = "root";
$password_localhost_MySQL = "";
$con = mysql_connect($hostname_localhost_MySQL, $username_localhost_MySQL, $password_localhost_MySQL) or trigger_error(mysql_error(),E_USER_ERROR); 

// Check connection
#if (mysql_connect_errno($con))
 ##echo "Failed to connect to MySQL: " . mysql_connect_error();
  #}
  
mysql_select_db($database_localhost_MySQL, $con)

?>