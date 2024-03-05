<?php
  // pop off gurll
  include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';
  $id = $_GET["id"];
  ob_start();

  if (file_exists($id)) {
    header("Content-Type: text/plain");
    echo"\n";
    echo"--rbxassetid%" . $id . "%";
    echo"\n";
    readfile($id);
    } else {
      header("Location: https://assetdelivery.roblox.com/v1/asset/?id=$id");
      }
  
  $data = ob_get_clean();
$signature;
$key = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/config/classes/include/private.pem");
openssl_sign($data, $signature, $key, OPENSSL_ALGO_SHA1);
echo "--rbxsig" . sprintf("%%%s%%%s", base64_encode($signature), $data);
  ?>