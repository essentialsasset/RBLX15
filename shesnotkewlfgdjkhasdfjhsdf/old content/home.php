<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/testingfoldercausewhynot/config/main.php';
  
  pageBuilder1::buildHeader();
  
  if(!isset($_SESSION['id'])){
    header("Location: /testingfoldercausewhynot/");
  }
  
  $FindUser = $pdo->prepare("SELECT * FROM `users` WHERE `user_id` = :id");
  $FindUser->bindParam(":id",$_SESSION['id']);
  $FindUser->execute();
  
  $FindInfo = $FindUser->fetch(PDO::FETCH_ASSOC);
  
  echo "Hello, " . $FindInfo['username'], ".";
  echo " temp homepage!";
  
  // thermical was here! :O
  pageBuilder1::buildFooter();
  ?>

