<?php
//{"Error" : "Invalid request type"}
$joinScriptUrl = "http://www.rb15.us.to/Game/Join.ashx";
$authUrl = "http://www.rb15.us.to/Login/Negotiate.ashx";

$script = array(
    "jobId" => "Test",
    "status" => 2,
    "joinScriptUrl" => $joinScriptUrl,
    "authenticationUrl" => $authUrl,
    "authenticationTicket" => "1",
    "message" => null
);

header("Content-Type: application/json");
echo(str_replace('\\/', '/', json_encode($script)));
//echo(json_encode($script));

