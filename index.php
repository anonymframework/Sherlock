<?php

require 'vendor/autoload.php';

use Sherlock\Shercon;

$sherlock = new Shercon([
    'host' => 'localhost',
    'dbname' => 'homestead',
    'username' => 'homestead',
    'password' => 'secret'
]);

print_r($sherlock->open());