<?php
require "vendor/autoload.php";

$info = \Lucia\ip\Query::find('156.255.2.221');
var_dump($info);