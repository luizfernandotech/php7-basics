<?php

require __DIR__. '/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;

$data = [
    "key" => "value",
    "another_key" => "another_value"
];

$json = new JSON($data);
$xml = new XML();
$yaml = new YAML();

print_r("Method & Field Visibility\n\n");

var_dump($json);
//var_dump($xml);
//var_dump($yaml);

//$json->data = [];
var_dump($json->getData());

//$json->setData([]);
var_dump($json->getData());


var_dump($json->convert());
//var_dump(JSON::DATA);
//var_dump(JSON::convertData());
var_dump((string) $json);