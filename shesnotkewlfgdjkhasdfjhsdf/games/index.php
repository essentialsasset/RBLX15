<?php

  //$query = mysqli_query($con,"SELECT * FROM games ORDER by gameId");

  include_once $_SERVER['DOCUMENT_ROOT'].'/config/main.php';
  buildHeader();
  // not cleaning up this shitty code until meditext allows someone to rewrite the php :P
  
  
  $FindGames = $pdo->prepare("SELECT * FROM games ORDER by gameId");
  $FindGames->execute();
  ?>



                <div>
<noscript><div class="alert alert-warning"><div class="text-center">Please enable Javascript to use all the features on this site.</div></div></noscript>
                          
                </div>
                                

<style>
 /* add some kewl game stuff */
  .bar
  {
    background: #dc3545;
    height: 10px;
    width: 179px;
    display: block;
    border-radius: 5px;
  }
  
  .inner-bar
  {
    background: #198754;
    display: block;
    border-radius: 5px;
    height: 100%;
  }
  
  .game-item-image
  {
    width: 180px;
    height: 100px;
  }
  
  .game-item
  {
    color: white;
  }
</style>

<div class="main container" style="width:1000px">
    <div class="games-lit">
      <div class="d-md-flex align-items-center w-100">
<div class="d-flex align-items-center">

</div>
<form method="get" class="ms-md-auto me-md-4" style="min-width: 300px;">
</div>
</form>
<h1 class="text-center">Games</h1>
        <div class="row">
<small class="text-center"><p><a class="link-primary" href="/games">Usermade Games</a></p></small>
<small class="text-center"><p><a class="link-secondary" href="/games/popular">Popular</a></p></small>
          </div>
</div>
      <div class="card">
  <div class="card-body">
    <div class="row">

            <?php
while($row = $FindGames->fetch(PDO::FETCH_ASSOC)){
          echo '
  <div class="col-sm-3 mb-3 mb-sm-0">
            <a class="game-item-anchor" rel="external" href="/Place.aspx?id='.$row['gameId'].'" style="text-decoration: none; color: black;">
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
      </div>
  </div>
</div>
    </div>


 
</div>
</body>
</html>
<?php buildFooter();?>
