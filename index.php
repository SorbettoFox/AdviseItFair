<?php
require 'vendor/autoload.php';
require_once 'controllers/main.php';
$f3 = Base::instance();
$main = new MainController($f3);
$f3->run();