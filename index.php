<?php

use Gondr\Route;

require("vendor/autoload.php");
require("web.php");

define("__ROOT", __DIR__);

$url = isset($_GET['url']) ? "/" . $_GET['url'] : "/";

Route::route($url);