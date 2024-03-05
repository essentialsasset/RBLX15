<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/config/main.php'; 
  buildHeader();
  $Guest_Name = "Guest".rand(1, 9999);
  $FindGames = $pdo->prepare('select gameName,gameDesc,port,gameIp,owner from games where gameId="'.$_GET['id'].'"');
  $FindGames->execute();
  
  $row = $FindGames->fetchAll(PDO::FETCH_ASSOC)[0];
    
  if (!isset($row["gameName"]))
  {
    // just do a 404 page
    header("Location: /errors/404.html");
    exit;
  }
  else if (!isset($_GET['id']))
  {
    // just do a 404 page
    header("Location: /errors/404.html");
    exit;
  }
?>
<html>
<meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
  <title>
  <?php echo $row['gameName']?> - rblx15
</title>
    
<body data-bs-theme="dark">
        <noscript><div class="SystemAlert"><div class="SystemAlertText">Please enable Javascript to use all the features on this site.</div></div></noscript>
        
        
        
                    <center>
        <div id="BodyWrapper">
            <div class="main container" style="width:900px">
              <div class="card">
  <div class="card-body">

            <div id="RepositionBody">
                <div id="Body" style="width:970px;">
                    
   
</div>
        </div>

        
        

<div id="Item" class="place-item redesign body">
    <div class="item-header">
        <h1 class="notranslate"><?php echo $row['gameName']; ?></h1>
        <h4>By: <?php echo $row['owner']?></h4>
        
        
    </div>
    <div class="left-column">
        <div class="item-media">.
            
<script type="text/javascript">
    if (typeof Roblox === "undefined") {
        Roblox = {};
    }
    if (typeof Roblox.FileUploadUnsupported === "undefined") {
        Roblox.FileUploadUnsupported = {};
    }
    Roblox.FileUploadUnsupported.Resources = {
        //<sl:translate>
        notSupported: " This device does not support file upload."
        //</sl:translate>
    };
    if (typeof Roblox.CreateSetPanel === "undefined") {
        Roblox.CreateSetPanel = {};
    }
    Roblox.CreateSetPanel.Resources = {
        //<sl:translate>
        youMaySelect: "You may select a maximum of ",
        elementsInList: " elements from this list!"
        //</sl:translate>
    };
</script>
        <style type="text/css">
        .youTubeVideoOverlay
        {
            position:absolute;
            top:0px;
            left:0px;
            width: 120px;
            height: 70px;
            z-index:5;
            cursor: pointer;
            background: white;
            opacity: 0.0;
            filter: alpha(opacity=0.0);
        }
        .SelectedYouTubeGalleryIcon
        {
            top: -3px;
            margin: 2px !important;  /** !important makes sure we override the margin in divSmallGalleryItem **/
            border: 3px solid black; /** If you change this border size, you need to change the margin, as well as the top value **/
        }
        .RemoveYouTubeGalleryImage
        {
            cursor: pointer;
            position: absolute;
            top: -10px;
            right: -10px;
            z-index: 6; /** Make sure this is higher than z-index of youTubeVideoOverlay **/
        }
        .divSmallGalleryItem
        {
            height: 70px;
            width: 120px;
            float: left;
            position:relative;
            margin: 5px;
        }
        #divSmallGalleryItemBox
        {
            width: 500px;
            height:100px;
            position:relative;
            overflow-x: auto;
            overflow-y: hidden;
        }
        #divSmallGalleryScrollContainer
        {
            margin: 0px auto;
            margin-top: 5px;
            margin-bottom: 5px; /** Allows for scroll bar **/
            display: inline-block;
            width: 0px;
            *display:inline;
            *zoom:1;
        }
        .smallGalleryThumbItem
        {
            float: left;
        }
        </style>

        <div style="margin: 0px auto; width: 500px">
        <div id="ItemThumbnail" style="height:280px; width: 500px">
        <div id="bigGalleryThumbItem" style="position: absolute;">
            <a id="ctl00_cphRoblox_NewGamePageControl_RichMediaThumbDisplay_rbxGalleryAssetThumbnail_rbxAssetImage" class=" notranslate" title="<?php echo $row['gameName'] ?>" class=" notranslate" onclick="__doPostBack('ctl00$cphRoblox$NewGamePageControl$RichMediaThumbDisplay$rbxGalleryAssetThumbnail$rbxAssetImage','')" style="display:inline-block;height:280px;width:500px;cursor:pointer;"><img src="/images/Unnaproved.png" height="280" width="500" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="<?php echo $row['gameName'] ?>" class=" notranslate"/></a>




            </div>
            </div>
                

    

    

</div>



            
        </div>

            <div class="clear"></div>


</div>
            </span>
        </div>
        <div class="description notranslate">
                <p>Description: </p>
            <div id="DescriptionText" class="invisible"><?php echo $row['gameDesc'] ?></div>
            <pre id="PlaceDescription" class="body linkify"><span class="place-description-content"><?php echo $row['gameDesc'] ?></span><span class="more-holder"></span></pre>
        </div>
        <div class="facebook-like">
                
        </div>
    </div>
    <div class="right-column">
        <div class="builder divider-bottom">
          <div class="builder-image">
              
              <div class="roblox-avatar-image" data-user-id="1" data-image-size="tiny"></div>
              
          </div>
      <div class="buttons">
          <div id="VisitButtonContainer">
              
              <div class="VisitButtonsLeft ">
<script defer>
              //const gameIp = "<?= $row['gameIp'] ?>";
              const placeId = <?= $_GET['id'] ?>;
              //const port = <?= $row['port'] ?>; // old systems
              //const username = "<?= $Guest_Name ?>";
        function join() {
              const placeLauncher = `https://www.rb15.us.to/game/PlaceLauncher.ashx?placeId=${placeId}`;
              const joinArgs = `rblx15-player-rb15:1+launchmode:play+gameinfo:0+launchtime:17020401369379+placelauncherurl:${placeLauncher}+browsertrackerid:197870394468`;
              window.location.href = joinArgs;
        }
</script>
            

             <button class="float-left submit-button btn btn-primary" data-bs-toggle="modal" onclick="join()"  data-bs-target="#exampleModal">Play</button>
                                  </center>



          </form>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>Requesting Server...</center>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <br><br><br><br>
        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
</div>
        <br>
       <center><div id="progressthing2" style="display: block;">
                        
                        
                        <a href="https://www.mediafire.com/file/2fqevxrs430uouu/RBLX15_v3.7z/file" class="btn btn-success w-75 mx-auto mb-2">Install ROBLOX15</a>
                        <a href="https://cdn.discordapp.com/attachments/1203031608245100667/1204233708471844884/version-7f64cb3c8d934c14aa10e33de8a7f8a0-Roblox.exe?ex=65d3fd09&is=65c18809&hm=8634fbd7d01c4924dd1de224ed2888777ded1938c3d79e7362b7568d274c7e6a&" class="btn btn-success w-75 mx-auto mb-2">Install ROBLOX15 /w RCC</a>
                    </div>
      </div></center>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
                    <script> // the button or section or div container or anything
    //var btnEl = document.getElementById(‘yes’);
    // target time in ISO 8601 format (UTC)
    //var target = new Date(“2016-08-25T01:33:00Z”);
    // check the time every second
    //var thisTimer = setInterval(function(){
    //var now = new Date(); // what time is it now?
    // check if we’ve reached or exceeded our target time
   // if (now.getTime() >= target.getTime()) {
    //btnEl.style.display = ‘block’; // show the button
    //clearInterval(thisTimer); // stop the timer
    //}
    //}, 1000); // 1000 milliseconds interval
    </script>
       
   
</body>
       </div>  </div></div>    
</html>
  <?php
  buildFooter();
  ?>