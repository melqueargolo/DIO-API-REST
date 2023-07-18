<?php
define("ROOT_PATH", __DIR__ . "/../");
//echo ROOT_PATH;

define("DATABASE_FILE", ROOT_PATH . 'database.json');
//echo DATABASE_FILE;
 
require_once ROOT_PATH . "/Controller/Api/BaseController.php";

//echo ROOT_PATH . "/Controller/Api/BaseController.php";
 
require_once ROOT_PATH . "/Model/UserModel.php";
?>