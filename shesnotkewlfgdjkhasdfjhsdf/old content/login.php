<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/testingfoldercausewhynot/config/main.php';
  
  pageBuilder1::buildHeader();
  
  if(isset($_SESSION['id'])){
    header("Location: /");
  }
  
  // thermical was here! :O
  ?>

     
                        
  <main class="pt-5 container">
<div class="card">
  <div class="card-body">
          <div id="liveAlertPlaceholder"></div>
  <center>
    <h1>
      <h1 style="font-size: 70px;">RBLX15 <span class="badge text-bg-danger">Alpha</span></h1>
    </h1>
    <?php
  if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['uid']; // this should be fine as long as the pdo thing works
    $password = $_POST['pwd'];
    
    $FindUser = $pdo->prepare("SELECT * FROM `users` WHERE `username` = :username");
    $FindUser->bindParam(":username",$username);
    $FindUser->execute();
    if($FindUser->rowCount() == 1){
      $FindInfo = $FindUser->fetch(PDO::FETCH_ASSOC);
      if(password_verify($password,$FindInfo['password'])){
        
        $_SESSION['id'] = $FindInfo['user_id']; // hopefully that doesnt fucked or else.. bad shit happens
        header("Location: /testingfoldercausewhynot/home");
        //echo '<div class="alert alert-success" role="alert">Logged in!</div>';
      }else{
        echo '<div class="alert alert-danger" role="alert">Wrong Username or Password!</div>';
      }
    }else{
      echo '<div class="alert alert-danger" role="alert">Wrong Username or Password!</div>';
    }
  }
  ?>
    <p>
      <form method="post">
        <input type="text" name="uid" placeholder="Username" class="form-control"><br>
        <input type="password" name="pwd" placeholder="Password" class="form-control" width="50" height="100"><br>
        <button type="submit" class="btn btn-primary">Login</button>
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