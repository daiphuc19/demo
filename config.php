<?php

define('DB_SERVER', 'ec2-52-44-55-63.compute-1.amazonaws.com');
define('DB_USERNAME', 'lqbselzickahdy');
define('DB_PASSWORD', '873e938aa51eb1a6849081c6e4689a950dcf993c69a8f7037aa316a9f10a86be');
define('DB_NAME', 'ddtm7qd6tfchu5');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
