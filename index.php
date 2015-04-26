<?php
require_once __DIR__ . '/Request.php';
require_once __DIR__ . '/TestClass.php';
require_once __DIR__ . '/ActionMapLoader.php';
require_once __DIR__ . '/ActionInfo.php';
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/config.xml';

$mapFile = 'config.xml';

(new Controller($mapFile))->process();
