<?php
require_once __DIR__ . 'autoloader.php';
require_once __DIR__ . '/config.xml';


$mapFile = 'config.xml';

(new Controller($mapFile))->process();
