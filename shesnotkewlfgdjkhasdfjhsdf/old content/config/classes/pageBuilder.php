<?php
class pageBuilder1{
    public static function buildHeader() {
  require_once $_SERVER["DOCUMENT_ROOT"] . "/testingfoldercausewhynot/config/site/header.php";
}
    public static function buildFooter() {
  require_once $_SERVER["DOCUMENT_ROOT"] . "/testingfoldercausewhynot/config/site/footer.php";
}
}