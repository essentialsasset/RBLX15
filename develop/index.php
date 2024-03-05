
<?php // thank you for killing my develop page, newuser.
    //used a toturial because i'm very lazy and i'm going to connect the sign up thing
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysql.ct8.pl');
define('DB_USERNAME', 'm36802');
define('DB_PASSWORD', 'NRQK591yTpoL8y7A:e~2nw5<0QVsmr');
define('DB_NAME', 'm36802_database');
/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['gamename'];
  $port = $_POST['gameport'];
  $desc = $_POST['gamedesc'];
  $ip = $_POST['gameip'];
  if (empty($name) && empty($port) && empty($desc) && empty($ip)) {
    echo "Please put the required fields";
  } else {
    $check = mysqli_query($con,"SELECT * FROM games WHERE LCASE(gamename) = '".htmlspecialchars($name)."'"); // This was inspired by Rainway and his crappy system for preventing spam attacks. I DIDNT COPY THIS FROM RAINWAY. INSTEAD I COPIED FROM THIS POST: https://stackoverflow.com/questions/7537366/prevent-users-from-having-the-same-username
    if(mysqli_num_rows($check) == 1){ // checking if user is spamming or already exist the game
    die('Kids, dont ever spam. its a horrible act. If isnt your case, well, put a different name');
    } else {
    mysqli_query($con,"INSERT INTO `games` (`gameName`, `gameId`, `gameDesc`, `gameIp`, `port`) VALUES ('".htmlspecialchars($name)."', NULL, '".htmlspecialchars($desc)."', '".$ip."', ".$port.");"); // Adds the game .rand(3,99999).
  }
 }
}
 include_once $_SERVER['DOCUMENT_ROOT'].'/config/main.php';
    buildHeader();

 
  // same shitty code :P
  ?>
<div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.idk16\.cf|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm" data-as-http-regex="((blog|wiki|[^.]help|corp|polls|bloxcon|developer|devforum)\.roblox\.com|robloxlabs\.com)">
</div>
<div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500">
</div>
<div id="http-retry-data" data-http-retry-max-timeout="0" data-http-retry-base-timeout="0">
</div>
<div id="fb-root"></div>
<div class="nav-container no-gutter-ads">
<div id="AdvertisingLeaderboard">
</div>
<div id="BodyWrapper" class="">
<div id="RepositionBody">
<div id="Body" class="body-width">
<div id="TosAgreementInfo" data-terms-check-needed="True">
</div>
<div id="DevelopTabs" class="tab-container">
<div id="MyCreationsTabLink" class="tab-active" data-url="/develop">
My Creations
</div>
<div id="LibraryTabLink" onclick="window.location.href = '/develop/library/'" class="">
Library
</div>
</div>
<div>
<div id="MyCreationsTab" class="tab-active">
<div class="BuildPageContent" data-groupid="">
<input id="assetTypeId" name="assetTypeId" type="hidden" value="">
<table id="build-page" data-asset-type-id="" data-edit-opens-studio="True">
<tbody>
<tr>
<td class="menu-area divider-right">
<a href="/develop?Page=universes" class="tab-item">Games</a>
<td class="content-area ">
<input id="assetTypeId" name="assetTypeId" type="hidden" value="0" />
<input id="groupId" name="groupId" type="hidden" value="" />
<input id="onVerificationPage" name="onVerificationPage" type="hidden" value="False" />
<input id="captchaEnabled" name="captchaEnabled" type="hidden" value="False" />
<input id="captchaToken" name="captchaToken" type="hidden" value="" />
<input id="captchaProvider" name="captchaProvider" type="hidden" value="" />
<div id="container">
<div id="audio-bucket-data" data-max-audio-size="20480000" data-max-audio-length="420" data-audio-enabled="false" data-audio-size="8388608" data-audio-price="100" data-shortsoundeffect-enabled="true" data-shortsoundeffect-size="786432" data-shortsoundeffect-price="20" data-longsoundeffect-enabled="true" data-longsoundeffect-size="1835008" data-longsoundeffect-price="35" data-music-enabled="true" data-music-size="8388608" data-music-price="70" data-longmusic-enabled="true" data-longmusic-size="20480000" data-longmusic-price="350"></div> <div class="form-row">Upload a server. you need input theses things:</div>
  <br>
<div class="form-row">
<span id="file-error" class="error"></span>
</div>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="gamename">
   IP: <input type="text" name="gameip">
   port: <input type="text" name="gameport">
   description: <input type="text" name="gamedesc">
   <br>
  <input type="submit"class="btn-medium btn-primary btn-level-element ">
</form>
</div>
  <?php include_once $_SERVER['DOCUMENT_ROOT'].'/config/site/footer.php';?>