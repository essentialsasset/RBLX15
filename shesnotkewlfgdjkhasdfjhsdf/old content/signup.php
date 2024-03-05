<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/testingfoldercausewhynot/config/main.php';
  
  
  if(isset($_SESSION['id'])){
    header("Location: /");
  }
  
 //echo password_hash("rblx15isthebestrevivalever",PASSWORD_ARGON2ID);
    pageBuilder1::buildHeader();

  ?>

     
                        
  <main class="pt-5 container">
<div class="card">
  <div class="card-body">
          <div id="liveAlertPlaceholder"></div>
  <center>
    <h1>
      <h1 style="font-size: 70px;">RBLX15 <span class="badge text-bg-danger">Public Developer</span></h1>
    </h1>
    <?php
  function InviteKeyValidation($key){
      include $_SERVER['DOCUMENT_ROOT'].'/config/main.php';
      $doshit = $pdo->prepare("SELECT * FROM `invitekeys` WHERE `invite_key` = :key");
      $doshit->bindParam(":key",$key);
      $doshit->execute();
      
      if($doshit->rowCount() == 1){ // spaghetti code polish l8tr
        $getKeyInfo = $doshit->fetch(PDO::FETCH_ASSOC);
        if($getKeyInfo['is_used'] == 0){
          return true; // key works and isnt used, i might change l8tr to just devalidate so its easier in the code
        }else{
          return false; // key is not valid cause its already fuckin used
        }
      }else{
        return false; // key doesnt exist
      }
    }
  
  
  if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['uid']; // this should be fine as long as the pdo thing works
    $password = $_POST['pwd'];
    $invitekey = $_POST['invkey'];
    
    $FindUser = $pdo->prepare("SELECT * FROM `users` WHERE `username` = :username");
    $FindUser->bindParam(":username",$username);
    $FindUser->execute();
    if($FindUser->rowCount() == 0){
      
      if(InviteKeyValidation($invitekey)){
        $doshit = $pdo->prepare("UPDATE `invitekeys` SET `is_used` = 1 WHERE `invite_key` = :key");
        $doshit->bindParam(":key",$invitekey);
        $doshit->execute(); // devalidates key
        // add checks and shit for the username not needed for now.. but later it will be needed when registration goes public!!
        $passHash = password_hash($password,PASSWORD_ARGON2ID);
        $insertUser = $pdo->prepare("INSERT INTO `users` VALUES (NULL,:username,:password)");
        $insertUser->bindParam(":username",$username);
        $insertUser->bindParam(":password",$passHash);
        $insertUser->execute();
        
        $grabNewUser = $pdo->prepare("SELECT * FROM `users` WHERE `username` = :uid");
        $grabNewUser->bindParam(":uid",$username);
        $grabNewUser->execute();
        $grabNewUser = $grabNewUser->fetch(PDO::FETCH_ASSOC);
        $UserID = $grabNewUser['user_id']; // u can use this in sessions
        
        $doshit = $pdo->prepare("UPDATE `invitekeys` SET `used_by` = :userid WHERE `invite_key` = :key");
        $doshit->bindParam(":userid",$UserID);
        $doshit->bindParam(":key",$invitekey);
        $doshit->execute();
        $_SESSION['id'] = $UserID; // hopefully that doesnt fucked or else.. bad shit happens
        header("Location: /testingfoldercausewhynot/home");
      //echo '<div class="alert alert-success" role="alert">Account Created!</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Invalid Key!</div>';
      }
    }else{
      echo '<div class="alert alert-danger" role="alert">Account Already Exists!</div>';
    }
  } // I use function now - thermical
  ?>
    <p>
      <form method="post">
        <input type="text" name="uid" placeholder="Username" class="form-control"><br>
        <input type="password" name="pwd" placeholder="Password" class="form-control" width="50" height="100"><br>
        <input type="text" name="invkey" placeholder="Invite Key" class="form-control" width="50" height="100"><br>
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>
    </p>
    <hr>
    <br>
    </center>
   
</body>
</html>
    </div></div>
<br>
<br>
<br>

<br>
    <br><br><br><br><br><br><br><br><br><br>

    <script>
      const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    appendAlert('get trolled you cannot register', 'danger')
  })
}
  </script>
<?php
  pageBuilder1::buildFooter();
  ?>