<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/config/main.php";
  
$ip = addslashes($_GET["ip"]);
$port = addslashes($_GET["port"]);

$script = array(
    "ClientPort" => 0,
    "MachineAddress" => "$ip",
    "ServerPort" => $port,
    "PingUrl" => "",
    "PingInterval" => 120,
    "UserName" => "Guest " . rand(1, 10000),
    "SeleniumTestMode" => false,
    "UserId" => rand(1, 100000000),
    "SuperSafeChat" => true,
    "PlaceId" => 1,
    "MeasurementUrl" => "",
    "WaitingForCharacterGuid" => "e01c22e4-a428-45f8-ae40-5058b4a1dafc",
    "BaseUrl" => "http://www.rb15.us.to/",
    "ChatStyle" => "Classic",
    "VendorId" => 0,
    "ScreenShotInfo" => "",
    "VideoInfo" => "",
    "CreatorId" => 1,
    "CreatorTypeEnum" => "User",
    "MembershipType" => "OutrageousBuildersClub",
    "AccountAge" => 365,
    "CookieStoreFirstTimePlayKey" => "rbx_evt_ftp",
    "CookieStoreFiveMinutePlayKey" => "rbx_evt_fmp",
    "CookieStoreEnabled" => true,
    "IsRobloxPlace" => false,
    "GenerateTeleportJoin" => false,
    "IsUnknownOrUnder13" => false,
    "SessionId" => "",
    "DataCenterId" => 0,
    "FollowUserId" => 0,
    "UniverseId" => 0
);
$script = json_encode($script);
$script = str_replace('\/', '/', $script);// keep me
$script = str_replace('\/', '/', $script);// keep me
header("Content-Type: application/json");
echo(gameUtils::signv1($script));
  
  // Encode it!
$data = json_encode($joinscript, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);

// Sign joinscript
$signature = get_signature("\r\n" . $data);

// exit
exit("--rbxsig%". $signature . "%\r\n" . $data);

    // Execute the cURL request
    $response = curl_exec($ch);

    // Close cURL session
    curl_close($ch);

    // Output the response for debugging (optional)
    echo $response;
}
  ?>
