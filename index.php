<?php

//use an autoloader
require 'libs/controller.php';
require 'libs/bootstrap.php';
require 'libs/model.php';
require 'libs/view.php';
require 'libs/database.php';
require 'config/paths.php';
require 'config/database.php';
require 'libs/session.php';

//echo '<br>Glowny plik index.php: powoluje obiekt klasy bootstrap (libs\bootstrap.php)';
$app = new bootstrap();
?>
