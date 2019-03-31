<?php

require __DIR__. '/../vendor/autoload.php';

//use App\Format\JSON;
//use App\Format\XML;
//use App\Format\YAML;

use App\Format\{JSON,XML,YAML};


$json = new JSON();
$xml = new XML();
$yaml = new YAML();

print_r('Namespaces');

print_r($json);
print_r($xml);
print_r($yaml);