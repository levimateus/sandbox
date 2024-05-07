<?php
$f = fopen('config.ini', 'r');

$name = 'John doe';

if (empty($name)) {
    $name = "someone";
}

echo "Hello world " . $name;

fclose($f);