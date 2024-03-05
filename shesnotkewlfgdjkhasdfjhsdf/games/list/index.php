<?php
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
  $query = mysqli_query($con,"SELECT * FROM games ORDER by gameId");

  include_once $_SERVER['DOCUMENT_ROOT'].'/config/main.php';
  buildHeader();
  // not cleaning up this shitty code until meditext allows someone to rewrite the php :P
  ?>

<html>
<head>
<title>Austiblox - Games</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" text="#000000">
<?php
while($row = $query->fetch_array()){
          echo '
  <div class="col-sm-3 mb-3 mb-sm-0">
            <a class="game-item-anchor" rel="external" href="/games/start?placeid='.$row['gameId'].'" style="text-decoration: none; color: black;">
                  <div class="card">
      <div class="card-body">
            <div class="game-item">
    <div class="always-shown">
        
            <span class=""><img class="game-item-image" src="/images/Unnaproved.png"/></span>
            <div class="game-name notranslate text-truncate text-center">
                '.$row['gameName'].'  
            </div>
            <div class="game-creator notranslate text-truncate text-center">
                By: '.$row['owner'].'
            </div>
                           <div class="game-creator notranslate text-truncate text-center">
                Client: '.$row['client'].'
            </div>
        <div class="hover-shown" id="hoverShown">
             <div class="game-likes notranslate text-truncate text-center">
                <span class="bar"> <span class="inner-bar" style="width: 100%"> </span> </span>
                <i class="fa-solid fa-thumbs-up"></i> 100% \ 0 <i class="fa-solid fa-thumbs-down"></i>
            </div>
        </div>
        </div>
     
    </div></div></a></div></div>';
}
?>
</body>
</html>
