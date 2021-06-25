<?php
include_once('./config/curl_command.php');
include_once('./config/dbconfig.php');
include_once('./config/dbconnect.php');

$CurlCommand = new CurlOutput;
var_dump($CurlCommand->curlOutput);
?>
