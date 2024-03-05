<?php
//if (!isset($_GET["username"]))
//{
//  header("Content-Type: application/json");
//  exit(json_encode(array("Error" => "Invalid request type", "message" => "HADI ON TOP")));
//}

//{"Error" : "Invalid request type"}
$joinScriptUrl = null;
$authUrl = "http://www.rb15.us.to/Login/Negotiate.ashx";
    $joinScriptUrl = null;
 if (isset($_GET["placeId"]))
  {
  $joinScriptUrl = "http://www.rb15.us.to/Game/Join.ashx?placeId=" . $_GET["placeId"];
  } //"http://www.rb15.us.to/Game/Join.ashx?username=" . urlencode($_GET["username"]) . "&ip=" . $_GET["ip"] . "&port=" . $_GET["port"];
$script = array(
    "jobId" => "Test",
    "status" => 2,
    "joinScriptUrl" => $joinScriptUrl,
    "authenticationUrl" => $authUrl,
    "authenticationTicket" => "1",
    "message" => "HADI ON TOP"
);

header("Content-Type: application/json");
echo(str_replace('\\/', '/', json_encode($script)));
//echo(json_encode($script));

