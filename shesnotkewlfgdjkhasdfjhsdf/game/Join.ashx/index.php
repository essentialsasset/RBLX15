<?php
  // do not mess up the joinscript newuser - meditation
  // i had to get the backup from 2 days ago.
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';
  
if (isset($_GET["placeId"]))
  {
    $FindGame = $pdo->prepare("SELECT * FROM `games` WHERE `gameId` = :gameId");
    $FindGame->bindParam(":gameId",$_GET["placeId"]);
    $FindGame->execute();
    if($FindGame->rowCount() == 1){
      $row = $FindGame->fetch(PDO::FETCH_ASSOC);
    }
}
$userid = rand(5000, 9999);
$username = null;
$charapp = "http://rb15.us.to/Asset/CharacterFetch.ashx";
$jobid = "Test";
$gameid = null;
$creatorid = 1;
$membership = "None";
$accountAge = 365;
$ip = null;
$port = null;
  
if (isset($_GET["ip"])) {
  $ip = $_GET["ip"];
}
elseif (!isset($_GET["placeId"])) {
   $ip = "127.0.0.1";
}
else {
  $ip = $row["gameIp"];
}

if (isset($_GET["placeId"])) {
  $gameid = $_GET["placeId"];
}
else {
  $gameid = "1818";
}
 
  
if (isset($_GET["port"])) {
  $port = $_GET["port"];
}
elseif (isset($_GET["placeId"])) {
  $port = $row["port"];
}
else {
  $port = "53640";
}
if($row["client"] == "2014"){
$joinscript = file_get_contents("./2014.txt");
  $joinscript = str_replace("%replaceme%",rand(5000, 9999),$joinscript);
  $joinscript = str_replace("%username%","Guest " . rand(5000, 9999),$joinscript);
  $joinscript = str_replace("%serverip%",$row["gameIp"],$joinscript);
  $joinscript = str_replace("%serverport%",$row["port"],$joinscript);
  $joinscript = str_replace("%serverip1%",$row["gameIp"],$joinscript);
  $joinscript = str_replace("%serverport1%",$row["port"],$joinscript);
  $joinscript = str_replace("%charApp%",$charapp,$joinscript);
$joinscript = gameUtils::signv1($joinscript);
 header("content-type: text/plain");
exit($joinscript);
}else{
$joinscript = array(
  "ClientPort" => 0,
  "MachineAddress" => $ip,
  "ServerPort" => $port,
  "PingUrl" => "",
  "PingInterval" => 30,
  "UserName" => "Guest " . $userid,
  "SeleniumTestMode" => false,
  "UserId" => $userid,
  "SuperSafeChat" => false,
  "CharacterAppearance" => $charapp,
  "GameId" => $jobid,
  "PlaceId" => 1818,
  "MeasurementUrl" => "",
  "WaitingForCharacterGuid" => "26eb3e21-aa80-475b-a777-b43c3ea5f7d2",
  "BaseUrl" => "http://www.rb15.us.to/",
  "ChatStyle" => "ClassicAndBubble",
  "VendorId" => "0",
  "ScreenShotInfo" => "",
  "VideoInfo" => "",
  "CreatorId" => $creatorid,
  "CreatorTypeEnum" => "User",
  "MembershipType" => $membership,
  "AccountAge" => $accountAge,
  "CookieStoreFirstTimePlayKey" => "rbx_evt_ftp",
  "CookieStoreFiveMinutePlayKey" => "rbx_evt_fmp",
  "CookieStoreEnabled" => true,
  "IsRobloxPlace" => false,
  "GenerateTeleportJoin" => false,
  "IsUnknownOrUnder13" => false,
  "SessionId" => "",
  "DataCenterId" => 69420,
  "UniverseId" => $gameid,
  "BrowserTrackerId" => 0,
  "UsePortraitMode" => false,
  "FollowUserId" => 0
);

$joinscript = json_encode($joinscript, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
$joinscript = gameUtils::signv1($joinscript);
header("Content-Type: application/json");
exit($joinscript);
}