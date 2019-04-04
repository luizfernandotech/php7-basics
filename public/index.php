<?php
declare(strict_types=1);

require __DIR__. '/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use \App\Format\BaseFormat;
use App\Format\FromStringInterface;
use App\Format\NamedFormatInterface;

use App\Serializer;

print_r("Dependecy Injection\n\n");


$data = [
    "name" => "Luiz",
    "surname" => "Silva"
];

$json = new JSON();
$xml = new XML();
$yaml = new YAML();

$formats = [$json, $xml, $yaml];

$serilizer = new Serializer($json);
var_dump($serilizer->serialize($data));
