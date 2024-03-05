<?php
// removed class because we don't need to make a class every time
function buildHeader()
{
  require_once $_SERVER["DOCUMENT_ROOT"] . "/config/site/header.php";
}
function buildFooter()
{
  require_once $_SERVER["DOCUMENT_ROOT"] . "/config/site/footer.php";
}
