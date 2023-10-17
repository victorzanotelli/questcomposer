<?php
require __Dir__ .  '/../vendor/autoload.php';

use Wild\App\Hello;

$hello = new Hello();

echo $hello->talk();