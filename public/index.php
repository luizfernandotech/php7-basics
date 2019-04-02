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
$xml = new XML($data);
$yaml = new YAML($data);

print_r("Inheritance\n\n");

var_dump($json);
var_dump($xml);
var_dump($yaml);

print_r("Result of conversions\n\n");
var_dump($json->convert());
var_dump($xml->convert());
var_dump($yaml->convert());

