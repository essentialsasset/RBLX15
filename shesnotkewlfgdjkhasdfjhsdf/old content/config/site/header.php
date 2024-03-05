<!DOCTYPE html>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/testingfoldercausewhynot/config/main.php'; pageBuilder1::buildHeader(); ?>
<head>
<title>RBLX15</title>
  <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">

      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">

      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">

      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="fixed-top w-100">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <img src="https://images.rbxcdn.com/f76c76889f4b167ca1f27edc27eb8146.png" width="150" height="40"></a></span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/testingfoldercausewhynot/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/testingfoldercausewhynot/games">Games</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="https://www.mediafire.com/file/8zedrtxnehs379n/RBLX15_v2.7z/file">Download</a>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav">
    <?php
  if(isset($_SESSION['id'])){
  echo'
            <li class="nav-item">
         <a href="/testingfoldercausewhynot/logout" class="btn btn-primary me-md-1">Logout</a>
             </li>
    ';
  }else{
    echo'
              <li class="nav-item">
         <a href="/testingfoldercausewhynot/login" class="btn btn-primary me-md-1">Login</a>
             </li>
          <li class="nav-item">
        <a href="/testingfoldercausewhynot/register" class="btn btn-secondary">Register</a>
      ';
  }
  ?>

      </li>
    </ul>
  </div>
</nav>
<div class="alert alert-warning" role="alert">
  <center><? echo(config1["site"]["globalMSG"]["staffMessage"]); ?></center>
</div>
  </div>
</div>
  </div>
  <br><br><br><br><br><br><br>
</body>