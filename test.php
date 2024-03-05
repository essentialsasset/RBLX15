<?php
  session_start();
  $session = $_SESSION["devpass"] = false;
  
  if (isset($session)){
    header("HTTP/1.1 404 Not Found");
    require_once $_SERVER["DOCUMENT_ROOT"] . "/errors/404/index.php";
    //exit(json_encode(array("error" => false, "message" => "done")));
  }
  else{
    exit(json_encode(array("error" => true, "message" => "nah bro ur shitty browser doesnt work go get a new one :skull:")));
  }